<?php
class EventController extends Controller { public function index() { return view('events.index',['events'=>Event::all()]); } }