<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    {{ Vite::useHotFile('jurreoutlawz/test/test.hot')
    ->useBuildDirectory("jurreoutlawz/test")
            ->withEntryPoints([ 'resources/js/app.js']) }}
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>