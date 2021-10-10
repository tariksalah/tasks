<?php

namespace App\Helpers;
use Illuminate\Support\Arr;
use Carbon\Carbon;
use DateTime;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Filesystem\Filesystem;

class UtilHelper
{

	public static function getUserIp() {
		return request()->ip();
	}

	public static function formatNumber($number, $decimalPlace = 2)
	{
	    return round($number, $decimalPlace);
			// return number_format($number, 2, '.', ''); me
	}

	public static function FormatString( string $str=null )
	{
			if ($str)
			{
					$str = str_replace('أ', 'ا', $str);
					$str = str_replace('إ', 'ا', $str);
					$str = str_replace('آ', 'ا', $str);
					$str = str_replace('لإ', 'لا', $str);
					$str = str_replace('لأ', 'لا', $str);
					$str = str_replace('لآ', 'لا', $str);
					$str = str_replace('ى', 'ي', $str);
					$str = str_replace('ة', 'ه', $str);
			}
			return $str;
	}

	public static function formatNormal($string)
	{
		return self::FormatString(self::secureString(trim($string)));
	}

	public static function secureString($string)
	{
				$string = strip_tags($string);
				$string = preg_replace('/[\r\n\t ]+/', ' ', $string);
				$string = preg_replace('/[\"\*\/\:\<\>\?\'\|]+/', ' ', $string);
				return $string;
	}

	public static function convertToLower($string)
	{
		return mb_convert_case( $string , MB_CASE_LOWER, "UTF-8");
	}

	public static function validateAlias($result)
	{
			$result=trim($result);
			$result=str_replace(array(':', '\\', '/','/', '*' ,'(\/|)' , '|', '$' , ')' , '(' ,'?' ,'؟' ,']' ,'[' ,'}' ,'{' ,'"' ,';' ,'&' ,'^' ,'!' ,'@' ,'#' ,'%','+' ,'=',',' ,'~' ,'-','.'), ' ',$result);
			$result=str_replace(' ', '-', $result);
			$result=str_replace(array('----','---','--'),'-', $result);
			return $result;
	}

	public static function attachExtsAll()
	{
		return 'jpeg,png,gif,jpg,svg,pdf,txt,doc,docx,xlsx,xls,xlx,xlm,ppt,pptx,mpga,mp4,webm,wav';
	}

	public static function attachSizeAll()
	{
		return 5125;
	}

	public static function prepareFullTextSearch($criteria)
	{
			// $words=self::formatNormal($criteria);
			$words = explode(' ', $criteria);
			foreach($words as $key => $word)
			{
					if(strlen($word) >= 3) // small words arnt indexed by mysql
					{ $words[$key] = '+' . $word . '*'; }
			}
			$words = implode(' ', $words);
			return $words;
	}

	public static function prepareErrorBag($validateResult)
  {
      $error = '';
      $errors = $validateResult->messages()->getMessages();
      foreach ($errors as $message)
      { $error = $error . $message[0]; }

      return $error;
  }


	public static function buildTree($elements, $parentId = 0, $depth=0)
	{
			$branch = [];
			foreach ($elements as $element) {
				if ($element->parent_id == $parentId)
				{
						$children = self::buildTree($elements, $element->id, $depth+1);
						if ($children)
						{
							$element->children = $children;
							$element->childrenIds = Arr::pluck($children,'id');
						}
						$element->depth = $depth;
						$branch[] = $element;
				}
			}

			return $branch;
	}

	public static function buildTreeRoot($objects , $dont=null , array &$result=array() , $parent=0 , $depth=0)
	{
			foreach ($objects as $key => $object)
			{
					if (($object->parent_id == $parent) && ($dont!=$object->id))
					{
							$object->depth = $depth;
							array_push($result,$object);
							unset($objects[$key]);
						 self::buildTreeRoot($objects, $dont ,$result,$object->id, $depth + 1);
					}
			}
			return $result;
	}

	public static function treeToRoot($tree,$nest)
	{
			$root = [];
			foreach ($tree as $child) {
				$root[] = $child;
				if ( isset( $child->$nest )) {
					$root = array_merge($root,self::treeToRoot($child->$nest,$nest));
				}
			}

			return $root;
	}

	public static function getParents( $table, $parent_id = 0, $where = [])
	{
			$result = DB::table($table)->where(['id' => $parent_id , 'is_active' => 1 ] + $where)->get();
			$return = [];
			foreach($result as $row) {
					$return[$row->id] = $row;
			}
			return $return;
	}



	public static function dateFormat()
	{
		return 'd/m/Y';
	}

	public static function dateFormatDB()
	{
		return 'Y-m-d';
	}

	public static function timeFormatDB()
	{
		return 'H:i';
	}

	public static function dateTimeFormatDB()
	{
		return 'Y-m-d H:i:s';
	}

	public static function currentDate()
	{
		return date('Y-m-d');
	}

	public static function currentDateTime()
	{
		return date('Y-m-d H:i:s');
	}

