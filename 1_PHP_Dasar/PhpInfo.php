<?php
phpinfo();
/*

USER@DESKTOP-CFE253U MINGW64 ~/Music/PHP
$ php php_dasar/PhpInfo.php 
phpinfo()
PHP Version => 8.0.8

System => Windows NT DESKTOP-CFE253U 10.0 build 19044 (Windows 10) AMD64
Build Date => Jun 29 2021 15:59:22
Build System => Microsoft Windows Server 2019 Datacenter [10.0.17763]
Compiler => Visual C++ 2019
Architecture => x64
Configure Command => cscript /nologo /e:jscript configure.js  "--enable-snapshot-build" "--enable-debug-pack" "--with-pdo-oci=..\..\..\..\instantclient\sdk,shared" "--with-oci8-19=..\..\..\..\instantclient\sdk,shared" "--enable-object-out-dir=../obj/" "--enable-com-dotnet=shared" "--without-analyzer" "--with-pgo"
Server API => Command Line Interface
Virtual Directory Support => enabled
Configuration File (php.ini) Path =>
Loaded Configuration File => C:\xampp\php\php.ini
Scan this dir for additional .ini files => (none)
Additional .ini files parsed => (none)
PHP API => 20200930
PHP Extension => 20200930
Zend Extension => 420200930
Zend Extension Build => API420200930,TS,VS16
PHP Extension Build => API20200930,TS,VS16
Debug Build => no
Thread Safety => enabled
Thread API => Windows Threads
Zend Signal Handling => disabled
Zend Memory Manager => enabled
Zend Multibyte Support => provided by mbstring
IPv6 Support => enabled
DTrace Support => disabled

Registered PHP Streams => php, file, glob, data, http, ftp, zip, compress.zlib, compress.bzip2, https, ftps, phar
Registered Stream Socket Transports => tcp, udp, ssl, tls, tlsv1.0, tlsv1.1, tlsv1.2, tlsv1.3
Registered Stream Filters => convert.iconv.*, string.rot13, string.toupper, string.tolower, convert.*, consumed, dechunk, zlib.*, bzip2.*

This program makes use of the Zend Scripting Language Engine:
Zend Engine v4.0.8, Copyright (c) Zend Technologies


 _______________________________________________________________________


Configuration

bcmath

BCMath support => enabled

Directive => Local Value => Master Value
bcmath.scale => 0 => 0

bz2

BZip2 Support => Enabled
Stream Wrapper support => compress.bzip2://
Stream Filter support => bzip2.decompress, bzip2.compress
BZip2 Version => 1.0.8, 13-Jul-2019

calendar

Calendar support => enabled

Core

PHP Version => 8.0.8

Directive => Local Value => Master Value
allow_url_fopen => On => On
allow_url_include => Off => Off
arg_separator.input => & => &
arg_separator.output => & => &
auto_append_file => no value => no value
auto_globals_jit => On => On
auto_prepend_file => no value => no value
browscap => C:\xampp\php\extras\browscap.ini => C:\xampp\php\extras\browscap.ini
default_charset => UTF-8 => UTF-8
default_mimetype => text/html => text/html
disable_classes => no value => no value
disable_functions => no value => no value
display_errors => STDOUT => STDOUT
display_startup_errors => On => On
doc_root => no value => no value
docref_ext => no value => no value
docref_root => no value => no value
enable_dl => Off => Off
enable_post_data_reading => On => On
error_append_string => no value => no value
error_log => C:\xampp\php\logs\php_error_log => C:\xampp\php\logs\php_error_log
error_prepend_string => no value => no value
error_reporting => 22527 => 22527
expose_php => On => On
extension_dir => C:\xampp\php\ext => C:\xampp\php\ext
file_uploads => On => On
hard_timeout => 2 => 2
highlight.comment => <font style="color: #FF8000">#FF8000</font> => <font style="color: #FF8000">#FF8000</font>
highlight.default => <font style="color: #0000BB">#0000BB</font> => <font style="color: #0000BB">#0000BB</font>
highlight.html => <font style="color: #000000">#000000</font> => <font style="color: #000000">#000000</font>
highlight.keyword => <font style="color: #007700">#007700</font> => <font style="color: #007700">#007700</font>
highlight.string => <font style="color: #DD0000">#DD0000</font> => <font style="color: #DD0000">#DD0000</font>
html_errors => Off => Off
ignore_repeated_errors => Off => Off
ignore_repeated_source => Off => Off
ignore_user_abort => Off => Off
implicit_flush => On => On
include_path => C:\xampp\php\PEAR => C:\xampp\php\PEAR
input_encoding => no value => no value
internal_encoding => no value => no value
log_errors => On => On
log_errors_max_len => 1024 => 1024
mail.add_x_header => Off => Off
mail.force_extra_parameters => no value => no value
mail.log => no value => no value
max_execution_time => 0 => 0
max_file_uploads => 20 => 20
max_input_nesting_level => 64 => 64
max_input_time => -1 => -1
max_input_vars => 1000 => 1000
memory_limit => 512M => 512M
open_basedir => no value => no value
output_buffering => 0 => 0
output_encoding => no value => no value
output_handler => no value => no value
post_max_size => 40M => 40M
precision => 14 => 14
realpath_cache_size => 4096K => 4096K
realpath_cache_ttl => 120 => 120
register_argc_argv => On => On
report_memleaks => On => On
report_zend_debug => Off => Off
request_order => GP => GP
sendmail_from => no value => no value
sendmail_path => no value => no value
serialize_precision => -1 => -1
short_open_tag => Off => Off
SMTP => localhost => localhost
smtp_port => 25 => 25
sys_temp_dir => no value => no value
syslog.facility => LOG_USER => LOG_USER
syslog.filter => no-ctrl => no-ctrl
syslog.ident => php => php
unserialize_callback_func => no value => no value
upload_max_filesize => 40M => 40M
upload_tmp_dir => C:\xampp\tmp => C:\xampp\tmp
user_dir => no value => no value
user_ini.cache_ttl => 300 => 300
user_ini.filename => .user.ini => .user.ini
variables_order => GPCS => GPCS
windows.show_crt_warning => Off => Off
xmlrpc_error_number => 0 => 0
xmlrpc_errors => Off => Off
zend.assertions => 1 => 1
zend.detect_unicode => On => On
zend.enable_gc => On => On
zend.exception_ignore_args => Off => Off
zend.exception_string_param_max_len => 15 => 15
zend.multibyte => Off => Off
zend.script_encoding => no value => no value

ctype

ctype functions => enabled

curl

cURL support => enabled
cURL Information => 7.76.1
Age => 8
Features
AsynchDNS => Yes
CharConv => No
Debug => No
GSS-Negotiate => No
IDN => Yes
IPv6 => Yes
krb4 => No
Largefile => Yes
libz => Yes
NTLM => Yes
NTLMWB => No
SPNEGO => Yes
SSL => Yes
SSPI => Yes
TLS-SRP => No
HTTP2 => Yes
GSSAPI => No
KERBEROS5 => Yes
UNIX_SOCKETS => Yes
PSL => No
HTTPS_PROXY => Yes
MULTI_SSL => No
BROTLI => No
Protocols => dict, file, ftp, ftps, gopher, gophers, http, https, imap, imaps, ldap, ldaps, mqtt, pop3, pop3s, rtsp, scp, sftp, smb, smbs, smtp, smtps, telnet, tftp
Host => x86_64-pc-win32
SSL Version => OpenSSL/1.1.1k
ZLib Version => 1.2.11
libSSH Version => libssh2/1.9.0

Directive => Local Value => Master Value
curl.cainfo => C:\xampp\apache\bin\curl-ca-bundle.crt => C:\xampp\apache\bin\curl-ca-bundle.crt

date

date/time support => enabled
timelib version => 2020.02
"Olson" Timezone Database Version => 2021.1
Timezone Database => internal
Default timezone => Europe/Berlin

Directive => Local Value => Master Value
date.default_latitude => 31.7667 => 31.7667
date.default_longitude => 35.2333 => 35.2333
date.sunrise_zenith => 90.833333 => 90.833333
date.sunset_zenith => 90.833333 => 90.833333
date.timezone => Europe/Berlin => Europe/Berlin

dom

DOM/XML => enabled
DOM/XML API Version => 20031129
libxml Version => 2.9.10
HTML Support => enabled
XPath Support => enabled
XPointer Support => enabled
Schema Support => enabled
RelaxNG Support => enabled

exif

EXIF Support => enabled
Supported EXIF Version => 0220
Supported filetypes => JPEG, TIFF
Multibyte decoding support using mbstring => enabled
Extended EXIF tag formats => Canon, Casio, Fujifilm, Nikon, Olympus, Samsung, Panasonic, DJI, Sony, Pentax, Minolta, Sigma, Foveon, Kyocera, Ricoh, AGFA, Epson

Directive => Local Value => Master Value
exif.decode_jis_intel => JIS => JIS
exif.decode_jis_motorola => JIS => JIS
exif.decode_unicode_intel => UCS-2LE => UCS-2LE
exif.decode_unicode_motorola => UCS-2BE => UCS-2BE
exif.encode_jis => no value => no value
exif.encode_unicode => ISO-8859-15 => ISO-8859-15

fileinfo

fileinfo support => enabled
libmagic => 539

filter

Input Validation and Filtering => enabled

Directive => Local Value => Master Value
filter.default => unsafe_raw => unsafe_raw
filter.default_flags => no value => no value

ftp

FTP support => enabled
FTPS support => enabled

gettext

GetText Support => enabled

hash

hash support => enabled
Hashing Engines => md2 md4 md5 sha1 sha224 sha256 sha384 sha512/224 sha512/256 sha512 sha3-224 sha3-256 sha3-384 sha3-512 ripemd128 ripemd160 ripemd256 ripemd320 whirlpool tiger128,3 tiger160,3 tiger192,3 tiger128,4 tiger160,4 tiger192,4 snefru snefru256 gost gost-crypto adler32 crc32 crc32b crc32c fnv132 fnv1a32 fnv164 fnv1a64 joaat haval128,3 haval160,3 haval192,3 haval224,3 haval256,3 haval128,4 haval160,4 haval192,4 haval224,4 haval256,4 haval128,5 haval160,5 haval192,5 haval224,5 haval256,5

MHASH support => Enabled
MHASH API Version => Emulated Support

iconv

iconv support => enabled
iconv implementation => "libiconv"
iconv library version => 1.16

Directive => Local Value => Master Value
iconv.input_encoding => no value => no value
iconv.internal_encoding => no value => no value
iconv.output_encoding => no value => no value

json

json support => enabled

libxml

libXML support => active
libXML Compiled Version => 2.9.10
libXML Loaded Version => 20910
libXML streams => enabled

mbstring

Multibyte Support => enabled
Multibyte string engine => libmbfl
HTTP input encoding translation => disabled
libmbfl version => 1.3.2

mbstring extension makes use of "streamable kanji code filter and converter", which is distributed under the GNU Lesser General Public License version 2.1.

Multibyte (japanese) regex support => enabled
Multibyte regex (oniguruma) version => 6.9.7

Directive => Local Value => Master Value
mbstring.detect_order => no value => no value
mbstring.encoding_translation => Off => Off
mbstring.http_input => no value => no value
mbstring.http_output => no value => no value
mbstring.http_output_conv_mimetypes => ^(text/|application/xhtml\+xml) => ^(text/|application/xhtml\+xml)
mbstring.internal_encoding => no value => no value
mbstring.language => neutral => neutral
mbstring.regex_retry_limit => 1000000 => 1000000
mbstring.regex_stack_limit => 100000 => 100000
mbstring.strict_detection => Off => Off
mbstring.substitute_character => no value => no value

mysqli

MysqlI Support => enabled
Client API library version => mysqlnd 8.0.8
Active Persistent Links => 0
Inactive Persistent Links => 0
Active Links => 0

Directive => Local Value => Master Value
mysqli.allow_local_infile => Off => Off
mysqli.allow_persistent => On => On
mysqli.default_host => no value => no value
mysqli.default_port => 3306 => 3306
mysqli.default_pw => no value => no value
mysqli.default_socket => no value => no value
mysqli.default_user => no value => no value
mysqli.max_links => Unlimited => Unlimited
mysqli.max_persistent => Unlimited => Unlimited
mysqli.reconnect => Off => Off
mysqli.rollback_on_cached_plink => Off => Off

mysqlnd

mysqlnd => enabled
Version => mysqlnd 8.0.8
Compression => supported
core SSL => supported
extended SSL => supported
Command buffer size => 4096
Read buffer size => 32768
Read timeout => 86400
Collecting statistics => Yes
Collecting memory statistics => Yes
Tracing => n/a
Loaded plugins => mysqlnd,debug_trace,auth_plugin_mysql_native_password,auth_plugin_mysql_clear_password,auth_plugin_caching_sha2_password,auth_plugin_sha256_password
API Extensions => mysqli,pdo_mysql

openssl

OpenSSL support => enabled
OpenSSL Library Version => OpenSSL 1.1.1k  25 Mar 2021
OpenSSL Header Version => OpenSSL 1.1.1k  25 Mar 2021
Openssl default config => C:\Program Files\Common Files\SSL/openssl.cnf

Directive => Local Value => Master Value
openssl.cafile => C:\xampp\apache\bin\curl-ca-bundle.crt => C:\xampp\apache\bin\curl-ca-bundle.crt
openssl.capath => no value => no value

pcre

PCRE (Perl Compatible Regular Expressions) Support => enabled
PCRE Library Version => 10.35 2020-05-09
PCRE Unicode Version => 13.0.0
PCRE JIT Support => enabled
PCRE JIT Target => x86 64bit (little endian + unaligned)

Directive => Local Value => Master Value
pcre.backtrack_limit => 1000000 => 1000000
pcre.jit => 1 => 1
pcre.recursion_limit => 100000 => 100000

PDO

PDO support => enabled
PDO drivers => mysql, sqlite

pdo_mysql

PDO Driver for MySQL => enabled
Client API version => mysqlnd 8.0.8

pdo_sqlite

PDO Driver for SQLite 3.x => enabled
SQLite Library => 3.33.0

Phar

Phar: PHP Archive support => enabled
Phar API version => 1.1.1
Phar-based phar archives => enabled
Tar-based phar archives => enabled
ZIP-based phar archives => enabled
gzip compression => enabled
bzip2 compression => enabled
OpenSSL support => enabled


Phar based on pear/PHP_Archive, original concept by Davey Shafik.
Phar fully realized by Gregory Beaver and Marcus Boerger.
Portions of tar implementation Copyright (c) 2003-2009 Tim Kientzle.
Directive => Local Value => Master Value
phar.cache_list => no value => no value
phar.readonly => On => On
phar.require_hash => On => On

readline

Readline Support => enabled
Readline library => WinEditLine

Directive => Local Value => Master Value
cli.pager => no value => no value
cli.prompt => \b \>  => \b \>

Reflection

Reflection => enabled

session

Session Support => enabled
Registered save handlers => files user
Registered serializer handlers => php_serialize php php_binary

Directive => Local Value => Master Value
session.auto_start => Off => Off
session.cache_expire => 180 => 180
session.cache_limiter => nocache => nocache
session.cookie_domain => no value => no value
session.cookie_httponly => no value => no value
session.cookie_lifetime => 0 => 0
session.cookie_path => / => /
session.cookie_samesite => no value => no value
session.cookie_secure => 0 => 0
session.gc_divisor => 1000 => 1000
session.gc_maxlifetime => 1440 => 1440
session.gc_probability => 1 => 1
session.lazy_write => On => On
session.name => PHPSESSID => PHPSESSID
session.referer_check => no value => no value
session.save_handler => files => files
session.save_path => C:\xampp\tmp => C:\xampp\tmp
session.serialize_handler => php => php
session.sid_bits_per_character => 5 => 5
session.sid_length => 26 => 26
session.upload_progress.cleanup => On => On
session.upload_progress.enabled => On => On
session.upload_progress.freq => 1% => 1%
session.upload_progress.min_freq => 1 => 1
session.upload_progress.name => PHP_SESSION_UPLOAD_PROGRESS => PHP_SESSION_UPLOAD_PROGRESS
session.upload_progress.prefix => upload_progress_ => upload_progress_
session.use_cookies => 1 => 1
session.use_only_cookies => 1 => 1
session.use_strict_mode => 0 => 0
session.use_trans_sid => 0 => 0

SimpleXML

SimpleXML support => enabled
Schema support => enabled

SPL

SPL support => enabled
Interfaces => OuterIterator, RecursiveIterator, SeekableIterator, SplObserver, SplSubject
Classes => AppendIterator, ArrayIterator, ArrayObject, BadFunctionCallException, BadMethodCallException, CachingIterator, CallbackFilterIterator, DirectoryIterator, DomainException, EmptyIterator, FilesystemIterator, FilterIterator, GlobIterator, InfiniteIterator, InvalidArgumentException, IteratorIterator, LengthException, LimitIterator, LogicException, MultipleIterator, 
NoRewindIterator, OutOfBoundsException, OutOfRangeException, OverflowException, ParentIterator, RangeException, RecursiveArrayIterator, RecursiveCachingIterator, RecursiveCallbackFilterIterator, RecursiveDirectoryIterator, RecursiveFilterIterator, RecursiveIteratorIterator, RecursiveRegexIterator, RecursiveTreeIterator, RegexIterator, RuntimeException, SplDoublyLinkedList, SplFileInfo, SplFileObject, SplFixedArray, SplHeap, SplMinHeap, SplMaxHeap, SplObjectStorage, SplPriorityQueue, SplQueue, SplStack, SplTempFileObject, UnderflowException, UnexpectedValueException

standard

Dynamic Library Support => enabled
Internal Sendmail Support for Windows => enabled

Directive => Local Value => Master Value
assert.active => On => On
assert.bail => Off => Off
assert.callback => no value => no value
assert.exception => On => On
assert.warning => On => On
auto_detect_line_endings => Off => Off
default_socket_timeout => 60 => 60
from => no value => no value
session.trans_sid_hosts => no value => no value
session.trans_sid_tags => a=href,area=href,frame=src,form= => a=href,area=href,frame=src,form=
unserialize_max_depth => 4096 => 4096
url_rewriter.hosts => no value => no value
url_rewriter.tags => form= => form=
user_agent => no value => no value

tokenizer

Tokenizer Support => enabled

xml

XML Support => active
XML Namespace Support => active
libxml2 Version => 2.9.10

xmlreader

XMLReader => enabled

xmlwriter

XMLWriter => enabled

zip

Zip => enabled
Zip version => 1.19.3
Libzip version => 1.7.1
BZIP2 compression => Yes
XZ compression => Yes
ZSTD compression => No
AES-128 encryption => Yes
AES-192 encryption => Yes
AES-256 encryption => Yes

zlib

ZLib Support => enabled
Stream Wrapper => compress.zlib://
Stream Filter => zlib.inflate, zlib.deflate
Compiled Version => 1.2.11
Linked Version => 1.2.11

Directive => Local Value => Master Value
zlib.output_compression => Off => Off
zlib.output_compression_level => -1 => -1
zlib.output_handler => no value => no value

Additional Modules

Module Name

Environment

Variable => Value
ACLOCAL_PATH => /mingw64/share/aclocal:/usr/share/aclocal
ALLUSERSPROFILE => C:\ProgramData
APPDATA => C:\Users\USER\AppData\Roaming
ChocolateyInstall => C:\ProgramData\chocolatey
ChocolateyLastPathUpdate => 133120834040953282
CHROME_CRASHPAD_PIPE_NAME => \\.\pipe\crashpad_8520_ECQKBFCLHQBRFTIB
COLORTERM => truecolor
COMMONPROGRAMFILES => C:\Program Files\Common Files
CommonProgramFiles(x86) => C:\Program Files (x86)\Common Files
CommonProgramW6432 => C:\Program Files\Common Files
COMPUTERNAME => DESKTOP-CFE253U
COMSPEC => C:\WINDOWS\system32\cmd.exe
CONFIG_SITE => /etc/config.site
DISPLAY => needs-to-be-defined
DriverData => C:\Windows\System32\Drivers\DriverData
EXEPATH => C:\Program Files\Git\bin
FPS_BROWSER_APP_PROFILE_STRING => Internet Explorer
FPS_BROWSER_USER_PROFILE_STRING => Default
GIT_ASKPASS => c:\Users\USER\AppData\Local\Programs\Microsoft VS Code\resources\app\extensions\git\dist\askpass.sh
HOME => C:\Users\USER
HOMEDRIVE => C:
HOMEPATH => \Users\USER
HOSTNAME => DESKTOP-CFE253U
INFOPATH => /usr/local/info:/usr/share/info:/usr/info:/share/info
JAVA_HOME => C:\Program Files\Java\jdk-18.0.2
LANG => en_US.UTF-8
LOCALAPPDATA => C:\Users\USER\AppData\Local
LOGONSERVER => \\DESKTOP-CFE253U
MANPATH => /mingw64/local/man:/mingw64/share/man:/usr/local/man:/usr/share/man:/usr/man:/share/man
MINGW_CHOST => x86_64-w64-mingw32
MINGW_PACKAGE_PREFIX => mingw-w64-x86_64
MINGW_PREFIX => /mingw64
MSYSTEM => MINGW64
MSYSTEM_CARCH => x86_64
MSYSTEM_CHOST => x86_64-w64-mingw32
MSYSTEM_PREFIX => /mingw64
NUMBER_OF_PROCESSORS => 4
OneDrive => C:\Users\USER\OneDrive
ORIGINAL_PATH => C:\Program Files\Git\mingw64\bin;C:\Program Files\Git\usr\bin;C:\Users\USER\bin;C:\Program Files\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0;C:\WINDOWS\System32\OpenSSH;D:\Program Files (x86)\MySQL\MySQL Server 5.0\bin;C:\xampp\php;C:\ProgramData\ComposerSetup\bin;C:\Program Files\Java\jdk-18.0.2\bin;C:\Program Files\Git\cmd;C:\Program Files\nodejs;C:\ProgramData\chocolatey\bin;C:\Users\USER\AppData\Local\Pub\Cache\bin;C:\Users\USER\AppData\Local\Microsoft\WindowsApps;C:\Users\USER\AppData\Roaming\Composer\vendor\bin;C:\Users\USER\AppData\Local\Programs\Microsoft VS Code\bin;C:\src\flutter\bin;C:\src\flutter\bin\cache\dart-sdk\bin;C:\src\flutter\.pub-cache\bin;C:\Users\USER\AppData\Roaming\npm;C:\Users\USER\AppData\Local\Pub\Cache\bin
ORIGINAL_TEMP => /tmp
ORIGINAL_TMP => /tmp
ORIGINAL_XDG_CURRENT_DESKTOP => undefined
OS => Windows_NT
PATH => C:\Users\USER\bin;C:\Program Files\Git\mingw64\bin;C:\Program Files\Git\usr\local\bin;C:\Program Files\Git\usr\bin;C:\Program Files\Git\usr\bin;C:\Program Files\Git\mingw64\bin;C:\Program Files\Git\usr\bin;C:\Users\USER\bin;C:\Program Files\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0;C:\WINDOWS\System32\OpenSSH;D:\Program Files (x86)\MySQL\MySQL Server 5.0\bin;C:\xampp\php;C:\ProgramData\ComposerSetup\bin;C:\Program Files\Java\jdk-18.0.2\bin;C:\Program Files\Git\cmd;C:\Program Files\nodejs;C:\ProgramData\chocolatey\bin;C:\Users\USER\AppData\Local\Pub\Cache\bin;C:\Users\USER\AppData\Local\Microsoft\WindowsApps;C:\Users\USER\AppData\Roaming\Composer\vendor\bin;C:\Users\USER\AppData\Local\Programs\Microsoft VS Code\bin;C:\src\flutter\bin;C:\src\flutter\bin\cache\dart-sdk\bin;C:\src\flutter\.pub-cache\bin;C:\Users\USER\AppData\Roaming\npm;C:\Users\USER\AppData\Local\Pub\Cache\bin;C:\Program Files\Git\usr\bin\vendor_perl;C:\Program Files\Git\usr\bin\core_perl
PATHEXT => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
PKG_CONFIG_PATH => /mingw64/lib/pkgconfig:/mingw64/share/pkgconfig
PLINK_PROTOCOL => ssh
PROCESSOR_ARCHITECTURE => AMD64
PROCESSOR_IDENTIFIER => Intel64 Family 6 Model 60 Stepping 3, GenuineIntel
PROCESSOR_LEVEL => 6
PROCESSOR_REVISION => 3c03
ProgramData => C:\ProgramData
PROGRAMFILES => C:\Program Files
ProgramFiles(x86) => C:\Program Files (x86)
ProgramW6432 => C:\Program Files
PS1 => \[\033]0;$TITLEPREFIX:$PWD\007\]\n\[\033[32m\]\u@\h \[\033[35m\]$MSYSTEM \[\033[33m\]\w\[\033[36m\]`__git_ps1`\[\033[0m\]\n$
PSModulePath => C:\Program Files\WindowsPowerShell\Modules;C:\WINDOWS\system32\WindowsPowerShell\v1.0\Modules
PUBLIC => C:\Users\Public
PWD => /c/Users/USER/Music/PHP
SESSIONNAME => Console
SHELL => C:\Program Files\Git\usr\bin\bash.exe
SHLVL => 1
SSH_ASKPASS => /mingw64/bin/git-askpass.exe
SYSTEMDRIVE => C:
SYSTEMROOT => C:\WINDOWS
TEMP => C:\Users\USER\AppData\Local\Temp
TERM_PROGRAM => vscode
TERM_PROGRAM_VERSION => 1.73.1
TMP => C:\Users\USER\AppData\Local\Temp
TMPDIR => C:\Users\USER\AppData\Local\Temp
USERDOMAIN => DESKTOP-CFE253U
USERDOMAIN_ROAMINGPROFILE => DESKTOP-CFE253U
USERNAME => USER
USERPROFILE => C:\Users\USER
VSCODE_GIT_ASKPASS_EXTRA_ARGS => --ms-enable-electron-run-as-node
VSCODE_GIT_ASKPASS_MAIN => c:\Users\USER\AppData\Local\Programs\Microsoft VS Code\resources\app\extensions\git\dist\askpass-main.js
VSCODE_GIT_ASKPASS_NODE => C:\Users\USER\AppData\Local\Programs\Microsoft VS Code\Code.exe
VSCODE_GIT_IPC_HANDLE => \\.\pipe\vscode-git-3f75173590-sock
WINDIR => C:\WINDOWS
_ => /usr/bin/winpty

PHP Variables

Variable => Value
$_SERVER['ACLOCAL_PATH'] => /mingw64/share/aclocal:/usr/share/aclocal
$_SERVER['ALLUSERSPROFILE'] => C:\ProgramData
$_SERVER['APPDATA'] => C:\Users\USER\AppData\Roaming
$_SERVER['ChocolateyInstall'] => C:\ProgramData\chocolatey
$_SERVER['ChocolateyLastPathUpdate'] => 133120834040953282
$_SERVER['CHROME_CRASHPAD_PIPE_NAME'] => \\.\pipe\crashpad_8520_ECQKBFCLHQBRFTIB
$_SERVER['COLORTERM'] => truecolor
$_SERVER['COMMONPROGRAMFILES'] => C:\Program Files\Common Files
$_SERVER['CommonProgramFiles(x86)'] => C:\Program Files (x86)\Common Files
$_SERVER['CommonProgramW6432'] => C:\Program Files\Common Files
$_SERVER['COMPUTERNAME'] => DESKTOP-CFE253U
$_SERVER['COMSPEC'] => C:\WINDOWS\system32\cmd.exe
$_SERVER['CONFIG_SITE'] => /etc/config.site
$_SERVER['DISPLAY'] => needs-to-be-defined
$_SERVER['DriverData'] => C:\Windows\System32\Drivers\DriverData
$_SERVER['EXEPATH'] => C:\Program Files\Git\bin
$_SERVER['FPS_BROWSER_APP_PROFILE_STRING'] => Internet Explorer
$_SERVER['FPS_BROWSER_USER_PROFILE_STRING'] => Default
$_SERVER['GIT_ASKPASS'] => c:\Users\USER\AppData\Local\Programs\Microsoft VS Code\resources\app\extensions\git\dist\askpass.sh
$_SERVER['HOME'] => C:\Users\USER
$_SERVER['HOMEDRIVE'] => C:
$_SERVER['HOMEPATH'] => \Users\USER
$_SERVER['HOSTNAME'] => DESKTOP-CFE253U
$_SERVER['INFOPATH'] => /usr/local/info:/usr/share/info:/usr/info:/share/info
$_SERVER['JAVA_HOME'] => C:\Program Files\Java\jdk-18.0.2
$_SERVER['LANG'] => en_US.UTF-8
$_SERVER['LOCALAPPDATA'] => C:\Users\USER\AppData\Local
$_SERVER['LOGONSERVER'] => \\DESKTOP-CFE253U
$_SERVER['MANPATH'] => /mingw64/local/man:/mingw64/share/man:/usr/local/man:/usr/share/man:/usr/man:/share/man
$_SERVER['MINGW_CHOST'] => x86_64-w64-mingw32
$_SERVER['MINGW_PACKAGE_PREFIX'] => mingw-w64-x86_64
$_SERVER['MINGW_PREFIX'] => /mingw64
$_SERVER['MSYSTEM'] => MINGW64
$_SERVER['MSYSTEM_CARCH'] => x86_64
$_SERVER['MSYSTEM_CHOST'] => x86_64-w64-mingw32
$_SERVER['MSYSTEM_PREFIX'] => /mingw64
$_SERVER['NUMBER_OF_PROCESSORS'] => 4
$_SERVER['OneDrive'] => C:\Users\USER\OneDrive
$_SERVER['ORIGINAL_PATH'] => C:\Program Files\Git\mingw64\bin;C:\Program Files\Git\usr\bin;C:\Users\USER\bin;C:\Program Files\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0;C:\WINDOWS\System32\OpenSSH;D:\Program Files (x86)\MySQL\MySQL Server 5.0\bin;C:\xampp\php;C:\ProgramData\ComposerSetup\bin;C:\Program Files\Java\jdk-18.0.2\bin;C:\Program Files\Git\cmd;C:\Program Files\nodejs;C:\ProgramData\chocolatey\bin;C:\Users\USER\AppData\Local\Pub\Cache\bin;C:\Users\USER\AppData\Local\Microsoft\WindowsApps;C:\Users\USER\AppData\Roaming\Composer\vendor\bin;C:\Users\USER\AppData\Local\Programs\Microsoft VS Code\bin;C:\src\flutter\bin;C:\src\flutter\bin\cache\dart-sdk\bin;C:\src\flutter\.pub-cache\bin;C:\Users\USER\AppData\Roaming\npm;C:\Users\USER\AppData\Local\Pub\Cache\bin
$_SERVER['ORIGINAL_TEMP'] => /tmp
$_SERVER['ORIGINAL_TMP'] => /tmp
$_SERVER['ORIGINAL_XDG_CURRENT_DESKTOP'] => undefined
$_SERVER['OS'] => Windows_NT
$_SERVER['PATH'] => C:\Users\USER\bin;C:\Program Files\Git\mingw64\bin;C:\Program Files\Git\usr\local\bin;C:\Program Files\Git\usr\bin;C:\Program Files\Git\usr\bin;C:\Program Files\Git\mingw64\bin;C:\Program Files\Git\usr\bin;C:\Users\USER\bin;C:\Program Files\Common Files\Oracle\Java\javapath;C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0;C:\WINDOWS\System32\OpenSSH;D:\Program Files (x86)\MySQL\MySQL Server 5.0\bin;C:\xampp\php;C:\ProgramData\ComposerSetup\bin;C:\Program Files\Java\jdk-18.0.2\bin;C:\Program Files\Git\cmd;C:\Program Files\nodejs;C:\ProgramData\chocolatey\bin;C:\Users\USER\AppData\Local\Pub\Cache\bin;C:\Users\USER\AppData\Local\Microsoft\WindowsApps;C:\Users\USER\AppData\Roaming\Composer\vendor\bin;C:\Users\USER\AppData\Local\Programs\Microsoft VS Code\bin;C:\src\flutter\bin;C:\src\flutter\bin\cache\dart-sdk\bin;C:\src\flutter\.pub-cache\bin;C:\Users\USER\AppData\Roaming\npm;C:\Users\USER\AppData\Local\Pub\Cache\bin;C:\Program Files\Git\usr\bin\vendor_perl;C:\Program Files\Git\usr\bin\core_perl
$_SERVER['PATHEXT'] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
$_SERVER['PKG_CONFIG_PATH'] => /mingw64/lib/pkgconfig:/mingw64/share/pkgconfig
$_SERVER['PLINK_PROTOCOL'] => ssh
$_SERVER['PROCESSOR_ARCHITECTURE'] => AMD64
$_SERVER['PROCESSOR_IDENTIFIER'] => Intel64 Family 6 Model 60 Stepping 3, GenuineIntel
$_SERVER['PROCESSOR_LEVEL'] => 6
$_SERVER['PROCESSOR_REVISION'] => 3c03
$_SERVER['ProgramData'] => C:\ProgramData
$_SERVER['PROGRAMFILES'] => C:\Program Files
$_SERVER['ProgramFiles(x86)'] => C:\Program Files (x86)
$_SERVER['ProgramW6432'] => C:\Program Files
$_SERVER['PS1'] => \[\033]0;$TITLEPREFIX:$PWD\007\]\n\[\033[32m\]\u@\h \[\033[35m\]$MSYSTEM \[\033[33m\]\w\[\033[36m\]`__git_ps1`\[\033[0m\]\n$
$_SERVER['PSModulePath'] => C:\Program Files\WindowsPowerShell\Modules;C:\WINDOWS\system32\WindowsPowerShell\v1.0\Modules    
$_SERVER['PUBLIC'] => C:\Users\Public
$_SERVER['PWD'] => /c/Users/USER/Music/PHP
$_SERVER['SESSIONNAME'] => Console
$_SERVER['SHELL'] => C:\Program Files\Git\usr\bin\bash.exe
$_SERVER['SHLVL'] => 1
$_SERVER['SSH_ASKPASS'] => /mingw64/bin/git-askpass.exe
$_SERVER['SYSTEMDRIVE'] => C:
$_SERVER['SYSTEMROOT'] => C:\WINDOWS
$_SERVER['TEMP'] => C:\Users\USER\AppData\Local\Temp
$_SERVER['TERM_PROGRAM'] => vscode
$_SERVER['TERM_PROGRAM_VERSION'] => 1.73.1
$_SERVER['TMP'] => C:\Users\USER\AppData\Local\Temp
$_SERVER['TMPDIR'] => C:\Users\USER\AppData\Local\Temp
$_SERVER['USERDOMAIN'] => DESKTOP-CFE253U
$_SERVER['USERDOMAIN_ROAMINGPROFILE'] => DESKTOP-CFE253U
$_SERVER['USERNAME'] => USER
$_SERVER['USERPROFILE'] => C:\Users\USER
$_SERVER['VSCODE_GIT_ASKPASS_EXTRA_ARGS'] => --ms-enable-electron-run-as-node
$_SERVER['VSCODE_GIT_ASKPASS_MAIN'] => c:\Users\USER\AppData\Local\Programs\Microsoft VS Code\resources\app\extensions\git\dist\askpass-main.js
$_SERVER['VSCODE_GIT_ASKPASS_NODE'] => C:\Users\USER\AppData\Local\Programs\Microsoft VS Code\Code.exe
$_SERVER['VSCODE_GIT_IPC_HANDLE'] => \\.\pipe\vscode-git-3f75173590-sock
$_SERVER['WINDIR'] => C:\WINDOWS
$_SERVER['_'] => /usr/bin/winpty
$_SERVER['PHP_SELF'] => php_dasar/PhpInfo.php
$_SERVER['SCRIPT_NAME'] => php_dasar/PhpInfo.php
$_SERVER['SCRIPT_FILENAME'] => php_dasar/PhpInfo.php
$_SERVER['PATH_TRANSLATED'] => php_dasar/PhpInfo.php
$_SERVER['DOCUMENT_ROOT'] =>
$_SERVER['REQUEST_TIME_FLOAT'] => 1668580637.2277
$_SERVER['REQUEST_TIME'] => 1668580637
$_SERVER['argv'] => Array
(
    [0] => php_dasar/PhpInfo.php
)

$_SERVER['argc'] => 1


 _______________________________________________________________________

PHP Credits

PHP Group
Thies C. Arntzen, Stig Bakken, Shane Caraveo, Andi Gutmans, Rasmus Lerdorf, Sam Ruby, Sascha Schumann, Zeev Suraski, Jim Winstead, Andrei Zmievski

Language Design & Concept
Andi Gutmans, Rasmus Lerdorf, Zeev Suraski, Marcus Boerger

                               PHP Authors
Contribution => Authors
Zend Scripting Language Engine => Andi Gutmans, Zeev Suraski, Stanislav Malyshev, Marcus Boerger, Dmitry Stogov, Xinchen Hui, Nikita Popov
Extension Module API => Andi Gutmans, Zeev Suraski, Andrei Zmievski
UNIX Build and Modularization => Stig Bakken, Sascha Schumann, Jani Taskinen, Peter Kokot
Windows Support => Shane Caraveo, Zeev Suraski, Wez Furlong, Pierre-Alain Joye, Anatol Belski, Kalle Sommer Nielsen
Server API (SAPI) Abstraction Layer => Andi Gutmans, Shane Caraveo, Zeev Suraski
Streams Abstraction Layer => Wez Furlong, Sara Golemon
PHP Data Objects Layer => Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky
Output Handler => Zeev Suraski, Thies C. Arntzen, Marcus Boerger, Michael Wallner
Consistent 64 bit support => Anthony Ferrara, Anatol Belski

                               SAPI Modules
Contribution => Authors
Apache 2.0 Handler => Ian Holsman, Justin Erenkrantz (based on Apache 2.0 Filter code)
CGI / FastCGI => Rasmus Lerdorf, Stig Bakken, Shane Caraveo, Dmitry Stogov
CLI => Edin Kadribasic, Marcus Boerger, Johannes Schlueter, Moriyoshi Koizumi, Xinchen Hui
Embed => Edin Kadribasic
FastCGI Process Manager => Andrei Nigmatulin, dreamcat4, Antony Dovgal, Jerome Loyet
litespeed => George Wang
phpdbg => Felipe Pena, Joe Watkins, Bob Weinand

                              Module Authors
Module => Authors
BC Math => Andi Gutmans
Bzip2 => Sterling Hughes
Calendar => Shane Caraveo, Colin Viebrock, Hartmut Holzgraefe, Wez Furlong
COM and .Net => Wez Furlong
ctype => Hartmut Holzgraefe
cURL => Sterling Hughes
Date/Time Support => Derick Rethans
DB-LIB (MS SQL, Sybase) => Wez Furlong, Frank M. Kromann, Adam Baratz
DBA => Sascha Schumann, Marcus Boerger
DOM => Christian Stocker, Rob Richards, Marcus Boerger
enchant => Pierre-Alain Joye, Ilia Alshanetsky
EXIF => Rasmus Lerdorf, Marcus Boerger
FFI => Dmitry Stogov
fileinfo => Ilia Alshanetsky, Pierre Alain Joye, Scott MacVicar, Derick Rethans, Anatol Belski
Firebird driver for PDO => Ard Biesheuvel
FTP => Stefan Esser, Andrew Skalski
GD imaging => Rasmus Lerdorf, Stig Bakken, Jim Winstead, Jouni Ahto, Ilia Alshanetsky, Pierre-Alain Joye, Marcus Boerger, Mark Randall
GetText => Alex Plotnick
GNU GMP support => Stanislav Malyshev
Iconv => Rui Hirokawa, Stig Bakken, Moriyoshi Koizumi
IMAP => Rex Logan, Mark Musone, Brian Wang, Kaj-Michael Lang, Antoni Pamies Olive, Rasmus Lerdorf, Andrew Skalski, Chuck Hagenbuch, Daniel R Kalowsky
Input Filter => Rasmus Lerdorf, Derick Rethans, Pierre-Alain Joye, Ilia Alshanetsky
Internationalization => Ed Batutis, Vladimir Iordanov, Dmitry Lakhtyuk, Stanislav Malyshev, Vadim Savchuk, Kirti Velankar    
JSON => Jakub Zelenka, Omar Kilani, Scott MacVicar
LDAP => Amitay Isaacs, Eric Warnke, Rasmus Lerdorf, Gerrit Thomson, Stig Venaas
LIBXML => Christian Stocker, Rob Richards, Marcus Boerger, Wez Furlong, Shane Caraveo
Multibyte String Functions => Tsukada Takuya, Rui Hirokawa
MySQL driver for PDO => George Schlossnagle, Wez Furlong, Ilia Alshanetsky, Johannes Schlueter
MySQLi => Zak Greant, Georg Richter, Andrey Hristov, Ulf Wendel
MySQLnd => Andrey Hristov, Ulf Wendel, Georg Richter, Johannes Schlüter
OCI8 => Stig Bakken, Thies C. Arntzen, Andy Sautins, David Benson, Maxim Maletsky, Harald Radi, Antony Dovgal, Andi Gutmans, 
Wez Furlong, Christopher Jones, Oracle Corporation
ODBC driver for PDO => Wez Furlong
ODBC => Stig Bakken, Andreas Karajannis, Frank M. Kromann, Daniel R. Kalowsky
Opcache => Andi Gutmans, Zeev Suraski, Stanislav Malyshev, Dmitry Stogov, Xinchen Hui
OpenSSL => Stig Venaas, Wez Furlong, Sascha Kettler, Scott MacVicar, Eliot Lear
Oracle (OCI) driver for PDO => Wez Furlong
pcntl => Jason Greene, Arnaud Le Blanc
Perl Compatible Regexps => Andrei Zmievski
PHP Archive => Gregory Beaver, Marcus Boerger
PHP Data Objects => Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky
PHP hash => Sara Golemon, Rasmus Lerdorf, Stefan Esser, Michael Wallner, Scott MacVicar
Posix => Kristian Koehntopp
PostgreSQL driver for PDO => Edin Kadribasic, Ilia Alshanetsky
PostgreSQL => Jouni Ahto, Zeev Suraski, Yasuo Ohgaki, Chris Kings-Lynne
Pspell => Vlad Krupin
Readline => Thies C. Arntzen
Reflection => Marcus Boerger, Timm Friebe, George Schlossnagle, Andrei Zmievski, Johannes Schlueter
Sessions => Sascha Schumann, Andrei Zmievski
Shared Memory Operations => Slava Poliakov, Ilia Alshanetsky
SimpleXML => Sterling Hughes, Marcus Boerger, Rob Richards
SNMP => Rasmus Lerdorf, Harrie Hazewinkel, Mike Jackson, Steven Lawrance, Johann Hanne, Boris Lytochkin
SOAP => Brad Lafountain, Shane Caraveo, Dmitry Stogov
Sockets => Chris Vandomelen, Sterling Hughes, Daniel Beulshausen, Jason Greene
Sodium => Frank Denis
SPL => Marcus Boerger, Etienne Kneuss
SQLite 3.x driver for PDO => Wez Furlong
SQLite3 => Scott MacVicar, Ilia Alshanetsky, Brad Dewar
System V Message based IPC => Wez Furlong
System V Semaphores => Tom May
System V Shared Memory => Christian Cartus
tidy => John Coggeshall, Ilia Alshanetsky
tokenizer => Andrei Zmievski, Johannes Schlueter
XML => Stig Bakken, Thies C. Arntzen, Sterling Hughes
XMLReader => Rob Richards
XMLWriter => Rob Richards, Pierre-Alain Joye
XSL => Christian Stocker, Rob Richards
Zip => Pierre-Alain Joye, Remi Collet
Zlib => Rasmus Lerdorf, Stefan Roehrich, Zeev Suraski, Jade Nicoletti, Michael Wallner

                            PHP Documentation
Authors => Mehdi Achour, Friedhelm Betz, Antony Dovgal, Nuno Lopes, Hannes Magnusson, Philip Olson, Georg Richter, Damien Seguy, Jakub Vrana, Adam Harvey
Editor => Peter Cowburn
User Note Maintainers => Daniel P. Brown, Thiago Henrique Pojda
Other Contributors => Previously active authors, editors and other contributors are listed in the manual.

PHP Quality Assurance Team
Ilia Alshanetsky, Joerg Behrens, Antony Dovgal, Stefan Esser, Moriyoshi Koizumi, Magnus Maatta, Sebastian Nohn, Derick Rethans, Melvyn Sopacua, Pierre-Alain Joye, Dmitry Stogov, Felipe Pena, David Soria Parra, Stanislav Malyshev, Julien Pauli, Stephen Zarkos, Anatol Belski, Remi Collet, Ferenc Kovacs

                     Websites and Infrastructure team
PHP Websites Team => Rasmus Lerdorf, Hannes Magnusson, Philip Olson, Lukas Kahwe Smith, Pierre-Alain Joye, Kalle Sommer Nielsen, Peter Cowburn, Adam Harvey, Ferenc Kovacs, Levi Morrison
Event Maintainers => Damien Seguy, Daniel P. Brown
Network Infrastructure => Daniel P. Brown
Windows Infrastructure => Alex Schoenmaker

PHP License
This program is free software; you can redistribute it and/or modify
it under the terms of the PHP License as published by the PHP Group
and included in the distribution in the file:  LICENSE

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

If you did not receive a copy of the PHP license, or have any
questions about PHP licensing, please contact license@php.net.