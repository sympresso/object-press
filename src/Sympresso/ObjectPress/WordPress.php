<?php

namespace Sympresso\ObjectPress;

use Sympresso\ObjectPress\CoreExtension\ActionFunctions;
use Sympresso\ObjectPress\CoreExtension\AdminFunctions;
use Sympresso\ObjectPress\CoreExtension\AssetFunctions;
use Sympresso\ObjectPress\CoreExtension\BookmarkFunctions;
use Sympresso\ObjectPress\CoreExtension\CacheFunctions;
use Sympresso\ObjectPress\CoreExtension\CategoryFunctions;
use Sympresso\ObjectPress\CoreExtension\CommentFunctions;
use Sympresso\ObjectPress\CoreExtension\ConditionalFunctions;
use Sympresso\ObjectPress\CoreExtension\CookieFunctions;
use Sympresso\ObjectPress\CoreExtension\CronFunctions;
use Sympresso\ObjectPress\CoreExtension\DateTimeFunctions;
use Sympresso\ObjectPress\CoreExtension\EmbedFunctions;
use Sympresso\ObjectPress\CoreExtension\EnclosureFunctions;
use Sympresso\ObjectPress\CoreExtension\FeedFunctions;
use Sympresso\ObjectPress\CoreExtension\FileFunctions;
use Sympresso\ObjectPress\CoreExtension\FilterFunctions;
use Sympresso\ObjectPress\CoreExtension\FormattingFunctions;
use Sympresso\ObjectPress\CoreExtension\FormFunctions;
use Sympresso\ObjectPress\CoreExtension\HttpFunctions;
use Sympresso\ObjectPress\CoreExtension\HttpHeaderFunctions;
use Sympresso\ObjectPress\CoreExtension\JsonFunctions;
use Sympresso\ObjectPress\CoreExtension\LanguageFunctions;
use Sympresso\ObjectPress\CoreExtension\MailFunctions;
use Sympresso\ObjectPress\CoreExtension\MediaFunctions;
use Sympresso\ObjectPress\CoreExtension\MetaFunctions;
use Sympresso\ObjectPress\CoreExtension\MiscFunctions;
use Sympresso\ObjectPress\CoreExtension\MultisiteFunctions;
use Sympresso\ObjectPress\CoreExtension\NavFunctions;
use Sympresso\ObjectPress\CoreExtension\OptionFunctions;
use Sympresso\ObjectPress\CoreExtension\PageFunctions;
use Sympresso\ObjectPress\CoreExtension\PingFunctions;
use Sympresso\ObjectPress\CoreExtension\PluginFunctions;
use Sympresso\ObjectPress\CoreExtension\PostFunctions;
use Sympresso\ObjectPress\CoreExtension\PostTypeFunctions;
use Sympresso\ObjectPress\CoreExtension\QueryFunctions;
use Sympresso\ObjectPress\CoreExtension\RedirectFunctions;
use Sympresso\ObjectPress\CoreExtension\SecurityFunctions;
use Sympresso\ObjectPress\CoreExtension\SerializationFunctions;
use Sympresso\ObjectPress\CoreExtension\SettingFunctions;
use Sympresso\ObjectPress\CoreExtension\ShortcodeFunctions;
use Sympresso\ObjectPress\CoreExtension\SidebarFunctions;
use Sympresso\ObjectPress\CoreExtension\SqlFunctions;
use Sympresso\ObjectPress\CoreExtension\TagFunctions;
use Sympresso\ObjectPress\CoreExtension\TaxFunctions;
use Sympresso\ObjectPress\CoreExtension\TemplateFunctions;
use Sympresso\ObjectPress\CoreExtension\TermFunctions;
use Sympresso\ObjectPress\CoreExtension\ThemeFunctions;
use Sympresso\ObjectPress\CoreExtension\TracebackFunctions;
use Sympresso\ObjectPress\CoreExtension\TransientFunctions;
use Sympresso\ObjectPress\CoreExtension\UrlFunctions;
use Sympresso\ObjectPress\CoreExtension\UserFunctions;
use Sympresso\ObjectPress\CoreExtension\WidgetFunctions;
use Sympresso\ObjectPress\CoreExtension\XmlrpcFunctions;

class WordPress
{

