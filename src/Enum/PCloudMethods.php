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
    /*case DOWNLOAD_FILE = 'downloadfile';
    case DOWNLOAD_FILE_ASYNC = 'downloadasyncfile';
    case COPY_FILE = 'copyfile';
    case CHECKSUM_FILE = 'checksumfile';*/
    case DELETE_FILE = 'deletefile';
    case RENAME_FILE = 'renamefile';
    case STAT = 'stat';

    // STREAMING
    case GET_FILE_LINK = 'getfilelink';
    case GET_VIDEO_LINK = 'getvideolink';
    case GET_AUDIO_LINK = 'getaudiolink';
   /* case GET_HLS_LINK = 'gethlslink';*/
    case GET_TEXT_LINK = 'gettextlink';

    // ARCHIVING
    case GET_ZIP = 'getzip';
    case GET_ZIP_LINK = 'getziplink';
    /*case SAVE_ZIP = 'savezip';
    case EXTRACT_ARCHIVE = 'extractarchive';
    case EXTRACT_ARCHIVE_PROGRESS = 'extractarchiverogress';
    case SAVE_ZIP_PROGRESS = 'saveziprogress';*/
}