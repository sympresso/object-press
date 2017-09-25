<?php

namespace Sympresso\ObjectPress;

use Sympresso\ObjectPress\CoreExtensions\ActionFunctions;
use Sympresso\ObjectPress\CoreExtensions\AdminFunctions;
use Sympresso\ObjectPress\CoreExtensions\AssetFunctions;
use Sympresso\ObjectPress\CoreExtensions\BookmarkFunctions;
use Sympresso\ObjectPress\CoreExtensions\CacheFunctions;
use Sympresso\ObjectPress\CoreExtensions\CategoryFunctions;
use Sympresso\ObjectPress\CoreExtensions\CommentFunctions;
use Sympresso\ObjectPress\CoreExtensions\ConditionalFunctions;
use Sympresso\ObjectPress\CoreExtensions\CookieFunctions;
use Sympresso\ObjectPress\CoreExtensions\CronFunctions;
use Sympresso\ObjectPress\CoreExtensions\DateTimeFunctions;
use Sympresso\ObjectPress\CoreExtensions\EmbedFunctions;
use Sympresso\ObjectPress\CoreExtensions\EnclosureFunctions;
use Sympresso\ObjectPress\CoreExtensions\FeedFunctions;
use Sympresso\ObjectPress\CoreExtensions\FileFunctions;
use Sympresso\ObjectPress\CoreExtensions\FilterFunctions;
use Sympresso\ObjectPress\CoreExtensions\FormattingFunctions;
use Sympresso\ObjectPress\CoreExtensions\FormFunctions;
use Sympresso\ObjectPress\CoreExtensions\HttpFunctions;
use Sympresso\ObjectPress\CoreExtensions\HttpHeaderFunctions;
use Sympresso\ObjectPress\CoreExtensions\JsonFunctions;
use Sympresso\ObjectPress\CoreExtensions\LanguageFunctions;
use Sympresso\ObjectPress\CoreExtensions\MailFunctions;
use Sympresso\ObjectPress\CoreExtensions\MediaFunctions;
use Sympresso\ObjectPress\CoreExtensions\MetaFunctions;
use Sympresso\ObjectPress\CoreExtensions\MiscFunctions;
use Sympresso\ObjectPress\CoreExtensions\MultisiteFunctions;
use Sympresso\ObjectPress\CoreExtensions\NavFunctions;
use Sympresso\ObjectPress\CoreExtensions\OptionFunctions;
use Sympresso\ObjectPress\CoreExtensions\PageFunctions;
use Sympresso\ObjectPress\CoreExtensions\PingFunctions;
use Sympresso\ObjectPress\CoreExtensions\PluginFunctions;
use Sympresso\ObjectPress\CoreExtensions\PostFunctions;
use Sympresso\ObjectPress\CoreExtensions\PostTypeFunctions;
use Sympresso\ObjectPress\CoreExtensions\QueryFunctions;
use Sympresso\ObjectPress\CoreExtensions\RedirectFunctions;
use Sympresso\ObjectPress\CoreExtensions\SecurityFunctions;
use Sympresso\ObjectPress\CoreExtensions\SerializationFunctions;
use Sympresso\ObjectPress\CoreExtensions\SettingFunctions;
use Sympresso\ObjectPress\CoreExtensions\ShortcodeFunctions;
use Sympresso\ObjectPress\CoreExtensions\SidebarFunctions;
use Sympresso\ObjectPress\CoreExtensions\SqlFunctions;
use Sympresso\ObjectPress\CoreExtensions\TagFunctions;
use Sympresso\ObjectPress\CoreExtensions\TaxFunctions;
use Sympresso\ObjectPress\CoreExtensions\TemplateFunctions;
use Sympresso\ObjectPress\CoreExtensions\TermFunctions;
use Sympresso\ObjectPress\CoreExtensions\ThemeFunctions;
use Sympresso\ObjectPress\CoreExtensions\TracebackFunctions;
use Sympresso\ObjectPress\CoreExtensions\TransientFunctions;
use Sympresso\ObjectPress\CoreExtensions\UrlFunctions;
use Sympresso\ObjectPress\CoreExtensions\UserFunctions;
use Sympresso\ObjectPress\CoreExtensions\WidgetFunctions;
use Sympresso\ObjectPress\CoreExtensions\XmlrpcFunctions;

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
    protected $extensions = array();

    /**
     * WordPress constructor.
     * @param array $overrides
     * @throws \Exception
     */
    public function __construct(array $overrides = array())
    {
        $this->wpGlobals   = new Globals();
        $extensions = array(
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

        foreach($overrides as $item){
            if(!$item instanceof ExtensionInterface){
                throw new \Exception('Invalid extension, it should implement Sympresso\ObjectPress\ExtensionInterface');
            }
            $extensions[$item->getFunctionNamespace()] = $item;
        }

        foreach ($extensions as $extension) {
            $this->addExtension($extension);
        }
    }


    /**
     * @param ExtensionInterface $extension
     */
    public function addExtension(ExtensionInterface $extension)
    {
        $this->extensions[$extension->getFunctionNamespace()] = $extension;

        $functions         = get_class_methods($extension);
        $excludedFunctions = $extension->getExcludedFunctions();

        foreach ($functions as $function) {
            if (!in_array($function, $excludedFunctions)) {
                $this->wpFunctions[$function] = $extension;
            }
        }
        $this->wpGlobals->addGlobals($extension->getGlobalVariables());
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
        if (isset($this->extensions[$name])) {
            return $this->extensions[$name];
        }
    }

    /**
     * Action Functions
     * @return ActionFunctions
     */
    public function action()
    {
        return $this->extensions[ActionFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Admin Functions
     * @return AdminFunctions
     */
    public function admin()
    {
        return $this->extensions[AdminFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Asset Functions
     * @return AssetFunctions
     */
    public function asset()
    {
        return $this->extensions[AssetFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Bookmark Functions
     * @return BookmarkFunctions
     */
    public function bookmark(){
        return $this->extensions[BookmarkFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Cache Functions
     * @return CacheFunctions
     */
    public function cache()
    {
        return $this->extensions[CacheFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Category Functions
     * @return CategoryFunctions
     */
    public function cat()
    {
        return $this->extensions[CategoryFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Comment Functions
     * @return CommentFunctions
     */
    public function comment()
    {
        return $this->extensions[CommentFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Conditional Functions
     * @return ConditionalFunctions
     */
    public function cond()
    {
        return $this->extensions[ConditionalFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Cookie Functions
     * @return CookieFunctions
     */
    public function cookie()
    {
        return $this->extensions[CookieFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * @return CronFunctions
     */
    public function cron()
    {
        return $this->extensions[CronFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Date/Time Functions
     * @return DateTimeFunctions
     */
    public function date_time()
    {
        return $this->extensions[DateTimeFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Embed Functions
     * @return EmbedFunctions
     */
    public function embed()
    {
        return $this->extensions[EmbedFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Enclosure Functions
     * @return EnclosureFunctions
     */
    public function enclosure()
    {
        return $this->extensions[EnclosureFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Feed Functions
     * @return FeedFunctions
     */
    public function feed()
    {
        return $this->extensions[FeedFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * File Functions
     * @return FileFunctions
     */
    public function file()
    {
        return $this->extensions[FileFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Filter Functions
     * @return FilterFunctions
     */
    public function filter()
    {
        return $this->extensions[FilterFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Formatting Functions
     * @return ConditionalFunctions
     */
    public function formatting()
    {
        return $this->extensions[FormattingFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Form Functions
     * @return FormFunctions
     */
    public function form()
    {
        return $this->extensions[FormFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Http Functions
     * @return HttpFunctions
     */
    public function http()
    {
        return $this->extensions[HttpFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Http Header Functions
     * @return HttpHeaderFunctions
     */
    public function http_header()
    {
        return $this->extensions[HttpHeaderFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * JSON Functions
     * @return JsonFunctions
     */
    public function json()
    {
        return $this->extensions[JsonFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Language Functions
     * @return LanguageFunctions
     */
    public function lang()
    {
        return $this->extensions[LanguageFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Mail Functions
     * @return MailFunctions
     */
    public function mail()
    {
        return $this->extensions[MailFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Media Functions
     * @return MediaFunctions
     */
    public function media()
    {
        return $this->extensions[MediaFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Meta Functions
     * @return MetaFunctions
     */
    public function meta()
    {
        return $this->extensions[MetaFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Misc Functions
     * @return MiscFunctions
     */
    public function misc()
    {
        return $this->extensions[MiscFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Multisite Functions
     * @return MultisiteFunctions
     */
    public function multisite()
    {
        return $this->extensions[MultisiteFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Nav Functions
     * @return NavFunctions
     */
    public function nav()
    {
        return $this->extensions[NavFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Option Functions
     * @return OptionFunctions
     */
    public function option()
    {
        return $this->extensions[OptionFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Page Functions
     * @return PageFunctions
     */
    public function page()
    {
        return $this->extensions[PageFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Ping Functions
     * @return PingFunctions
     */
    public function ping()
    {
        return $this->extensions[PingFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Plugin Functions
     * @return PluginFunctions
     */
    public function plugin()
    {
        return $this->extensions[PluginFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Post Functions
     * @return PostFunctions
     */
    public function post()
    {
        return $this->extensions[PostFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * PostType Functions
     * @return PostTypeFunctions
     */
    public function post_type()
    {
        return $this->extensions[PostTypeFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Query Functions
     * @return QueryFunctions
     */
    public function query()
    {
        return $this->extensions[QueryFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Redirect Functions
     * @return RedirectFunctions
     */
    public function redirect()
    {
        return $this->extensions[RedirectFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Security Functions
     * @return SecurityFunctions
     */
    public function security()
    {
        return $this->extensions[SecurityFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Serialization Functions
     * @return SerializationFunctions
     */
    public function serialization()
    {
        return $this->extensions[SerializationFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Settings Functions
     * @return SerializationFunctions
     */
    public function setting()
    {
        return $this->extensions[SettingFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Shortcode Functions
     * @return ShortcodeFunctions
     */
    public function shortcode()
    {
        return $this->extensions[ShortcodeFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Sidebar Functions
     * @return SidebarFunctions
     */
    public function sidebar()
    {
        return $this->extensions[SidebarFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * SQL Functions
     * @return SqlFunctions
     */
    public function sql()
    {
        return $this->extensions[SqlFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Tag Functions
     * @return TagFunctions
     */
    public function tag()
    {
        return $this->extensions[TagFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Tax Functions
     * @return TaxFunctions
     */
    public function tax()
    {
        return $this->extensions[TaxFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Template Functions
     * @return TemplateFunctions
     */
    public function template()
    {
        return $this->extensions[TemplateFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Term Functions
     * @return TermFunctions
     */
    public function term()
    {
        return $this->extensions[TermFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Theme Functions
     * @return ThemeFunctions
     */
    public function theme()
    {
        return $this->extensions[ThemeFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Traceback Functions
     * @return TracebackFunctions
     */
    public function traceback()
    {
        return $this->extensions[TracebackFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Transient Functions
     * @return TransientFunctions
     */
    public function transient()
    {
        return $this->extensions[TransientFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Url Functions
     * @return UrlFunctions
     */
    public function url()
    {
        return $this->extensions[UrlFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * User Functions
     * @return UserFunctions
     */
    public function user()
    {
        return $this->extensions[UserFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * Widget Functions
     * @return WidgetFunctions
     */
    public function widget(){
        return $this->extensions[WidgetFunctions::FUNCTION_NAMESPACE];
    }

    /**
     * XMLRPC Functions
     * @return XmlrpcFunctions
     */
    public function xmlrpc(){
        return $this->extensions[XmlrpcFunctions::FUNCTION_NAMESPACE];
    }
}