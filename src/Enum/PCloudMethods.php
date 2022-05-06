<?php

namespace PCloud\Enum;

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
    //case SAVE_ZIP = 'savezip';
    case EXTRACT_ARCHIVE = 'extractarchive';
    case EXTRACT_ARCHIVE_PROGRESS = 'extractarchiverogress';
    //case SAVE_ZIP_PROGRESS = 'saveziprogress';

    // FILE OPS
    case FILE_OPEN = 'file_open';
    case FILE_WRITE = 'file_WRITE';
    case FILE_PWRITE = 'file_pwrite';
    case FILE_READ = 'file_read';
    case FILE_PREAD = 'file_pread';
    case FILE_PREAD_IFMOD = 'file_pread_ifmod';
    case FILE_CHECKSUM = 'file_checksum';
    case FILE_SIZE = 'file_size';
    case FILE_TRUNCATE = 'file_truncate';
    case FILE_SEEK = 'file_seek';
    case FILE_CLOSE = 'file_close';
    case FILE_LOCK = 'file_lock';
}
