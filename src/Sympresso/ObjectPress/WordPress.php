<?php

namespace Sympresso\ObjectPress;

use Sympresso\ObjectPress\Extension\ActionFunctions;
use Sympresso\ObjectPress\Extension\AdminFunctions;
use Sympresso\ObjectPress\Extension\AssetFunctions;
use Sympresso\ObjectPress\Extension\BookmarkFunctions;
use Sympresso\ObjectPress\Extension\CacheFunctions;
use Sympresso\ObjectPress\Extension\CategoryFunctions;
use Sympresso\ObjectPress\Extension\CommentFunctions;
use Sympresso\ObjectPress\Extension\ConditionalFunctions;
use Sympresso\ObjectPress\Extension\CookieFunctions;
use Sympresso\ObjectPress\Extension\CronFunctions;
use Sympresso\ObjectPress\Extension\DateTimeFunctions;
use Sympresso\ObjectPress\Extension\EmbedFunctions;
use Sympresso\ObjectPress\Extension\EnclosureFunctions;
use Sympresso\ObjectPress\Extension\FeedFunctions;
use Sympresso\ObjectPress\Extension\FileFunctions;
use Sympresso\ObjectPress\Extension\FilterFunctions;
use Sympresso\ObjectPress\Extension\FormattingFunctions;
use Sympresso\ObjectPress\Extension\FormFunctions;
use Sympresso\ObjectPress\Extension\HttpFunctions;
use Sympresso\ObjectPress\Extension\HttpHeaderFunctions;
use Sympresso\ObjectPress\Extension\JsonFunctions;
use Sympresso\ObjectPress\Extension\LanguageFunctions;
use Sympresso\ObjectPress\Extension\MailFunctions;
use Sympresso\ObjectPress\Extension\MediaFunctions;
use Sympresso\ObjectPress\Extension\MetaFunctions;
use Sympresso\ObjectPress\Extension\MiscFunctions;
use Sympresso\ObjectPress\Extension\MultisiteFunctions;
use Sympresso\ObjectPress\Extension\NavFunctions;
use Sympresso\ObjectPress\Extension\OptionFunctions;
use Sympresso\ObjectPress\Extension\PageFunctions;
use Sympresso\ObjectPress\Extension\PingFunctions;
use Sympresso\ObjectPress\Extension\PluginFunctions;
use Sympresso\ObjectPress\Extension\PostFunctions;
use Sympresso\ObjectPress\Extension\PostTypeFunctions;
use Sympresso\ObjectPress\Extension\QueryFunctions;
use Sympresso\ObjectPress\Extension\RedirectFunctions;
use Sympresso\ObjectPress\Extension\SecurityFunctions;
use Sympresso\ObjectPress\Extension\SerializationFunctions;
use Sympresso\ObjectPress\Extension\SettingFunctions;
use Sympresso\ObjectPress\Extension\ShortcodeFunctions;
use Sympresso\ObjectPress\Extension\SidebarFunctions;
use Sympresso\ObjectPress\Extension\SqlFunctions;
use Sympresso\ObjectPress\Extension\TagFunctions;
use Sympresso\ObjectPress\Extension\TaxFunctions;
use Sympresso\ObjectPress\Extension\TemplateFunctions;
use Sympresso\ObjectPress\Extension\TermFunctions;
use Sympresso\ObjectPress\Extension\ThemeFunctions;
use Sympresso\ObjectPress\Extension\TracebackFunctions;
use Sympresso\ObjectPress\Extension\TransientFunctions;
use Sympresso\ObjectPress\Extension\UrlFunctions;
use Sympresso\ObjectPress\Extension\UserFunctions;
use Sympresso\ObjectPress\Extension\WidgetFunctions;
use Sympresso\ObjectPress\Extension\WpExtension;
use Sympresso\ObjectPress\Extension\WpGlobals;
use Sympresso\ObjectPress\Extension\XmlrpcFunctions;

class WordPress
{

    /**
     * @var array
     */
    protected $wpFunctions = array();

    /**
     * @var WpGlobals
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
        $this->wpGlobals   = new WpGlobals();
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
     * @param WpExtension $extension
     */
    public function addExtension(WpExtension $extension)
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