	public static function validateDate($date)
	{
			$format1 = 'j-m-Y';
			$format2 = 'd-m-Y';
			$format3 = 'j-n-Y';
			$format4 = 'd-n-Y';
			$format5 = 'Y-m-d';

			$date=  str_replace('/','-',$date);

			$d = DateTime::createFromFormat($format1, $date);
			$r = $d && $d->format($format1) == $date;
			if ($r !== false)
			{return $d->format( self::dateFormat() );}

			$d = DateTime::createFromFormat($format2, $date);
			$r = $d && $d->format($format2) == $date;
			if ($r !== false)
			{return $d->format( self::dateFormat() );}

			$d = DateTime::createFromFormat($format3, $date);
			$r = $d && $d->format($format3) == $date;
			if ($r !== false)
			{return $d->format( self::dateFormat() );}

			$d = DateTime::createFromFormat($format4, $date);
			$r = $d && $d->format($format4) == $date;
			if ($r !== false)
			{return $d->format( self::dateFormat() );}

			$d = DateTime::createFromFormat($format5, $date);
			$r = $d && $d->format($format5) == $date;
			if ($r !== false)
			{return $d->format( self::dateFormat() );}

			return  false;

	}

	public static function DateToDb($date)
	{
		return date(self::dateFormatDB(), strtotime(str_replace('/','-', $date ) ));
	}

	public static function TimeToDb($time)
	{
		return date(self::timeFormatDB(), strtotime($time));
	}

	public static function dateTimeToDb($time)
	{
		return date(self::dateTimeFormatDB(), strtotime($time));
	}

	public static function DateToShow($date)
	{
	    return date( self::dateFormat() , strtotime($date));
	}

	public static function dateAdd($date,$days)
	{
			$date = DateTime::createFromFormat(self::dateFormatDB(), $date);
			date_add($date,date_interval_create_from_date_string ($days.' days'));
			return date_format($date, self::dateFormatDB());
	}

	public static function dateDiff($date1, $date2)
	{
			return date_diff(date_create($date1), date_create($date2))->days;
	    // if ($date2 > $date1) {
	    //     return date_diff(date_create($date1), date_create($date2))->days;
	    // } else {
	    //     return date_diff(date_create($date2), date_create($date1))->days;
	    // }
	}

	// public static function getDivideFolder($folder)
	// {
	//	$divideFolder = date('Y-m');
	// 	if ( file_exists( public_path().'/'.$folder.'/'.$divideFolder) ) {
	//		return $divideFolder;
	// }
	// return false;
	// }

	// public static function createDivideFolder($folder)
	// {
	// 	$folder = $folder.'/'.date('Y-m');
	//  File::makeDirectory($dir);
	//  if( File::makeDirectory($dir))
	//  return true;
	//  return false;
	//  File::makeDirectory($dir,$mode = 0755,$recursive = true, $force = true);
	// }


	public static function translateFromJson( $jsonData , $language = null )
	{
			if (! $language) {
				$language = app()->getLocale();
			}

			$all = json_decode( $jsonData , true );

			if (isset( $all[$language] )) {
				return $all[$language];
			}

			return null;
	}

	public static function encodeData($data)
	{
		return json_encode($data);
	}

	public static function decodeData($data)
	{
		return json_decode($data,true);
	}


	public static function liveSearch(Request $request)
	{

		// $data = \App\Models\ItemInfo::select("title as name")
		// 				->where("title","LIKE","%{$request->input('query')}%")
		// 				->get();
		//
		// return response()->json($data);

			// $words = self::ftextValidate($request->live_search); // validateinput,replace string,execludes words less than 3 chr.
			//
			// $result = DB::Table('item_info')
			// 	->whereRaw("MATCH ({title}) AGAINST (? IN BOOLEAN MODE)", $words )
			// 	$items->selectRaw("item_info.title as value,item_info.alias as item_Alias,
			// 							MATCH ({title}) AGAINST (? IN BOOLEAN MODE) as rel_score", [$words]); // item_info.title as value to can access it via auto complete
			// 							->limit(12)->get();
			//
			// if ($request->ajax()) {
			// 	return response()->json($result); // for live search
			// }

			// return $result;
			//
			//
			// 	$crit = self::formatNormal($request->live_search);
			// 	if (!$crit) {
			// 		return back();
			// 	}
			//
			// 	// return redirect(route('live_search_get',[ 'live_search'=> $crit ]));
			//
			//
			//  if ($request->ajax()) {
			// 	 $resultFor = 2; // retuern for auto compelte
			//  } else {
			// 	 $resultFor = 3; // retuern for auto search page
			//  }
			//
			//  $result = self::liveSearchResult([ 'crit' => $crit , 0 , 'resultFor' => $resultFor ]);
			//
			//
			//
			// return view('front.pages.search_word')
			// 				 ->with('items', $result)
			// 				 ->with('options_out',$options_out)
			// 				 ->with('crit',$crit)
			// 				 ->with('breadcraumb', [] );
			// 				 ;

	}


	public static function ftextValidate($crit)
	{

			$words = self::formatNormal($crit);
			$words = explode(' ', $words);
			foreach($words as $key => $word)
			{
					if(strlen($word) >= 3) // small words arnt indexed by mysql
					{ $words[$key] = '+' . $word . '*'; }
			}
			$words = implode(' ', $words);
			return $words;
	}

	// check is file uploaded there is instance for this
	// function to cast data json from filed in mysql to valid array


}
