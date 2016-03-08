# Laravel PrinceXML Wrapper

Laravel PrinceXML Wrapper is a Laravel 4.2 package that wraps around the http://www.princexml.com/ PDF generator.

## Installation
There's a requirement to have the "prince" executable installed.
```
Install the "prince" executable from http://www.princexml.com/download/.
```
Run the following command to add Kodebyraaet/Prince to download and install.
```
composer require kodebyraaet/prince
```
Add the following .env variable to your .env.*.php.
```
PRINCE_EXECUTABLE_PATH=/path/to/prince
```
Add the following to your app.php file in the service provider and alias sections respectively. The alias/facade is optional.
````
'Kodebyraaet\Prince\PrinceServiceProvider',
'Prince'            => 'Kodebyraaet\Prince\Facades\Prince',
````

# Usage
The Kodebyraaet\Prince\Prince class is bound in the Laravel IoC as a Kodebyraaet\Prince\PrinceInterface, so everywhere the IoC automatically resolves dependencies (ie. in controllers) this is the preferred way to use Prince. Optionally you can also use $app->make(...) or App::make(...); You can also use \Prince or Kodebyraaet\Prince\Facades\Prince directly anywhere.

## Methods
All methods are chainable so you can dynamically add more and more markup as you go to a Prince document. For example:
```
$prince->html('<html><body>')
    ->html('<div><h1>Appending more content.</h1></div>
    ->html('</body></html>');
```

The *html* method takes html as a string and appends it to the internally stored markup.
```
$prince->html('<div>Some HTML</div>');
```

The *view* method takes a Laravel view that has not yet been rendered and renders is and appends it to the internally stored markup.
```
$prince->view(View::make('someview',['somevar' => $somevalue]));
```

The *download* method returns a Response object that can be returned to the client for view in browser/download. For example, in a Controller you can return this for a direct view of a generated PDF.
```
return $prince->html('<html>...</html>')->download();
```

The *store* method required a path and returns the same path if successful.
```
$pdfPath = $prince->html('<html>...</html>')->store(public_path('/pdf/example.pdf'));
```