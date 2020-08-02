<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    // public function render($request, Throwable $exception)
    // {
        
    //     return parent::render($request, $exception);
    // }

    public function render($request, Throwable $e)
    {   
        if($this->isHttpException($e))
        {
            switch (intval($e->getStatusCode())) {
                // not found
                case 404:
                    return redirect()->route('index_page');
                    break;
                // internal error
                case 500:
                    //return \Response::view('custom.500',array(),500);
                    return redirect()->route('index_page');
                    break;

                default:
                    return $this->renderHttpException($e);
                    break;
            }
        }
        else
        {
            return parent::render($request, $e);
        }
    }

}
