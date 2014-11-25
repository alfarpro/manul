<?php
define('MANUL_LANG_ID_RU', 'ru');
define('MANUL_LANG_ID_EN', 'en');
define('MANUL_LANG_ID_UA', 'uk');
define('MANUL_LANG_ID_TR', 'tr');

define('MANUL_LANG_ID_DEFAULT', MANUL_LANG_ID_EN);

$locals = array(MANUL_LANG_ID_RU, MANUL_LANG_ID_EN, MANUL_LANG_ID_UA, MANUL_LANG_ID_TR);

if (!isset($_COOKIE['lang'])) {
  if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
     $current_lang = @substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  } else {
     $current_lang = MANUL_LANG_ID_DEFAULT;
  }
} else {
  $current_lang = @substr($_COOKIE['lang'], 0, 2);
  if (!in_array($current_lang, $locals)) {
     $current_lang = MANUL_LANG_ID_DEFAULT;
  }
}

switch ($current_lang) {
      case MANUL_LANG_ID_EN: 
                             $lang_domain = 'http://help.yandex.com';  
                             break;
      case MANUL_LANG_ID_UA: 
                             $lang_domain = 'http://help.yandex.ua'; 
                             break;
      case MANUL_LANG_ID_TR: 
                             $lang_domain = 'http://yardim.yandex.com.tr'; 
                             break;
                    default: 
                             $lang_domain = 'http://help.yandex.ru';
   }

