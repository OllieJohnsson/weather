# Weather

### Copy the configuration files
rsync -av vendor/oliver/weather/config ./

### Copy the src files
rsync -av vendor/oliver/weather/src ./

### Copy the view files
rsync -av vendor/oliver/weather/view ./

### Copy the documentation
rsync -av vendor/oliver/weather/content/000_documentation.md ./content/weather/







#Installera modulen

This is how you install the module into an existing Anax installation.

Installera med composer.

`composer require oliver/weather`


### Copy the configuration files
```
rsync -av vendor/oliver/weather/config ./
```

### Copy the src files
```
rsync -av vendor/oliver/weather/src ./
```

### Copy the view files
```
rsync -av vendor/oliver/weather/view ./
```

### Copy the documentation
```
rsync -av vendor/oliver/weather/content/000_documentation.md ./content/weather/
```


<!-- Copy the needed configuration and setup the weather as a route handler for the route `weather`.

```rsync -av vendor/oliver/weather/config ./```


The remserver is now active on the route remserver/ according to the API documentation. You may try it out on the route remserver/users to get the default dataset users.

Optionally you may copy the API documentation.

rsync -av vendor/anax/remserver/content/index.md content/remserver-api.md
The API documentation is now available through the route remserver-api. -->




Install using scaffold postprocessing file

The module supports a postprocessing installation script, to be used with Anax scaffolding. The script executes the default installation, as outlined above.

```
bash vendor/oliver/weather/.oliver/scaffold/postprocess.d/100_weather.bash
```
The postprocessing script should be run after the composer require is done.
