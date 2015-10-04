<?php

return [
    'cms_object' => [
        'invalid_file' => 'نام :name برای فایل نام معتبر است. نام فایل میتواند شامل کاراکتر انگلیسی ، خط تیره و نقطه باشد. بعنوان مثال page.htm، page و subdirectory/page',
        'invalid_property' => 'عدم توانایی در تغییر خاصیت ":name"',
        'file_already_exists' => 'فایلی با نام ":name" موجود است.',
        'error_saving' => 'خطا در ذخیره فایل ":name". لطفا حق دسترسی ها را بررسی نمایید.',
        'error_creating_directory' => 'خطا در ایجاد پوشه ی :name. لطفا حق دسترسی ها را بررسی نمایید.',
        'invalid_file_extension'=>'پسوند :invalid برای فایل نا معتبر است. پسوند های معتبر عبارتند از: :allowed.',
        'error_deleting' => 'خطا در خذف فایل ":name". لطفا حق دسترسی ها را بررسی نمایید.',
        'delete_success' => 'تعداد :count فایل با موفقیت حذف شد.',
        'file_name_required' => 'نام فایل را وارد نمایید.'
    ],
    'theme' => [
        'not_found_name' => "یافت ن قالبی با نام  ':name یافت نشد.'",
        'active' => [
            'not_set' => "قالب فعال مشخص نشده است.",
            'not_found' => "قالب فعال یافت نشد.",
        ],
        'edit' => [
            'not_set' => "قالب ویرایش مشخص نشده ایت.",
            'not_found' => "قالب ویرایش یافت نشد.",
            'not_match' => "شی مورد نظر شما در قالبی که ویرایش می کنید یافت نشد. لطفا صفحه را مجددا بارگذاری نمایید."
        ],
        'settings_menu' => 'قالب نمایشی',
        'settings_menu_description' => 'پیش نمایش قالب های موجود و انتخاب قالب فعال.',
        'default_tab' => 'خصوصیات',
        'name_label' => 'نام',
        'name_create_placeholder' => 'نام قالب جدید',
        'author_label' => 'تهیه کننده',
        'author_placeholder' => 'نام شخص یا شرکت',
        'description_label' => 'توضیحات',
        'description_placeholder' => 'توضیحات قالب',
        'homepage_label' => 'آدرس سایت',
        'homepage_placeholder' => 'آدرس سایت مربوط به قالب',
        'code_label' => 'کد',
        'code_placeholder' => 'کد یکتای قالبی که میخواهید ایجاد نمایید',
        'dir_name_label' => 'نام پوشه',
        'dir_name_create_label' => 'نام پوشه قالب در دست تهیه',
        'theme_label' => 'قالب',
        'theme_title' => 'قالب ها',
        'activate_button' => 'فعال کردن',
        'active_button' => 'فعال',
        'customize_theme' => 'شخصی سازی قالب',
        'customize_button' => 'شخصی سازی',
        'duplicate_button' => 'ایجاد کپی',
        'duplicate_title' => 'ایجاد یک کپی از قالب',
        'duplicate_theme_success' => 'عملیات ایجاد کپی از قالب با موفقیت انجام شد.',
        'manage_button' => 'مدیریت',
        'manage_title' => 'مدیریت قالب',
        'edit_properties_title' => 'قالب',
        'edit_properties_button' => 'ویرایش مشخصه ها',
        'save_properties' => 'ذخیره مشخصه ها',
        'import_button' => 'وارد کردن',
        'import_title' => 'وارد کردن قالب',
        'import_theme_success' => 'عملیات وارد کردن قالب با موفقیت انجام شد',
        'import_uploaded_file' => 'فایل قالب',
        'import_overwrite_label' => 'جایگذینی فایلها در صورت موجود بودن آنها',
        'import_overwrite_comment' => 'اگر میخواهید فقط فایل های جدید وارد شوند این گزینه را غیر فعال کنید.',
        'import_folders_label' => 'پوشه ها',
        'import_folders_comment' => 'لطفا پوشه قالب هایی را که میخواهید وارد کنید را انتخاب نمایید',
        'export_button' => 'صادر کردن',
        'export_title' => 'صادر کردن قالب',
        'export_folders_label' => 'پوشه ها',
        'export_folders_comment' => 'لطفا پوشه هایی را که میخواهید از قالب صادر کنید را انتخاب نمایید',
        'delete_button' => 'حذف',
        'delete_confirm' => 'آیا از حذف این قالب اطمینان دارید؟ ان کار غیر قابل بازگشت می باشد.',
        'delete_active_theme_failed' => 'شما نمیتوانید قالب فعال را حذف کنید. جهت حذف آن یک قالب دیگر را فعال کنید.',
        'delete_theme_success' => 'حذف قالب موفقیت آمیز بود',
        'create_title' => 'ایجاد قالب',
        'create_button' => 'ایجاد',
        'create_new_blank_theme' => 'ایجاد یک قالب جدید خالی',
        'create_theme_success' => 'قالب با موفقیت ایجاد شد.',
        'create_theme_required_name' => 'لطفا نام قالب را وارد نمایید.',
        'new_directory_name_label' => 'پوشه قالب',
        'new_directory_name_comment' => 'نام پوشه قالب جدید را جهت کپی کردن وارد نمایید.',
        'dir_name_invalid' => 'نام میتواند شامل اعداد ، حروف انگلیسی و این کاراکتر ها باشد: _-',
        'dir_name_taken' => 'نام پوشه وارد شده موجود است.',
        'find_more_themes' => 'نصب قالب های جدید',
        'saving' => 'درحال ذخیره سازی قالب',
        'return' => 'بازگشت به صفحه لیست قالب ها',
    ],
    'maintenance' => [
        'settings_menu' => 'حالت تعمیرات',
        'settings_menu_description' => 'تنظیم کردن صفحه مربوط به تعمیرات و تغییر تنظیمات این حالت.',
        'is_enabled' => 'فعال سازی حالت تعمیرات',
        'is_enabled_comment' => 'اگر فعال شود کاربران به این صفحه هدایت خواهند شد.'
    ],
    'page' => [
        'not_found_name' => "صفحه ای با نام ':name' یافت نشد",
        'not_found' => [
            'label' => "صفحه مورد نظر یافت نشد",
            'help' => 'متاسفانه صفحه ای که شما درخواست کرده اید یافت نشد',
        ],
        'custom_error' => [
            'label' => "خطای صفحه",
            'help' => "متاسفانه مشکلی در نمایش صفحه مورد نظر به وجود آمده است.",
        ],
        'menu_label' => 'صفحات',
        'unsaved_label' => 'صفحه(های) ذخیره نشده',
        'no_list_records' => 'صفحه ای یافت نشد',
        'new' => 'New page',
        'invalid_url' => 'قالب آدرس صحیح نمی باشد. آدرس باید با اسلش شروع شده و می تواند شامل اعداد، حروف لاتین و این کاراکتر ها باشد: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'آیا از حذف صفحات انتخاب شده اطمینان دارید؟',
        'delete_confirm_single' => 'آیا از حذف این صفحه اطمینان دارید؟',
        'no_layout' => '-- بدون طرح بندی --'
    ],
    'layout' => [
        'not_found_name' => "طرح بندی ی ':name' یافت نشد",
        'menu_label' => 'طرح بندی ها',
        'unsaved_label' => 'طرح بندی(های) ذخیره نشده',
        'no_list_records' => 'طرح بندی یافت نشد',
        'new' => 'طرح بندی جدید',
        'delete_confirm_multiple' => 'آیا از حذف طرح بندی های انتخاب شده اطمینان دارید؟',
        'delete_confirm_single' => 'آیا از حذف این طرح بندی اطمینان دارید؟'
    ],
    'partial' => [
        'not_found_name' => "بخشی با نام ':name' یافت نشد.",
        'invalid_name' => "نام بخش نا معتبر است: :name.",
        'menu_label' => 'بخش ها',
        'unsaved_label' => 'بخش(های) ذخیره نشده',
        'no_list_records' => 'بخشی وجود ندارد',
        'delete_confirm_multiple' => 'آیا از حذف بخش های انتخاب شده اطمینان دارید؟',
        'delete_confirm_single' => 'آیا از حذف این بخش بندی اطمینان دارید؟',
        'new' => 'بخش بندی جدید'
    ],
    'content' => [
        'not_found_name' => "فایل محتوای ':name' یافت نشد.",
        'menu_label' => 'محتوا',
        'unsaved_label' => 'محتوای ذخیره نشده',
        'no_list_records' => 'هیچ فایل محتوایی وجود ندارد',
        'delete_confirm_multiple' => 'آیا از حذف فایل ها و یا پوشه های انتخاب شده اطمینان دارید؟',
        'delete_confirm_single' => 'آیا از حذف این فایل اطمینان دارید؟',
        'new' => 'فایل محتوی جدید'
    ],
    'ajax_handler' => [
        'invalid_name' => "نام کنترل کننده آژاکس نا معتبر است: :name.",
        'not_found' => "کنترل کننده آژاکس ':name' یافت نشد.",
    ],
    'cms' => [
        'menu_label' => "مدیریت محتوی"
    ],
    'sidebar' => [
        'add' => 'افزودن',
        'search' => 'جستجو...'
    ],
    'editor' => [
        'settings' => 'تنظیمات',
        'title' => 'عنوان',
        'new_title' => 'عنوان صفحه جدید',
        'url' => 'آدرس',
        'filename' => 'تام فایل',
        'layout' => 'طرح بندی',
        'description' => 'توضیحات',
        'preview' => 'پیش نمایش',
        'meta' => 'متا',
        'meta_title' => 'عنوان متا',
        'meta_description' => 'توضیحات متا',
        'markup' => 'نشانه گذاری',
        'code' => 'کد',
        'content' => 'محتوی',
        'hidden' => 'مخفی',
        'hidden_comment' => 'صفحات مخفی فقط برای کاربران وارد شده به سیستم نمایش داده می شود.',
        'enter_fullscreen' => 'حالت تمام صفحه',
        'exit_fullscreen' => 'خروج از حالت تمام صفحه'
    ],
    'asset' => [
        'menu_label' => "فایلها",
        'unsaved_label' => 'فایل(های) ذخیره نشده',
        'drop_down_add_title' => 'افزودن...',
        'drop_down_operation_title' => 'عملیات...',
        'upload_files' => 'افزودن فایل(ها)',
        'create_file' => 'ایجاد فایل',
        'create_directory' => 'ایجاد پوشه',
        'directory_popup_title' => 'پوشه ی جدید',
        'directory_name' => 'نام پوشه',
        'rename' => 'تغییر نام',
        'delete' => 'حذف',
        'move' => 'جابحایی',
        'select' => 'انتخاب',
        'new' => 'فایل جدید',
        'rename_popup_title' => 'تغییر نام',
        'rename_new_name' => 'نام جدید',
        'invalid_path' => 'مسیر می تواند فقط شلمل اعداد، حروف لاتین، حط فاصلع و این کاراکتر ها باشد: ._-/',
        'error_deleting_file' => 'در حذف فایل :name مشکلی به وجود آمده است.',
        'error_deleting_dir_not_empty' => 'در حذف پوشه ی :name مشکلی به وجود آمده است. پوشه خالی نیست.',
        'error_deleting_dir' => 'خطایی در حذف :name به وجود آمده است.',
        'invalid_name' => 'نام میتوامد شامل اعداد، خروف لاتین، خط فاصله و این کاراکتر ها باشد: ._-',
        'original_not_found' => 'فایل یا پوشه ی اصلی یافت نشد.',
        'already_exists' => 'فایل یا پوشه ای با این نام وجود دارد.',
        'error_renaming' => 'در تغییر نام فایل یا پوشه مورد نظر خطایی رخ داده است',
        'name_cant_be_empty' => 'نام منی تواند خالی باشد',
        'too_large' => 'فایل ارسال شده بیش از حد حجیم اشت. بیشترین حجم مورد قبول :max_size می باشد',
        'type_not_allowed' => 'فقط این نوع فایل ها قابل قبول می باشد: :allowed_types',
        'file_not_valid' => 'فال نا معتبر است',
        'error_uploading_file' => 'خطا در ارسال فال ":name": :error',
        'move_please_select' => 'اطفا انتخاب نمایید',
        'move_destination' => 'پوشه مورد نظر',
        'move_popup_title' => 'جابجایی فایل',
        'move_button' => 'جابجایی',
        'selected_files_not_found' => 'فایل انتخاب شده یافت نشد',
        'select_destination_dir' => 'لطفا پوشه ی مورد نظر را انتخاب نمایید',
        'destination_not_found' => 'پوشه مورد نظر یافت نشد',
        'error_moving_file' => 'خطایی در جابجایی :file رخ داده است',
        'error_moving_directory' => 'خطایی در جابجایی :dir رخ داده است',
        'error_deleting_directory' => 'خطایی در حذف :dir رخ داده است',
        'path' => 'محل قرار گیری'
    ],
    'component' => [
        'menu_label' => "ابرار ها",
        'unnamed' => "بدون نام",
        'no_description' => "توصیحات وجود ندارد",
        'alias' => "نام مستعار",
        'alias_description' => "نام یکتایی که به این ابزار داده می شود تا درون صفحات و طرح بندی ها به این ابزار اشاره کند.",
        'validation_message' => "نام مستعار برای ابزار مورد نیاز بوده و می تواند شامل حروف لاتین، اعداد، و خط زیر باشد و باید با حرف لاتین شروع شود.",
        'invalid_request' => "بدلیل داده ی نا معتبر ابزار امکان ذخیره قالب وجود ندارد.",
        'no_records' => 'ابزاری یافت نشد',
        'not_found' => "ابزار ':name' یافت نشد.",
        'method_not_found' => "ابزار ':name' شامل متدی با نام ':method' نمی باشد.",
    ],
    'template' => [
        'invalid_type' => "نوع قالب معتبر نمی باشد.",
        'not_found' => "قالب درخواست شده یافت نشد.",
        'saved'=> "قالب با موفقیت ذخیره شد."
    ],
    'permissions' => [
        'name' => 'مدیریت محتوی',
        'manage_content' => 'مدیریت محتوی',
        'manage_assets' => 'مدیریت فایلها',
        'manage_pages' => 'مدیریت صفحات',
        'manage_layouts' => 'مدیریت طرح بندی ها',
        'manage_partials' => 'مدیریت بخش ها',
        'manage_themes' => 'مدیریت قالب ها'
    ],
    'media' => [
        'invalid_path' => "آدرس فایل ':path' معتبر نیست.",
        'menu_label' => 'چند رسانه ای',
        'upload' => 'ارسال',
        'move' => 'جابجایی',
        'delete' => 'حذف',
        'add_folder' => 'پوشه جدید',
        'search' => 'جستجو',
        'display' => 'نمایش',
        'filter_everything' => 'همه',
        'filter_images' => 'تصاویر',
        'filter_video' => 'ویدیو',
        'filter_audio' => 'صوتی',
        'filter_documents' => 'اسناد',
        'library' => 'کتاب خانه',
        'folder_size_items' => 'مورد(ها)',
        'size' => 'اندازه',
        'title' => 'عنوان',
        'last_modified' => 'آخرین تغییرات',
        'public_url' => 'آدرس عمومی',
        'click_here' => 'اینجا کلیک کنید',
        'thumbnail_error' => 'خطا در ایجاد تصویر بند انگشنتی',
        'return_to_parent' => 'بازگشت به پوشه قبل',
        'return_to_parent_label' => 'بازکشت ..',
        'nothing_selected' => 'چیزی انتخاب نشده است.',
        'multiple_selected' => 'چند مورد انتخاب شده',
        'uploading_file_num' => 'ارسال :number فایل(ها)...',
        'uploading_complete' => 'ارسال انجام شد',
        'order_by' => 'مرتب سازی با',
        'folder' => 'پوشه',
        'no_files_found' => 'فایلی با درخواست شما یافت نشد',
        'delete_empty' => 'لطفا موارد را جهت حذف انتخاب نمایید',
        'delete_confirm' => 'آیا از حذف مورد(های) انتخاب شده اطمینان دارید؟',
        'error_renaming_file' => 'خطا در تغییر نام.',
        'new_folder_title' => 'پوشه ی جدید',
        'folder_name' => 'نام پوشه',
        'error_creating_folder' => 'خطا در ایجاد پوشه',
        'folder_or_file_exist' => 'پوشه یا فایلی با نام وارد شده از قبل وجود دارد.',
        'move_empty' => 'لطفا موارد را جهت جابجایی انتخاب نمایید',
        'move_popup_title' => 'جابحایی فایل یا پوشه ها',
        'move_destination' => 'پوشه مقصد',
        'please_select_move_dest' => 'لطفا پوشه مقصد را انتخاب تمایید.',
        'move_dest_src_match' => 'لطفا پوشه دیگری را انتخاب نمایید.',
        'empty_library' => 'چیزی یافت نشد.',
        'insert' => 'Insert',
        'crop_and_insert' => 'بریدن و افزودن',
        'select_single_image' => 'لطفا یک تصویر انتخاب نمایید',
        'selection_not_image' => 'مورد انتخاب شده تصویر نمی باشد',
        'restore' => 'حذف همه تغییرات',
        'resize' => 'تغییر اندازه...',
        'selection_mode_normal' => 'معمولی',
        'selection_mode_fixed_ratio' => 'نصبت ثابت',
        'selection_mode_fixed_size' => 'اندازه ثابت',
        'height' => 'ارتفاع',
        'width' => 'عرض',
        'selection_mode' => 'حالت انتخابی',
        'resize_image' => 'تغییر اندازه تصویر',
        'image_size' => 'اندازه تصویر:',
        'selected_size' => 'انتخاب شده:'
    ]
];