define('PS_HELP_URL', $lang_domain);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// This part of file is automatically generated
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Lang: ru
if ($current_lang == "ru") {
define('PS_SCANNING_FILE', 'Сканируем');
define('PS_SCANNING_OF', 'из');
define('PS_SEND_REPORT_BUTTON', 'Отправить отчет');
define('PS_ERR_NO_TEMP_FOLDER', 'Невозможно создать временные файлы, так как временный системный каталог и текущий каталог скрипта не доступны для записи.');
define('PS_ERR_UPLOADING_XML', 'Ошибка загрузки XML файла. Проверьте ваши настройки php (upload_max_filesize)');
define('PS_ERR_BROKEN_XML', 'XML отчет поврежден');
define('PS_ERR_ARCHIVE_OPENING', 'Ошибка открытия архива');
define('PS_ERR_ARCHIVE_CREATION', 'Ошибка создания архива: %s');
define('PS_ERR_WRONG_ARCHIVE_MODE', 'Недопустимый режим архива. Возможные: r,w,a');
define('PS_ERR_ARCHIVE_WRITE_INCORRECT_MODE', 'Ошибка записи. Архив был открыт для чтения');
define('PS_ERR_NO_SUCH_FILE', 'Нет такого файла.');
define('PS_ERR_TEMPLATE_DOESNT_EXISTS', 'Шаблон %s не найден.');
define('PS_ERR_XML_VALIDATION_FAILED', 'В функции DOMDocument::schemaValidate() возникла ошибка!');
define('PS_ERR_XML_VALIDATION_WARNING', 'Предупреждение %s');
define('PS_ERR_XML_VALIDATION_ERROR', 'Ошибка %s');
define('PS_ERR_XML_VALIDATION_FATAL_ERROR', 'Критическая ошибка %s');
define('PS_ERR_XML_FILE_SPEC', 'в %s');
define('PS_ERR_XML_LINE_SPEC', 'в строке %d');
define('PS_ERR_UNPACK_ARCHIVE', 'Ошибка открытия архива');
define('PS_ERR_BROKEN_XML_FILE', 'xml файл поврежден');
define('PS_ERR_EXCEPTION_OCCURED', 'Возник exception:');
define('PS_ERR_QUARANTINE_NOT_EXISTS', 'Ошибка размещения в карантин: файл [%s] не существует');
define('PS_ERR_DELETE_NOT_EXISTS', 'Ошибка удаления файла: файл [%s] не существует');
define('PS_ERR_MALWARE_DB_BROKEN', 'malware_db.xml поврежден');
define('PS_WAS_DELETED', 'Файл [%s] удален');
define('PS_WAS_QUARANTINED', 'Файл [%s] помещен в карантин');
define('PS_ENTER_PASSWORD', 'Введите пароль для доступа к инструменту. Если вы забыли пароль, удалите файл ./tmp/config.php.');
define('PS_DELETE_ARCHIVE', 'Архив уже существует. Удаляем %s');
define('PS_PASS_OK', 'OK');
define('PS_CHOOSE_STRONG_PASS', 'Придумайте пароль для доступа к инструменту. Пароль должен быть не короче 8 символов и включать любые три из четырёх групп символов: строчные и прописные буквы, цифры и спецсимволы.');
define('PS_ERR_SHORT_PASSWORD', 'Ошибка. Пароль слишком короткий.');
define('PS_ERR_WEAK_PASSWORD', 'Ошибка. Пароль должен состоять из трех групп символов: заглавных, маленьких букв, цифр и спецсимволов.');
define('PS_ERR_INVALID_PASSWORD', 'Ошибка. Неверный пароль. Для сброса удалите файл настроек ./tmp/config.php.');
define('PS_ERR_NO_QUARANTINE_FILE', 'Файл карантина не найден. Пожалуйста, выполните "Лечение" еще раз.');
define('PS_ERR_NO_DOWNLOAD_LOG_FILE', 'Файл xml log не найден. Пожалуйста, выполните сканирование еще раз.');
define('PS_RECIPE_FILENAME', 'Имя файла');
define('PS_RECIPE_ACTION', 'Действие');
define('PS_RECIPE_ACTION_DEL', 'Удалить');
define('PS_RECIPE_ACTION_QUARANTINE', 'В карантин');
define('PS_SIGN_IN', 'Вход');
define('PS_PASSWORD', 'Пароль');
define('PS_OK', 'OK');
define('PS_TITLE_SCANNER', 'Сканер');
define('PS_TITLE_EXECUTOR', 'Лечение');
define('PS_HELP', 'Помощь');
define('PS_MAIN_TITLE', 'Manul');
define('PS_INSERT_RECIPE', 'Вставьте предписание:');
define('PS_CHECK_RECIPE', 'Действия будут применены только к выбранным файлам:');
define('PS_EXECUTE', 'Исполнить');
define('PS_RESULT', 'Журнал операций');
define('PS_EXECUTED_RESULT', 'Результат выполнения предписания:');
define('PS_DOWNLOAD_QUARANTINE', 'Скачать архив с файлами в карантине');
define('PS_DOWNLOAD_LOG', 'Скачать архив с отчетом');
define('PS_PRETEXT', 'Давайте найдем вредоносный код!');
define('PS_PROGRESS', 'Ход исполнения:');
define('PS_TOTAL_PROGRESS', 'Всего найдено %d файлов');
define('PS_BODYTEXT', 'Чтобы начать проверку сайта, нажмите кнопку "Начать сканирование”. После окончания сканирования программа предложит скачать файл отчета, который можно проанализировать самостоятельно или отправить на анализ специалисту.');
define('PS_INTERVAL', 'Интервал запросов:');
define('PS_SEC', 'сек');
define('PS_SCAN_LABEL', 'Искать вредоносный код:');
define('PS_SETTINGS', 'Настройки');
define('PS_FURTHER_INSTRUCTIONS', 'Теперь вы можете скачать отчет и передать его на анализ вирусному аналитику.');
define('PS_START_SCAN', 'Начать сканирование');
define('PS_ERR_DUMMY_FOLDER', 'Имя каталога, где размещен Манул, должно быть уникальным и состоять как минимум из 5 символов. Например, "manul_%s". Переименуйте текущий каталог "%s".');
define('PS_ERR_CANNOT_CREATE_FILE', 'Ошибка при создании файла %s. Текст ошибки: %s');
define('PS_OLD_PHP', 'Для работы необходим PHP версии 5.2.0 или выше.');
define('PS_NO_ZIP_MODULE', 'Для работы необходим PHP модуль zip.');
define('PS_NO_DOMDOCUMENT_MODULE', 'Для работы необходим PHP модуль dom.');
define('PS_ERR_NO_FILES_IN_WEB_ROOT', 'Нет файлов для проверки в корневом каталоге веб-сайта.');
define('PT_STR_DONE', 'Готово!');
define('PT_STR_ERR_OCCURED', 'Ошибка!');
define('PT_STR_BUTTON_CANCEL', 'Отменить сканирование');
define('PT_STR_SEARCH_AGAIN_BUTTON', 'Сканировать снова');
define('PT_STR_NO_ERROR_FOUND', 'Ошибок не обнаружено');
define('PT_STR_NO_XML_SUPPORT', 'Ваш браузер не поддерживает проверку XML');
define('PT_STR_INVALID_XML', 'XML предписание ошибочно');
define('PT_STR_DELETE_APPROVAL', 'Некоторые из ваших файлов будут удалены. Подтверждаете?');
define('PS_DELETE_TOOL_BUTTON_TITLE', 'Удалить Manul');
define('PS_CHECKER_TITLE', 'Проверка конфигурации сервера');
define('PS_CHECKER_PASSED', 'Да');
define('PS_CHECKER_FAILED', 'Нет');
define('PS_CHECKER_PHPVERSION', 'Версия PHP >= 5.2');
define('PS_CHECKER_ZIP', 'Установлен модуль php Zip');
define('PS_CHECKER_DOM', 'Установлен модуль php XML DOM');
define('PS_CHECKER_PERM', 'Каталог temp доступен на запись');
define('PS_CHECKER_FIX', 'Как исправить');
define('PS_CHECKER_MESSAGE', 'Пожалуйста, исправьте указанные проблемы и перезапустите Manul.');
}

