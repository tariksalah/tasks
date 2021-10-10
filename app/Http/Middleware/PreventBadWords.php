<?php

namespace App\Http\Middleware;
use Closure;
use App\Helpers\UtilHelper;

class PreventBadWords
{

    public function handle($request, Closure $next)
    {

        // $doBadWords = false;
        // if ($request->has('description') || $request->has('comment')) {
        //   $badWords = \App\Models\BadWords::where('language_id' , app()->getLocale())->select('words')->first();
        //   $doBadWords = true;
        // }
        //
        // if ($doBadWords = true) {
        //   if ($request->has('description')) {
        //     $request->merge([ 'description' => str_replace( $badWords->words , [''] , $request->description ) ]); // UtilHelper::formatNormal( error because prevent https:// and / from any url
        //   }
        //   if ($request->has('comment')) {
        //     $request->merge([ 'comment' => str_replace( $badWords->words , [''] , $request->comment ) ]);
        //   }
        // }


        return $next($request);

    }
}