    /**
     * @var array
     */
    protected $wpFunctions = array();

    /**
     * @var Globals
     */
    protected $wpGlobals;

    /**
     * @var array
     */
    protected $wpExtensions = array();

    /**
     * WordPress constructor.
     * @param array $extensions
     */
    public function __construct(array $extensions = array())
    {
        $this->wpGlobals   = new Globals();
        $defaultExtensions = array(
            ActionFunctions::FUNCTION_NAMESPACE        => new ActionFunctions(),
            AdminFunctions::FUNCTION_NAMESPACE         => new AdminFunctions(),
            AssetFunctions::FUNCTION_NAMESPACE         => new AssetFunctions(),
            BookmarkFunctions::FUNCTION_NAMESPACE      => new BookmarkFunctions(),
            CacheFunctions::FUNCTION_NAMESPACE         => new CacheFunctions(),
            CategoryFunctions::FUNCTION_NAMESPACE      => new CategoryFunctions(),
            CommentFunctions::FUNCTION_NAMESPACE       => new CommentFunctions(),
            ConditionalFunctions::FUNCTION_NAMESPACE   => new ConditionalFunctions(),
            CookieFunctions::FUNCTION_NAMESPACE        => new CookieFunctions(),
            CronFunctions::FUNCTION_NAMESPACE          => new CronFunctions(),
            DateTimeFunctions::FUNCTION_NAMESPACE      => new DateTimeFunctions(),
            EmbedFunctions::FUNCTION_NAMESPACE         => new EmbedFunctions(),
            EnclosureFunctions::FUNCTION_NAMESPACE     => new EnclosureFunctions(),
            FeedFunctions::FUNCTION_NAMESPACE          => new FeedFunctions(),
            FileFunctions::FUNCTION_NAMESPACE          => new FileFunctions(),
            FilterFunctions::FUNCTION_NAMESPACE        => new FilterFunctions(),
            FormattingFunctions::FUNCTION_NAMESPACE    => new FormattingFunctions(),
            FormFunctions::FUNCTION_NAMESPACE          => new FormFunctions(),
            HttpFunctions::FUNCTION_NAMESPACE          => new HttpFunctions(),
            HttpHeaderFunctions::FUNCTION_NAMESPACE    => new HttpHeaderFunctions(),
            JsonFunctions::FUNCTION_NAMESPACE          => new JsonFunctions(),
            LanguageFunctions::FUNCTION_NAMESPACE      => new LanguageFunctions(),
            MailFunctions::FUNCTION_NAMESPACE          => new MailFunctions(),
            MediaFunctions::FUNCTION_NAMESPACE         => new MediaFunctions(),
            MetaFunctions::FUNCTION_NAMESPACE          => new MetaFunctions(),
            MiscFunctions::FUNCTION_NAMESPACE          => new MiscFunctions(),
            NavFunctions::FUNCTION_NAMESPACE           => new NavFunctions(),
            MultisiteFunctions::FUNCTION_NAMESPACE     => new MultisiteFunctions(),
            OptionFunctions::FUNCTION_NAMESPACE        => new OptionFunctions(),
            PageFunctions::FUNCTION_NAMESPACE          => new PageFunctions(),
            PingFunctions::FUNCTION_NAMESPACE          => new PingFunctions(),
            PluginFunctions::FUNCTION_NAMESPACE        => new PluginFunctions(),
            PostFunctions::FUNCTION_NAMESPACE          => new PostFunctions(),
            PostTypeFunctions::FUNCTION_NAMESPACE      => new PostTypeFunctions(),
            QueryFunctions::FUNCTION_NAMESPACE         => new QueryFunctions(),
            RedirectFunctions::FUNCTION_NAMESPACE      => new RedirectFunctions(),
            SecurityFunctions::FUNCTION_NAMESPACE      => new SecurityFunctions(),
            SerializationFunctions::FUNCTION_NAMESPACE => new SerializationFunctions(),
            SettingFunctions::FUNCTION_NAMESPACE       => new SettingFunctions(),
            ShortcodeFunctions::FUNCTION_NAMESPACE     => new ShortcodeFunctions(),
            SidebarFunctions::FUNCTION_NAMESPACE       => new SidebarFunctions(),
            SqlFunctions::FUNCTION_NAMESPACE           => new SqlFunctions(),
            TagFunctions::FUNCTION_NAMESPACE           => new TagFunctions(),
            TaxFunctions::FUNCTION_NAMESPACE           => new TaxFunctions(),
            TemplateFunctions::FUNCTION_NAMESPACE      => new TemplateFunctions(),
            TermFunctions::FUNCTION_NAMESPACE          => new TermFunctions(),
            ThemeFunctions::FUNCTION_NAMESPACE         => new ThemeFunctions(),
            TracebackFunctions::FUNCTION_NAMESPACE     => new TracebackFunctions(),
            TransientFunctions::FUNCTION_NAMESPACE     => new TransientFunctions(),
            UrlFunctions::FUNCTION_NAMESPACE           => new UrlFunctions(),
            UserFunctions::FUNCTION_NAMESPACE          => new UserFunctions(),
            WidgetFunctions::FUNCTION_NAMESPACE        => new WidgetFunctions(),
            XmlrpcFunctions::FUNCTION_NAMESPACE        => new XmlrpcFunctions(),
        );

        $extensions = array_merge($defaultExtensions, $extensions);

        foreach ($extensions as $extension) {
            $this->addExtension($extension);
        }
    }


