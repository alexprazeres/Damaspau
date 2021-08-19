<?php

namespace App\Exceptions;

use ErrorException;
use Illuminate\Validation\ValidationException as ValidationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
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
     * @throws \Throwable
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
    public function render($request, Throwable $exception)
    {
        
        if ($exception instanceof ErrorException  && $request->expectsJson()) {
            return response()->json(['message' => 'Erro na requisição. '.$exception->getMessage()], 404);
        }
        if ($exception instanceof NotFoundHttpException  && $request->expectsJson()) {
            return response()->json(['message' => 'Caminho da Requisição não encontrado.'], 404);
        }
        
        if ($exception instanceof ValidationException) {

            return response()->json(['message' => 'Não foi possível completar sua requisição.', 'errors' => $exception->validator->getMessageBag()], 422);
        
        }
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('semacesso'));
    }

    
}
