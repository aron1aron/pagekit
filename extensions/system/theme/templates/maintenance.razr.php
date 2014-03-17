<!DOCTYPE html>
<html class="uk-height-1-1">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @action('head')
        @script('uikit')
        @style('theme', 'extension://system/theme/css/theme.css')
    </head>
    <body class="uk-height-1-1">

        <div class="tm-height-4-5 uk-vertical-align uk-text-center">
            <div class="uk-vertical-align-middle">

                <div class="tm-container">

                    <img class="uk-margin-bottom" src="@url.to('extension://system/assets/images/pagekit-logo-large.svg')" width="120" height="120" alt="Pagekit">

                    <div class="uk-panel uk-panel-box">
                        <h1>@trans('Maintenance')</h1>
                        <p>@message</p>
                    </div>

                </div>

            </div>
        </div>

    </body>
</html>