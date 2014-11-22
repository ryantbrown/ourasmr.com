<?php namespace Asmr\Http\Controllers;


class PagesController extends Controller {

    public function showHome()
    {
        return view('sections.home.index');
    }

    public function showAbout()
    {
        return view('sections.about.index');
    }

    public function showHelp()
    {
        return view('sections.help.index');
    }

    public function showContact()
    {
        return view('sections.contact.index');
    }

    public function showTerms()
    {
        return view('sections.legal.terms');
    }

    public function showPrivacy()
    {
        return view('sections.legal.privacy');
    }

}