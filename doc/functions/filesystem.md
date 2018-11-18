# filesystem

- [Thorin::dir_size](#Thorin::dir_size)
- [Thorin::disk_config](#Thorin::disk_config)
- [Thorin::disk](#Thorin::disk)
- [Thorin::disks](#Thorin::disks)
- [Thorin::file_ext](#Thorin::file_ext)
- [Thorin::filesystem_factory](#Thorin::filesystem_factory)
- [Thorin::force_download](#Thorin::force_download)
- [Thorin::human_filesize](#Thorin::human_filesize)
<a name="Thorin::dir_size"></a>
## Thorin::dir_size
Calculate a directory size
```php
$size = Thorin::get_dir_size('my_cool_directory');
```

[Full documentation](/doc/src/functions/filesystem/t_dir_size.md)

<a name="Thorin::disk_config"></a>
## Thorin::disk_config
Return a disk configuration array
```php
$disk = Thorin::disk('base');
```

[Full documentation](/doc/src/functions/filesystem/t_disk_config.md)

<a name="Thorin::disk"></a>
## Thorin::disk
Return a filesystem [Flysystem](http://flysystem.thephpleague.com/docs/) instance of the requested disk
```php
$disk = Thorin::disk('local');
$disk->listContents();
```

[Full documentation](/doc/src/functions/filesystem/t_disk.md)

<a name="Thorin::disks"></a>
## Thorin::disks
Mount some disks inside a manager and return a [League\Flysystem\MountManager](https://flysystem.thephpleague.com/docs/advanced/mount-manager/) instance to work with.
```php
$pool = Thorin::disks('base','assets');
$pool->listContents();
```

[Full documentation](/doc/src/functions/filesystem/t_disks.md)

<a name="Thorin::file_ext"></a>
## Thorin::file_ext
Return the extension of the file path passed
```php
$ext = Thorin::ext('my/cool/file.jpg');
// jpg
```

[Full documentation](/doc/src/functions/filesystem/t_file_ext.md)

<a name="Thorin::filesystem_factory"></a>
## Thorin::filesystem_factory
Create a filesystem instance with the disk requested. Return a [Flysystem](https://flysystem.thephpleague.com/docs/usage/filesystem-api/) instance to work with.
If no disk is passed, the default one in the config filsystem.default_disk will be used.
```php
$ftp = Thorin::filesystem_factory('ftp');
$contents = $ftp->listContents('/')
```

[Full documentation](/doc/src/functions/filesystem/t_filesystem_factory.md)

<a name="Thorin::force_download"></a>
## Thorin::force_download
Force download the passed file with the passed name
```php
Thorin::force_download('/path/to/my-file.zip', 'cool-file.zip');
```

[Full documentation](/doc/src/functions/filesystem/t_force_download.md)

[See more](https://www.jonasjohn.de/snippets/php/file-download.htm)

<a name="Thorin::force_download"></a>
## Thorin::force_download
Force download the passed file with the passed name
```php
Thorin::force_download('/path/to/my-file.zip', 'cool-file.zip');
```

[Full documentation](/doc/src/functions/filesystem/t_force_download.md)

[See more](https://www.jonasjohn.de/snippets/php/file-download.htm)

<a name="Thorin::human_filesize"></a>
## Thorin::human_filesize
Convert a filesize into a human readable filesize like 10 TO, etc...
```php
print Thorin::human_filesize(14356543);
// 13.69 MB
```

[Full documentation](/doc/src/functions/filesystem/t_human_filesize.md)
