# README

```php
$pCloud = new PCloudService('email', 'password');
```

## Upload on or multiple files
***
```php
# Version 1
$upload = new UploadFileWithFolderIdInput(
    [
        new PCloudFile('/my/folder/location/file.txt')
    ]
);
# Version 2 can used in foreach for example
$upload = new UploadFileWithFolderIdInput(folderId: 123456);
# OR
$upload = new UploadFileWithPathInput(path: '/an/directory/in/cloud');
$upload->addFile( new PCloudFile('/my/folder/location/file.txt'));
$res = $p->uploadFile($upload);
```

## Delete file
***
```php
$p->deleteFile(new DeleteFileWithFileIdInput(123465));
```

## List files
***
```php
$p->listFolder(new ListFolderWithIdInput(123456));
```

### Most functionality accept both path or folder/file ID
You can use solution you prefer, pCloud recommend use of folder/file ID instead of path.
The case of upload is the same for another methods, you just need replace Id/FolderId or FileId by path

***
For moment is just a first "working" release. not really tested, not implemented on any project for moment.
Is not completed yet, you can only list some folder, upload, delete.
Documentation is less, but will make better after :)
Please use only for personal development for moment.
Accept any help ! :)