    /**
     * @param Extension $extension
     */
    public function addExtension(Extension $extension)
    {
        $this->wpExtensions[$extension->__getNamespace()] = $extension;

        $functions         = get_class_methods($extension);
        $excludedFunctions = $extension->__getExcludedFunctions();

        foreach ($functions as $function) {
            if (!in_array($function, $excludedFunctions)) {
                $this->wpFunctions[$function] = $extension;
            }
        }
        $this->wpGlobals->addGlobals($extension->__getGlobalVariables());
    }

    /**
     * Magic Method to Call WordPress Functions
     * @param $name
     * @param array $arguments
     */
    public function __call($name, array $arguments)
    {
        if (isset($this->wpFunctions[$name])) {
            call_user_func_array(array($this->wpFunctions[$name], $name), $arguments);
        }
    }

    /**
     * Get Namespaced Provider
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        if (isset($this->wpExtensions[$name])) {
            return $this->wpExtensions[$name];
        }
    }

    /**
     * Action Functions
     * @return ActionFunctions
     */
    public function action()
    {
        return $this->wpExtensions[ActionFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Admin Functions
     * @return AdminFunctions
     */
    public function admin()
    {
        return $this->wpExtensions[AdminFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Asset Functions
     * @return AssetFunctions
     */
    public function asset()
    {
        return $this->wpExtensions[AssetFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Cache Functions
     * @return CacheFunctions
     */
    public function cache()
    {
        return $this->wpExtensions[CacheFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Category Functions
     * @return CategoryFunctions
     */
    public function cat()
    {
        return $this->wpExtensions[CategoryFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Comment Functions
     * @return CommentFunctions
     */
    public function comment()
    {
        return $this->wpExtensions[CommentFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Conditional Functions
     * @return ConditionalFunctions
     */
    public function cond()
    {
        return $this->wpExtensions[ConditionalFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Cookie Functions
     * @return CookieFunctions
     */
    public function cookie()
    {
        return $this->wpExtensions[CookieFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * @return CronFunctions
     */
    public function cron()
    {
        return $this->wpExtensions[CronFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Date/Time Functions
     * @return DateTimeFunctions
     */
    public function date_time()
    {
        return $this->wpExtensions[DateTimeFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Embed Functions
     * @return EmbedFunctions
     */
    public function embed()
    {
        return $this->wpExtensions[EmbedFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Enclosure Functions
     * @return EnclosureFunctions
     */
    public function enclosure()
    {
        return $this->wpExtensions[EnclosureFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Feed Functions
     * @return FeedFunctions
     */
    public function feed()
    {
        return $this->wpExtensions[FeedFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * File Functions
     * @return FileFunctions
     */
    public function file()
    {
        return $this->wpExtensions[FileFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Filter Functions
     * @return FilterFunctions
     */
    public function filter()
    {
        return $this->wpExtensions[FilterFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Formatting Functions
     * @return ConditionalFunctions
     */
    public function formatting()
    {
        return $this->wpExtensions[FormattingFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Form Functions
     * @return FormFunctions
     */
    public function form()
    {
        return $this->wpExtensions[FormFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Http Functions
     * @return HttpFunctions
     */
    public function http()
    {
        return $this->wpExtensions[HttpFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Http Header Functions
     * @return HttpHeaderFunctions
     */
    public function http_header()
    {
        return $this->wpExtensions[HttpHeaderFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * JSON Functions
     * @return JsonFunctions
     */
    public function json()
    {
        return $this->wpExtensions[JsonFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Language Functions
     * @return LanguageFunctions
     */
    public function lang()
    {
        return $this->wpExtensions[LanguageFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Mail Functions
     * @return MailFunctions
     */
    public function mail()
    {
        return $this->wpExtensions[MailFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Media Functions
     * @return MediaFunctions
     */
    public function media()
    {
        return $this->wpExtensions[MediaFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Meta Functions
     * @return MetaFunctions
     */
    public function meta()
    {
        return $this->wpExtensions[MetaFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Misc Functions
     * @return MiscFunctions
     */
    public function misc()
    {
        return $this->wpExtensions[MiscFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Multisite Functions
     * @return MultisiteFunctions
     */
    public function multisite()
    {
        return $this->wpExtensions[MultisiteFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Nav Functions
     * @return NavFunctions
     */
    public function nav()
    {
        return $this->wpExtensions[NavFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Option Functions
     * @return OptionFunctions
     */
    public function option()
    {
        return $this->wpExtensions[OptionFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Page Functions
     * @return PageFunctions
     */
    public function page()
    {
        return $this->wpExtensions[PageFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Ping Functions
     * @return PingFunctions
     */
    public function ping()
    {
        return $this->wpExtensions[PingFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Plugin Functions
     * @return PluginFunctions
     */
    public function plugin()
    {
        return $this->wpExtensions[PluginFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Post Functions
     * @return PostFunctions
     */
    public function post()
    {
        return $this->wpExtensions[PostFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * PostType Functions
     * @return PostTypeFunctions
     */
    public function post_type()
    {
        return $this->wpExtensions[PostTypeFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Query Functions
     * @return QueryFunctions
     */
    public function query()
    {
        return $this->wpExtensions[QueryFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Redirect Functions
     * @return RedirectFunctions
     */
    public function redirect()
    {
        return $this->wpExtensions[RedirectFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Security Functions
     * @return SecurityFunctions
     */
    public function security()
    {
        return $this->wpExtensions[SecurityFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Serialization Functions
     * @return SerializationFunctions
     */
    public function serialization()
    {
        return $this->wpExtensions[SerializationFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Settings Functions
     * @return SerializationFunctions
     */
    public function setting()
    {
        return $this->wpExtensions[SettingFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Shortcode Functions
     * @return ShortcodeFunctions
     */
    public function shortcode()
    {
        return $this->wpExtensions[ShortcodeFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Sidebar Functions
     * @return SidebarFunctions
     */
    public function sidebar()
    {
        return $this->wpExtensions[SidebarFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * SQL Functions
     * @return SqlFunctions
     */
    public function sql()
    {
        return $this->wpExtensions[SqlFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Tag Functions
     * @return TagFunctions
     */
    public function tag()
    {
        return $this->wpExtensions[TagFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Tax Functions
     * @return TaxFunctions
     */
    public function tax()
    {
        return $this->wpExtensions[TaxFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Template Functions
     * @return TemplateFunctions
     */
    public function template()
    {
        return $this->wpExtensions[TemplateFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Term Functions
     * @return TermFunctions
     */
    public function term()
    {
        return $this->wpExtensions[TermFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Theme Functions
     * @return ThemeFunctions
     */
    public function theme()
    {
        return $this->wpExtensions[ThemeFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Traceback Functions
     * @return TracebackFunctions
     */
    public function traceback()
    {
        return $this->wpExtensions[TracebackFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Transient Functions
     * @return TransientFunctions
     */
    public function transient()
    {
        return $this->wpExtensions[TransientFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Url Functions
     * @return UrlFunctions
     */
    public function url()
    {
        return $this->wpExtensions[UrlFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * User Functions
     * @return UserFunctions
     */
    public function user()
    {
        return $this->wpExtensions[UserFunctions::FUNCTION_NAMESPACE];
    }
}