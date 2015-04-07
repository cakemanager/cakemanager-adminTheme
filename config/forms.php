<?php
$config = [
	'input' => '<input class="form-control" type="{{type}}" name="{{name}}" {{attrs}}>',
	'inputContainer'      => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
	'inputContainerError' => '<div class="form-group {{type}}{{required}} has-error">{{content}}{{error}}</div>',
	'error'               => '<div class="error-message text-danger">{{content}}</div>',
	'select' => '<select class="form-control" name="{{name}}" {attrs}}>{{content}}</select>',
];
