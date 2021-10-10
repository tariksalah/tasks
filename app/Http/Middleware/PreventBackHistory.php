<?php
namespace App\Http\Middleware;

use Closure;

class PreventBackHistory
{
	public function handle($request, Closure $next)
	{
		$response = $next($request);

		$headers = [
			'Cache-Control' => 'nocache, no-store, max-age=0, must-revalidate',
			'Pragma'        => 'no-cache',
			'Expires'       => 'Sun, 02 Jan 1990 00:00:00 GMT',
		];

		foreach ($headers as $key => $value) {
			$response->headers->set($key, $value);
		}

		return $response;
	}
}
