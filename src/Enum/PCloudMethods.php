<?php

namespace App\Enum;

enum PCloudMethods: string
{
    case USER_INFO = 'userinfo';
    // FOLDER
    case CREATE_FOLDER = 'createfolder';
    case CREATE_FOLDER_IF_NOT_EXIST = 'createfolderifnotexists';
    case LIST_FOLDER = 'listfolder';
    //case RENAME_FOLDER = 'renamefolder';
    case DELETE_FOLDER = 'deletefolder';
    case DELETE_FOLDER_RECURSIVE = 'deletefolderrecursive';
    //case COPY_FOLDER = 'copyfolder';

    // FILE
    case UPLOAD_FILE = 'uploadfile';
    case UPLOAD_PROGRESS = 'uploadprogress';
    case DOWNLOAD_FILE = 'downloadfile';
    case DOWNLOAD_FILE_ASYNC = 'downloadasyncfile';
    case COPY_FILE = 'copyfile';
    case CHECKSUM_FILE = 'checksumfile';
    case DELETE_FILE = 'deletefile';
    case RENAME_FILE = 'renamefile';
    case STAT = 'stat';
}