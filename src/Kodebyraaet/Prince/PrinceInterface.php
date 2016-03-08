<?php namespace Kodebyraaet\Prince;

use Illuminate\View\View;
use Illuminate\Http\Response;

interface PrinceInterface
{

    /**
     * Takes a View and returns $this to further chain methods on.
     *
     * @param View $view
     * @return $this
     */
    public function view(View $view);

    /**
     * Takes a HTML string and returns $this to further chain methods on.
     *
     * @param $html
     * @return $this
     */
    public function html($html);

    /**
     * Returns the generated PDF as as a Response.
     *
     * @param string|null $filename
     * @param bool $attachment
     * @return Response
     */
    public function download($filename = null, $attachment = false);

    /**
     * Stores the generated PDF in at a provided path.
     *
     * @param $path
     * @return mixed
     */
    public function store($path);

}