# filesystem

- [Thorin::archive_files](#Thorin_archive_files)
- [Thorin::dir_size](#Thorin_dir_size)
- [Thorin::disk_config](#Thorin_disk_config)
- [Thorin::disk_factory](#Thorin_disk_factory)
- [Thorin::disk](#Thorin_disk)
- [Thorin::disks](#Thorin_disks)
- [Thorin::extract_files](#Thorin_extract_files)
- [Thorin::file_ext](#Thorin_file_ext)
- [Thorin::force_download](#Thorin_force_download)
- [Thorin::hash_directory](#Thorin_hash_directory)
- [Thorin::human_filesize](#Thorin_human_filesize)
<a name="Thorin_archive_files"></a>
## Thorin::archive_files
Create an archive with some files/folders
```php
Thorin::archive_files('my-cool-image.jpg', 'my-archive.zip');
```

[Full documentation](/doc/src/functions/filesystem/archive_files.md)

[See more](https://github.com/wapmorgan/UnifiedArchive)

<a name="Thorin_dir_size"></a>
## Thorin::dir_size
Calculate a directory size
```php
$size = Thorin::dir_size('my_cool_directory');
```

[Full documentation](/doc/src/functions/filesystem/dir_size.md)

<a name="Thorin_disk_config"></a>
## Thorin::disk_config
Return a disk configuration array
```php
$config = Thorin::disk_config('base');
```

[Full documentation](/doc/src/functions/filesystem/disk_config.md)

<a name="Thorin_disk_factory"></a>
## Thorin::disk_factory
Create a filesystem instance with the disk requested. Return a [Flysystem](https://flysystem.thephpleague.com/docs/usage/filesystem-api/) instance to work with.
If no disk is passed, the default one in the config filsystem.default_disk will be used.
```php
$ftp = Thorin::fs_disk_factory('ftp');
$contents = $ftp->listContents('/')
```

[Full documentation](/doc/src/functions/filesystem/disk_factory.md)

<a name="Thorin_disk"></a>
## Thorin::disk
Return a filesystem [Flysystem](http://flysystem.thephpleague.com/docs/) instance of the requested disk
```php
$disk = Thorin::disk('local');
$disk->listContents();
```

[Full documentation](/doc/src/functions/filesystem/disk.md)

<a name="Thorin_disks"></a>
## Thorin::disks
Mount some disks inside a manager and return a [League\Flysystem\MountManager](https://flysystem.thephpleague.com/docs/advanced/mount-manager/) instance to work with.
```php
$pool = Thorin::disks('base','assets');
$pool->listContents();
```

[Full documentation](/doc/src/functions/filesystem/disks.md)

<a name="Thorin_extract_files"></a>
## Thorin::extract_files
Extract an archive file in an output folder
```php
Thorin::extract_files('my-archive.zip','my-output-folder');
```

[Full documentation](/doc/src/functions/filesystem/extract_files.md)

[See more](https://github.com/wapmorgan/UnifiedArchive)

<a name="Thorin_file_ext"></a>
## Thorin::file_ext
Return the extension of the file path passed
```php
$ext = Thorin::file_ext('my/cool/file.jpg');
// jpg
```

[Full documentation](/doc/src/functions/filesystem/file_ext.md)

<a name="Thorin_force_download"></a>
## Thorin::force_download
Force download the passed file with the passed name
```php
Thorin::force_download('/path/to/my-file.zip', 'cool-file.zip');
```

[Full documentation](/doc/src/functions/filesystem/force_download.md)

[See more](https://www.jonasjohn.de/snippets/php/file-download.htm)

<a name="Thorin_force_download"></a>
## Thorin::force_download
Force download the passed file with the passed name
```php
Thorin::force_download('/path/to/my-file.zip', 'cool-file.zip');
```

[Full documentation](/doc/src/functions/filesystem/force_download.md)

[See more](https://www.jonasjohn.de/snippets/php/file-download.htm)

<a name="Thorin_hash_directory"></a>
## Thorin::hash_directory
Return a md5 hash of the passed directory
```php
$ext = Thorin::hash_directory('my/cool/directory');
// A92B0AB54ACC099B298B9DA94AFB4461
```

[Full documentation](/doc/src/functions/filesystem/hash_directory.md)

<a name="Thorin_human_filesize"></a>
## Thorin::human_filesize
Convert a filesize into a human readable filesize like 10 TO, etc...
```php
print Thorin::human_filesize(14356543);
// 13.69 MB
```

[Full documentation](/doc/src/functions/filesystem/human_filesize.md)
