<?php

return [

    /*
    |--------------------------------------------------------------------------
    | GitHub Personal Access Token
    |--------------------------------------------------------------------------
    |
    | It is recommended that you set a "Personal Access Token" for this package.
    | Without one set, GitHub will limit your API calls to 60 calls per hour.
    | If you do set a token, you can increase this limit to 5000 per min.
    |
    */

    'token' => env('GITHUB_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | GitHub Context
    |--------------------------------------------------------------------------
    |
    | To enable Github Flavored Markdown parsing, which creates links for
    | user mentions as well as references to SHA-1 hashes, issues, and
    | pull requests, set "context" to a repo. Ex: "laravel/laravel"
    |
    */

    'context' => null,

    /*
    |--------------------------------------------------------------------------
    | Allow Dangerous Tags
    |--------------------------------------------------------------------------
    |
    | By default, GitHub escapes any HTML tags it deems "unsafe" while parsing.
    | For example, passing in a string like "<iframe></iframe>" will output
    | "&lt;iframe&gt;&lt;/iframe&gt;". Specify tags you want to preserve.
    |
    */

    'allowedTags' => [],

    /*
    |--------------------------------------------------------------------------
    | Syntax Highlight Theme
    |--------------------------------------------------------------------------
    |
    | Available options are `light` and `dark`.
    |
    */

    'syntaxTheme' => 'light',

];