// Lang: en
if ($current_lang == "en") {
define('PS_SCANNING_FILE', 'Scanning');
define('PS_SCANNING_OF', 'out of');
define('PS_SEND_REPORT_BUTTON', 'Send report');
define('PS_ERR_NO_TEMP_FOLDER', 'It\'s not possible to create temporary files because the temporary system directory and the current script directory are not available for writing.');
define('PS_ERR_UPLOADING_XML', 'An error occurred when downloading the XML file. Check your php settings (upload_max_filesize)');
define('PS_ERR_BROKEN_XML', 'the XML report is corrupted');
define('PS_ERR_ARCHIVE_OPENING', 'Error occurred opening archive');
define('PS_ERR_ARCHIVE_CREATION', 'An error occurred when creating the archive: %s');
define('PS_ERR_WRONG_ARCHIVE_MODE', 'Invalid archive mode. Valid options: r,w,a');
define('PS_ERR_ARCHIVE_WRITE_INCORRECT_MODE', 'Write error. The archive was open for reading');
define('PS_ERR_NO_SUCH_FILE', 'This file doesn\'t exist.');
define('PS_ERR_TEMPLATE_DOESNT_EXISTS', '%s template not found.');
define('PS_ERR_XML_VALIDATION_FAILED', 'An error occurred with the DOMDocument::schemaValidate() function!');
define('PS_ERR_XML_VALIDATION_WARNING', 'Warning %s');
define('PS_ERR_XML_VALIDATION_ERROR', 'Error %S');
define('PS_ERR_XML_VALIDATION_FATAL_ERROR', 'Critical error %s');
define('PS_ERR_XML_FILE_SPEC', 'in %s');
define('PS_ERR_XML_LINE_SPEC', 'in line %d');
define('PS_ERR_UNPACK_ARCHIVE', 'Error occurred opening archive');
define('PS_ERR_BROKEN_XML_FILE', 'xml file corrupted');
define('PS_ERR_EXCEPTION_OCCURED', 'An exception occurred:');
define('PS_ERR_QUARANTINE_NOT_EXISTS', 'Error putting file in quarantine: the file [%s] doesn\'t exist');
define('PS_ERR_DELETE_NOT_EXISTS', 'Error deleting file: the file [%s] doesn\'t exist');
define('PS_ERR_MALWARE_DB_BROKEN', 'malware_db.xml corrupted');
define('PS_WAS_DELETED', '[%s] file was deleted');
define('PS_WAS_QUARANTINED', '[%s] file put in quarantine');
define('PS_ENTER_PASSWORD', 'Enter password');
define('PS_DELETE_ARCHIVE', 'Archive already exists. Deleting %s');
define('PS_PASS_OK', 'OK');
define('PS_CHOOSE_STRONG_PASS', 'Think up a complex password for script access');
define('PS_ERR_SHORT_PASSWORD', 'Error. Password is too short.');
define('PS_ERR_WEAK_PASSWORD', 'Error. The password should consist of three character types: upper- and lower-case letters, numbers and special characters.');
define('PS_ERR_INVALID_PASSWORD', 'Error. Invalid password. To reset, delete config.php in the /tmp/ directory.');
define('PS_ERR_NO_QUARANTINE_FILE', 'Quarantine file not found. Please go through Treatment again.');
define('PS_ERR_NO_DOWNLOAD_LOG_FILE', 'xml log file not found. Please scan again.');
define('PS_RECIPE_FILENAME', 'File name');
define('PS_RECIPE_ACTION', 'Action');
define('PS_RECIPE_ACTION_DEL', 'Delete');
define('PS_RECIPE_ACTION_QUARANTINE', 'In quarantine');
define('PS_SIGN_IN', 'Log in');
define('PS_PASSWORD', 'Password');
define('PS_OK', 'OK');
define('PS_TITLE_SCANNER', 'Scanner');
define('PS_TITLE_EXECUTOR', 'Treatment');
define('PS_HELP', 'Help');
define('PS_MAIN_TITLE', 'Manul');
define('PS_INSERT_RECIPE', 'Enter prescription');
define('PS_CHECK_RECIPE', 'Action will only be applied to chosen files:');
define('PS_EXECUTE', 'Execute');
define('PS_RESULT', 'Operations log:');
define('PS_EXECUTED_RESULT', 'Results from taking prescription');
define('PS_DOWNLOAD_QUARANTINE', 'Download archive with quarantined files');
define('PS_DOWNLOAD_LOG', 'Download archive with report');
define('PS_PRETEXT', 'Let\'s find malware!');
define('PS_PROGRESS', 'Implementation in progress:');
define('PS_TOTAL_PROGRESS', 'Found %d files total');
define('PS_BODYTEXT', 'To begin site validation, click "Start scan". After scanning is finished, the program will ask if you want to download a report file that you can then analyze yourself or send to a specialist.');
define('PS_INTERVAL', 'Interval between search requests');
define('PS_SEC', 'sec');
define('PS_SCAN_LABEL', 'Search for malware:');
define('PS_SETTINGS', 'Settings');
define('PS_FURTHER_INSTRUCTIONS', 'Now you can download a report and pass it to a virus analyst for inspection.');
define('PS_START_SCAN', 'Begin scanning');
define('PS_ERR_DUMMY_FOLDER', 'The name of the directory where Manul is stored should be unique and consist of a minimum of 5 characters. For example, "manul_%s". Rename the current directory "%s".');
define('PS_ERR_CANNOT_CREATE_FILE', 'An error occurred when creating the file %s. Error text: %s');
define('PS_OLD_PHP', 'You need PHP version 5.2.0 or higher for this to work.');
define('PS_NO_ZIP_MODULE', 'You need the zip PHP module in order for this to work.');
define('PS_NO_DOMDOCUMENT_MODULE', 'You need the dom PHP module in order for this to work.');
define('PS_ERR_NO_FILES_IN_WEB_ROOT', 'There are no files to be validated in the website\'s root directory.');
define('PT_STR_DONE', 'Done!');
define('PT_STR_ERR_OCCURED', 'Error!');
define('PT_STR_BUTTON_CANCEL', 'Cancel scan');
define('PT_STR_SEARCH_AGAIN_BUTTON', 'Re-scan');
define('PT_STR_NO_ERROR_FOUND', 'No errors were found');
define('PT_STR_NO_XML_SUPPORT', 'Your browser doesn\'t support XML validation');
define('PT_STR_INVALID_XML', 'Incorrect XML prescription');
define('PT_STR_DELETE_APPROVAL', 'A few of your files will be deleted. Continue?');
define('PS_DELETE_TOOL_BUTTON_TITLE', 'Delete Manul');
define('PS_CHECKER_TITLE', 'Validate server configuration');
define('PS_CHECKER_PASSED', 'Yes');
define('PS_CHECKER_FAILED', 'No');
define('PS_CHECKER_PHPVERSION', 'PHP version >= 5.2');
define('PS_CHECKER_ZIP', 'Zip php module installed');
define('PS_CHECKER_DOM', 'XML DOM php module installed');
define('PS_CHECKER_PERM', 'temp directory available for writing');
define('PS_CHECKER_FIX', 'How to fix it');
define('PS_CHECKER_MESSAGE', 'Please fix the specified problem and restart Manul.');
}

