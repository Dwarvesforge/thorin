# filesystem

- [Thorin::fs_archive_files](#Thorin_fs_archive_files)
- [Thorin::fs_dir_size](#Thorin_fs_dir_size)
- [Thorin::fs_disk_config](#Thorin_fs_disk_config)
- [Thorin::fs_disk_factory](#Thorin_fs_disk_factory)
- [Thorin::fs_disk](#Thorin_fs_disk)
- [Thorin::fs_disks](#Thorin_fs_disks)
- [Thorin::fs_extract_files](#Thorin_fs_extract_files)
- [Thorin::fs_file_ext](#Thorin_fs_file_ext)
- [Thorin::fs_force_download](#Thorin_fs_force_download)
- [Thorin::fs_human_filesize](#Thorin_fs_human_filesize)
<a name="Thorin_fs_archive_files"></a>
## Thorin::fs_archive_files
Create an archive with some files/folders
```php
Thorin::fs_archive_files('my-cool-image.jpg', 'my-archive.zip');
```

[Full documentation](/doc/src/functions/filesystem/fs_archive_files.md)

[See more](https://github.com/wapmorgan/UnifiedArchive)

<a name="Thorin_fs_dir_size"></a>
## Thorin::fs_dir_size
Calculate a directory size
```php
$size = Thorin::fs_dir_size('my_cool_directory');
```

[Full documentation](/doc/src/functions/filesystem/fs_dir_size.md)

<a name="Thorin_fs_disk_config"></a>
## Thorin::fs_disk_config
Return a disk configuration array
```php
$disk = Thorin::fs_disk('base');
```

[Full documentation](/doc/src/functions/filesystem/fs_disk_config.md)

<a name="Thorin_fs_disk_factory"></a>
## Thorin::fs_disk_factory
Create a filesystem instance with the disk requested. Return a [Flysystem](https://flysystem.thephpleague.com/docs/usage/filesystem-api/) instance to work with.
If no disk is passed, the default one in the config filsystem.default_disk will be used.
```php
$ftp = Thorin::fs_disk_factory('ftp');
$contents = $ftp->listContents('/')
```

[Full documentation](/doc/src/functions/filesystem/fs_disk_factory.md)

<a name="Thorin_fs_disk"></a>
## Thorin::fs_disk
Return a filesystem [Flysystem](http://flysystem.thephpleague.com/docs/) instance of the requested disk
```php
$disk = Thorin::fs_disk('local');
$disk->listContents();
```

[Full documentation](/doc/src/functions/filesystem/fs_disk.md)

<a name="Thorin_fs_disks"></a>
## Thorin::fs_disks
Mount some disks inside a manager and return a [League\Flysystem\MountManager](https://flysystem.thephpleague.com/docs/advanced/mount-manager/) instance to work with.
```php
$pool = Thorin::fs_disks('base','assets');
$pool->listContents();
```

[Full documentation](/doc/src/functions/filesystem/fs_disks.md)

<a name="Thorin_fs_extract_files"></a>
## Thorin::fs_extract_files
Extract an archive file in an output folder
```php
Thorin::fs_extract_files('my-archive.zip','my-output-folder');
```

[Full documentation](/doc/src/functions/filesystem/fs_extract_files.md)

[See more](https://github.com/wapmorgan/UnifiedArchive)

<a name="Thorin_fs_file_ext"></a>
## Thorin::fs_file_ext
Return the extension of the file path passed
```php
$ext = Thorin::fs_file_ext('my/cool/file.jpg');
// jpg
```

[Full documentation](/doc/src/functions/filesystem/fs_file_ext.md)

<a name="Thorin_fs_force_download"></a>
## Thorin::fs_force_download
Force download the passed file with the passed name
```php
Thorin::fs_force_download('/path/to/my-file.zip', 'cool-file.zip');
```

[Full documentation](/doc/src/functions/filesystem/fs_force_download.md)

[See more](https://www.jonasjohn.de/snippets/php/file-download.htm)

<a name="Thorin_fs_force_download"></a>
## Thorin::fs_force_download
Force download the passed file with the passed name
```php
Thorin::fs_force_download('/path/to/my-file.zip', 'cool-file.zip');
```

[Full documentation](/doc/src/functions/filesystem/fs_force_download.md)

[See more](https://www.jonasjohn.de/snippets/php/file-download.htm)

<a name="Thorin_fs_human_filesize"></a>
## Thorin::fs_human_filesize
Convert a filesize into a human readable filesize like 10 TO, etc...
```php
print Thorin::fs_human_filesize(14356543);
// 13.69 MB
```

[Full documentation](/doc/src/functions/filesystem/fs_human_filesize.md)
