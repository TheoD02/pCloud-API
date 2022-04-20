<?php

namespace PCloud\Enum;

/**
 *  If O_CREAT is set, file_open will create the file. In this case full "path" or "folderid" and "name" MUST be provided for the new file.
 *  If the file already exists the old file will be open unless O_EXCL is set, in which case open will fail.
 *
 *  If O_CREAT is not set, than full "path" or "fileid" MUST be provided. The function will fail if the file does not exist.
 *
 *  O_TRUNC will truncate files when opening existing files.
 *
 *  Files opened with O_APPEND will always write to the end of file (unless you use pwrite).
 *  That is the only reliable method without race conditions for writing in the end of file when there are multiple writers.
 *
 *  You do not need to specify O_WRITE even if you intend to write to the file.
 *  However that will preform write access control and quota checking and you will get possible errors during open, not at the first write.
 */
enum PCloudFileOperation: string
{
    case WRITE = '0x0002';
    case CREATE = '0x0040';
    case EXCL = '0x0080';
    case TRUNCATE = '0x0200';
    case APPEND = '0x0400';
}