// Lang: tr
if ($current_lang == "tr") {
define('PS_SCANNING_FILE', 'Taranıyor');
define('PS_SCANNING_OF', 'Toplam dosyadan taranan dosya sayısı: ');
define('PS_SEND_REPORT_BUTTON', 'Raporu gönder');
define('PS_ERR_NO_TEMP_FOLDER', 'Sistemin geçici dizini ve geçerli script dizini kayıt yapılamaz durumda olduğundan geçici dosyaların oluşumu mümkün değildir.');
define('PS_ERR_UPLOADING_XML', 'XML dosyası yükleme hatası yaşandı. Lütfen PHP (upload_max_filesize) ayarlarınızı kontrol ediniz.');
define('PS_ERR_BROKEN_XML', 'XML raporu bozuk');
define('PS_ERR_ARCHIVE_OPENING', 'Arşiv açma hatası yaşandı');
define('PS_ERR_ARCHIVE_CREATION', 'Yaşanan arşiv kurma hatası No.: %s');
define('PS_ERR_WRONG_ARCHIVE_MODE', 'Arşiv modu geçersizdir. Geçerli modlar: r,w,a');
define('PS_ERR_ARCHIVE_WRITE_INCORRECT_MODE', 'Kayıt hatası yaşandı: Arşiv salt okunur modunda açılmıştı.');
define('PS_ERR_NO_SUCH_FILE', 'Böyle bir dosya mevcut değildir');
define('PS_ERR_TEMPLATE_DOESNT_EXISTS', '%s şablonu bulunamadı.');
define('PS_ERR_XML_VALIDATION_FAILED', 'DOMDocument::schemaValidate() işlevinde bir hata yaşandı!');
define('PS_ERR_XML_VALIDATION_WARNING', 'Uyarı: %s');
define('PS_ERR_XML_VALIDATION_ERROR', '%s hatası ');
define('PS_ERR_XML_VALIDATION_FATAL_ERROR', '%s kritik hatası');
define('PS_ERR_XML_FILE_SPEC', '%s\'de');
define('PS_ERR_XML_LINE_SPEC', '%d satırında');
define('PS_ERR_UNPACK_ARCHIVE', 'Arşiv açma hatası yaşandı');
define('PS_ERR_BROKEN_XML_FILE', 'XML dosyası bozuk');
define('PS_ERR_EXCEPTION_OCCURED', 'Bir exception oluştu:');
define('PS_ERR_QUARANTINE_NOT_EXISTS', 'Karantinaya gönderme hatası yaşandı: [%s] dosyası mevcut değildir.');
define('PS_ERR_DELETE_NOT_EXISTS', 'Dosya silme hatası yaşandı: [%s] dosyası mevcut değildir.');
define('PS_ERR_MALWARE_DB_BROKEN', 'malware_db.xml bozuktur');
define('PS_WAS_DELETED', '[%s] dosyası silindi');
define('PS_WAS_QUARANTINED', '[%s] karantinaya gönderildi');
define('PS_ENTER_PASSWORD', 'Giriş şifrenizi girin');
define('PS_DELETE_ARCHIVE', 'Arşiv zaten mevcut. %s siliniyor.');
define('PS_PASS_OK', 'Tamam');
define('PS_CHOOSE_STRONG_PASS', 'Scriptlere erişim için yeterince karmaşık bir şifre oluşturunuz');
define('PS_ERR_SHORT_PASSWORD', 'Bir hata yaşandı: Şifre çok kısa.');
define('PS_ERR_WEAK_PASSWORD', 'Bir hata yaşandı: Şifre sadece büyük harfler, küçük harfler, rakamlar ve özel simgelerden oluşmalıdır.');
define('PS_ERR_INVALID_PASSWORD', 'Bir hata yaşandı: Giriş şifresi yanlış. Şifreyi sıfırlamak için /tmp/ kataloğunda config.php silinmelidir.');
define('PS_ERR_NO_QUARANTINE_FILE', 'Karantina dosyası bulunamıyor. Lütfen virüslerden arındırma işlemini tekrar yapınız.');
define('PS_ERR_NO_DOWNLOAD_LOG_FILE', 'XML log dosyası bulunamıyor. Lütfen tarama işlemini yeniden yapınız.');
define('PS_RECIPE_FILENAME', 'Dosya adı');
define('PS_RECIPE_ACTION', 'Eylem adı');
define('PS_RECIPE_ACTION_DEL', 'Sil');
define('PS_RECIPE_ACTION_QUARANTINE', 'Karantinaya gönder');
define('PS_SIGN_IN', 'Giriş');
define('PS_PASSWORD', 'Giriş şifresi');
define('PS_OK', 'Tamam');
define('PS_TITLE_SCANNER', 'Tarayıcı');
define('PS_TITLE_EXECUTOR', 'Virüslerden arındırma');
define('PS_HELP', 'Yardım');
define('PS_MAIN_TITLE', 'Manul');
define('PS_INSERT_RECIPE', 'Talimat yazın:');
define('PS_CHECK_RECIPE', 'Eylemler ancak seçilen dosyalar için uygulanacaktır:');
define('PS_EXECUTE', 'Yap');
define('PS_RESULT', 'Eylemler geçmişi');
define('PS_EXECUTED_RESULT', 'İstenilen eylemlerin sonucu:');
define('PS_DOWNLOAD_QUARANTINE', 'Karantinaya gönderilen dosyaları içeren arşivi yükle');
define('PS_DOWNLOAD_LOG', 'Raporu içeren arşivi yükle');
define('PS_PRETEXT', 'Kötü amaçlı yazılım kodu bulalım!');
define('PS_PROGRESS', 'İlerleme grafiği:');
define('PS_TOTAL_PROGRESS', 'Bulunan dosya sayısı: %d');
define('PS_BODYTEXT', 'Site kontrolü işlemini başlatmak için "Taramayı başlat” butonuna tıklayın. Tarama işlemi tamamlandıktan sonra kendiniz veya bir uzman tarafından incelenebilecek bir rapor içerecek bir dosya yüklemeniz önerilecektir.');
define('PS_INTERVAL', 'Sorgu aralığı:');
define('PS_SEC', 'sn.');
define('PS_SCAN_LABEL', 'Kötü amaçlı yazılım kodu bul:');
define('PS_SETTINGS', 'Ayarlar');
define('PS_FURTHER_INSTRUCTIONS', 'Tarama raporunu yükleyebilirsiniz. Yüklediğiniz raporu daha sonra incelenmek üzere bir virüs analiz uzmanına gönderebilirsiniz.');
define('PS_START_SCAN', 'Taramayı başlat');
define('PS_ERR_DUMMY_FOLDER', 'Manul\'un bulunacağı katalog, "manul_%s" gibi 5 simgeyle oluşan özel ve benzersiz bir isme sahip olmalıdır. Cari "%s" kataloğunun ismini değiştirin.');
define('PS_ERR_CANNOT_CREATE_FILE', 'Dosya kurma hatası yaşandı. Hatanın ayrıntıları: %s');
define('PS_OLD_PHP', '5.2.0 ve üzerindeki sürüme sahip bir PHP kullanmanız gerekir.');
define('PS_NO_ZIP_MODULE', 'Zip modüllü bir PHP kullanmanız gerekir.');
define('PS_NO_DOMDOCUMENT_MODULE', 'Dom modüllü bir PHP kullanmanız gerekir.');
define('PS_ERR_NO_FILES_IN_WEB_ROOT', 'Sitenin kök kataloğunda kontrol edilecek dosya yok.');
define('PT_STR_DONE', 'İşlem tamamlandı!');
define('PT_STR_ERR_OCCURED', 'Bir hata yaşandı!');
define('PT_STR_BUTTON_CANCEL', 'Taramayı iptal et');
define('PT_STR_SEARCH_AGAIN_BUTTON', 'Baştan tarama yap');
define('PT_STR_NO_ERROR_FOUND', 'Bir hata bulunamadı');
define('PT_STR_NO_XML_SUPPORT', 'Web tarayıcınız XML kontrol işlemlerini desteklemiyor.');
define('PT_STR_INVALID_XML', 'XML talimatı yanlış');
define('PT_STR_DELETE_APPROVAL', 'Bazı dosyalarınız silinecektir. İşlemi onaylıyor musunuz?');
define('PS_DELETE_TOOL_BUTTON_TITLE', 'Manul\'u sil');
define('PS_CHECKER_TITLE', 'Sunucu ayarları kontrolü');
define('PS_CHECKER_PASSED', 'Evet');
define('PS_CHECKER_FAILED', 'Hayır');
define('PS_CHECKER_PHPVERSION', 'PHP sürümünüz: >= 5.2');
define('PS_CHECKER_ZIP', 'PHP Zip modülü kuruldu');
define('PS_CHECKER_DOM', 'PHP XML DOM modülü kuruldu');
define('PS_CHECKER_PERM', 'TEMP kataloğu yazılabilir durumdadır.');
define('PS_CHECKER_FIX', 'Düzeltme yöntemi');
define('PS_CHECKER_MESSAGE', 'Sıralanan sorunları giderdikten sonra Manul\'u tekrar çalıştırın.');
}

// Lang: uk
if ($current_lang == "uk") {
define('PS_SCANNING_FILE', 'Скануємо');
define('PS_SCANNING_OF', 'із');
define('PS_SEND_REPORT_BUTTON', 'Надіслати звіт');
define('PS_ERR_NO_TEMP_FOLDER', 'Неможливо створити тимчасові файли, оскільки тимчасовий каталог і поточний каталог скрипту недоступні для запису.');
define('PS_ERR_UPLOADING_XML', 'Помилка завантаження XML-файлу. Перевірте ваші налаштування php (upload_max_filesize)');
define('PS_ERR_BROKEN_XML', 'XML-звіт пошкоджено');
define('PS_ERR_ARCHIVE_OPENING', 'Помилка відкриття архіву');
define('PS_ERR_ARCHIVE_CREATION', 'Помилка створення архіву: %s');
define('PS_ERR_WRONG_ARCHIVE_MODE', 'Недопустимий режим архіву. Можливі: r,w,a');
define('PS_ERR_ARCHIVE_WRITE_INCORRECT_MODE', 'Помилка запису. Архів було відкрито для читання');
define('PS_ERR_NO_SUCH_FILE', 'Немає такого файлу.');
define('PS_ERR_TEMPLATE_DOESNT_EXISTS', 'Шаблон %s не знайдено.');
define('PS_ERR_XML_VALIDATION_FAILED', 'У функції DOMDocument::schemaValidate() виникла помилка!');
define('PS_ERR_XML_VALIDATION_WARNING', 'Попередження %s');
define('PS_ERR_XML_VALIDATION_ERROR', 'Помилка %s');
define('PS_ERR_XML_VALIDATION_FATAL_ERROR', 'Критична помилка %s');
define('PS_ERR_XML_FILE_SPEC', 'в %s');
define('PS_ERR_XML_LINE_SPEC', 'у рядку %d');
define('PS_ERR_UNPACK_ARCHIVE', 'Помилка відкриття архіву');
define('PS_ERR_BROKEN_XML_FILE', 'xml-файл пошкоджено');
define('PS_ERR_EXCEPTION_OCCURED', 'Виник exception:');
define('PS_ERR_QUARANTINE_NOT_EXISTS', 'Помилка розміщення в карантин: файл [%s] не існує');
define('PS_ERR_DELETE_NOT_EXISTS', 'Помилка видалення файлу: файл [%s] не існує');
define('PS_ERR_MALWARE_DB_BROKEN', 'malware_db.xml пошкоджено');
define('PS_WAS_DELETED', 'Файл [%s] видалено');
define('PS_WAS_QUARANTINED', 'Файл [%s] поміщено в карантин');
define('PS_ENTER_PASSWORD', 'Введіть пароль');
define('PS_DELETE_ARCHIVE', 'Архів уже існує. Видаляємо %s');
define('PS_PASS_OK', 'OK');
define('PS_CHOOSE_STRONG_PASS', 'Придумайте складний пароль для доступу до скриптів');
define('PS_ERR_SHORT_PASSWORD', 'Помилка. Пароль занадто короткий.');
define('PS_ERR_WEAK_PASSWORD', 'Помилка. Пароль має складатися із трьох груп символів: великих, маленьких літер, цифр і спецсимволів.');
define('PS_ERR_INVALID_PASSWORD', 'Помилка. Неправильний пароль. Для скидання видаліть config.php у каталозі /tmp/.');
define('PS_ERR_NO_QUARANTINE_FILE', 'Файл карантину не знайдено. Будь ласка, виконайте «Лікування» ще раз.');
define('PS_ERR_NO_DOWNLOAD_LOG_FILE', 'Файл xml log не знайдено. Будь ласка, виконайте сканування ще раз.');
define('PS_RECIPE_FILENAME', 'Ім\'я файлу');
define('PS_RECIPE_ACTION', 'Дія');
define('PS_RECIPE_ACTION_DEL', 'Видалити');
define('PS_RECIPE_ACTION_QUARANTINE', 'У карантин');
define('PS_SIGN_IN', 'Вхід');
define('PS_PASSWORD', 'Пароль');
define('PS_OK', 'OK');
define('PS_TITLE_SCANNER', 'Сканер');
define('PS_TITLE_EXECUTOR', 'Лікування');
define('PS_HELP', 'Допомога');
define('PS_MAIN_TITLE', 'Manul');
define('PS_INSERT_RECIPE', 'Вставте припис:');
define('PS_CHECK_RECIPE', 'Дії буде застосовано лише до вибраних файлів:');
define('PS_EXECUTE', 'Виконати');
define('PS_RESULT', 'Журнал операцій');
define('PS_EXECUTED_RESULT', 'Результат виконання припису:');
define('PS_DOWNLOAD_QUARANTINE', 'Завантажити архів із файлами в карантині');
define('PS_DOWNLOAD_LOG', 'Завантажити архів зі звітом');
define('PS_PRETEXT', 'Давайте знайдемо шкідливий код!');
define('PS_PROGRESS', 'Хід виконання:');
define('PS_TOTAL_PROGRESS', 'Усього знайдено %d файлів');
define('PS_BODYTEXT', 'Щоб почати перевірку сайту, натисніть кнопку «Почати перевірку». Після закінчення сканування програма запропонує завантажити файл звіту, який можна проаналізувати самостійно або надіслати на аналіз фахівцю.');
define('PS_INTERVAL', 'Інтервал запитів:');
define('PS_SEC', 'с');
define('PS_SCAN_LABEL', 'Шукати шкідливий код:');
define('PS_SETTINGS', 'Налаштування');
define('PS_FURTHER_INSTRUCTIONS', 'Тепер ви можете завантажити звіт і передати його на аналіз вірусному аналітику.');
define('PS_START_SCAN', 'Почати сканування');
define('PS_ERR_DUMMY_FOLDER', 'Ім\'я каталогу, де розміщено Манул, повинно бути унікальним і складатися як мінімум із 5 символів. Наприклад «manul_%s». Перейменуйте поточний каталог «%s».');
define('PS_ERR_CANNOT_CREATE_FILE', 'Помилка під час створення файлу %s. Текст помилки: %s');
define('PS_OLD_PHP', 'Для роботи потрібен PHP версії 5.2.0 або вище.');
define('PS_NO_ZIP_MODULE', 'Для роботи потрібен PHP-модуль zip.');
define('PS_NO_DOMDOCUMENT_MODULE', 'Для роботи потрібен PHP-модуль dom.');
define('PS_ERR_NO_FILES_IN_WEB_ROOT', 'Немає файлів для перевірки в кореневому каталозі веб-сайту.');
define('PT_STR_DONE', 'Готово!');
define('PT_STR_ERR_OCCURED', 'Помилка!');
define('PT_STR_BUTTON_CANCEL', 'Скасувати сканування');
define('PT_STR_SEARCH_AGAIN_BUTTON', 'Сканувати знову');
define('PT_STR_NO_ERROR_FOUND', 'Помилок не виявлено');
define('PT_STR_NO_XML_SUPPORT', 'Ваш браузер не підтримує перевірку XML');
define('PT_STR_INVALID_XML', 'XML-припис помилковий');
define('PT_STR_DELETE_APPROVAL', 'Деякі з ваших файлів буде видалено. Підтверджуєте?');
define('PS_DELETE_TOOL_BUTTON_TITLE', 'Видалити Manul');
define('PS_CHECKER_TITLE', 'Перевірка конфігурації сервера');
define('PS_CHECKER_PASSED', 'Так');
define('PS_CHECKER_FAILED', 'Ні');
define('PS_CHECKER_PHPVERSION', 'Версія PHP >= 5.2');
define('PS_CHECKER_ZIP', 'Встановлено модуль php Zip');
define('PS_CHECKER_DOM', 'Встановлено модуль php XML DOM');
define('PS_CHECKER_PERM', 'Каталог temp доступний для запису');
define('PS_CHECKER_FIX', 'Як виправити');
define('PS_CHECKER_MESSAGE', 'Будь ласка, виправте зазначені проблеми та перезапустіть Manul.');
}

