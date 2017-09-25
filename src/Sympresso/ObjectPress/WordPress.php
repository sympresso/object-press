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
    protected $extraExtensions = array();

    /**
     * @var array
     */
    protected $coreExtensions = array(
        'action',
        'admin',
        'asset',
        'bookmark',
        'cache',
        'cat',
        'comment',
        'cond',
        'cookie',
        'core',
        'cron',
        'date_time',
        'embed',
        'enclosure',
        'feed',
        'file',
        'filter',
        'formatting',
        'form',
        'http',
        'http_header',
        'json',
        'lang',
        'mail',
        'media',
        'meta',
        'misc',
        'multisite',
        'nav',
        'option',
        'page',
        'ping',
        'plugin',
        'post',
        'post_type',
        'query',
        'redirect',
        'security',
        'serialization',
        'setting',
        'shortcode',
        'sidebar',
        'sql',
        'tag',
        'tax',
        'template',
        'term',
        'theme',
        'traceback',
        'transient',
        'url',
        'user',
        'widget',
        'xmlrpc',
    );

    /**********************
     * Function Namespaces
     *********************/

    /**
     * @var AdminFunctions
     */
    public $admin;

    /**
     * @var ActionFunctions
     */
    public $action;

    /**
     * @var AssetFunctions
     */
    public $asset;

    /**
     * @var BookmarkFunctions
     */
    public $bookmark;

    /**
     * @var CacheFunctions
     */
    public $cache;

    /**
     * @var CategoryFunctions
     */
    public $cat;

    /**
     * @var CommentFunctions
     */
    public $comment;

    /**
     * @var ConditionalFunctions
     */
    public $cond;

    /**
     * @var CookieFunctions
     */
    public $cookie;

    /**
     * @var CronFunctions
     */
    public $cron;

    /**
     * @var DateTimeFunctions
     */
    public $date_time;

    /**
     * @var EmbedFunctions
     */
    public $embed;

    /**
     * @var EnclosureFunctions
     */
    public $enclosure;

    /**
     * @var FeedFunctions
     */
    public $feed;

    /**
     * @var FileFunctions
     */
    public $file;

    /**
     * @var FilterFunctions
     */
    public $filter;

    /**
     * @var FormattingFunctions
     */
    public $formatting;

    /**
     * @var FormFunctions
     */
    public $form;

    /**
     * @var HttpFunctions
     */
    public $http;

    /**
     * @var HttpHeaderFunctions
     */
    public $http_header;

    /**
     * @var JsonFunctions
     */
    public $json;

    /**
     * @var LanguageFunctions
     */
    public $lang;

    /**
     * @var MailFunctions
     */
    public $mail;

    /**
     * @var MediaFunctions
     */
    public $media;

    /**
     * @var MetaFunctions
     */
    public $meta;

    /**
     * @var MiscFunctions
     */
    public $misc;

    /**
     * @var MultisiteFunctions
     */
    public $multisite;

    /**
     * @var NavFunctions
     */
    public $nav;

    /**
     * @var OptionFunctions
     */
    public $option;

    /**
     * @var PageFunctions
     */
    public $page;

    /**
     * @var PingFunctions
     */
    public $ping;

    /**
     * @var PluginFunctions
     */
    public $plugin;

    /**
     * @var PostFunctions
     */
    public $post;

    /**
     * @var PostTypeFunctions
     */
    public $post_type;

    /**
     * @var QueryFunctions
     */
    public $query;

    /**
     * @var RedirectFunctions
     */
    public $redirect;

    /**
     * @var SecurityFunctions
     */
    public $security;

    /**
     * @var SerializationFunctions
     */
    public $serialization;

    /**
     * @var SettingFunctions
     */
    public $setting;

    /**
     * @var ShortcodeFunctions
     */
    public $shortcode;

    /**
     * @var SidebarFunctions
     */
    public $sidebar;

    /**
     * @var SqlFunctions
     */
    public $sql;

    /**
     * @var TagFunctions
     */
    public $tag;

    /**
     * @var TaxFunctions
     */
    public $tax;

    /**
     * @var TemplateFunctions
     */
    public $template;

    /**
     * @var TermFunctions
     */
    public $term;

    /**
     * @var ThemeFunctions
     */
    public $theme;

    /**
     * @var TracebackFunctions
     */
    public $traceback;

    /**
     * @var UrlFunctions
     */
    public $url;

    /**
     * @var UserFunctions
     */
    public $user;

    /**
     * @var WidgetFunctions
     */
    public $widget;

    /**
     * @var XmlrpcFunctions
     */
    public $xmlrpc;

    /**
     * WordPress constructor.
     * @param array $overrides
     * @throws \Exception
     */
    public function __construct(array $overrides = array())
    {
        $this->wpGlobals = new Globals();
        $extensions = array(
            ActionFunctions::FUNCTION_NAMESPACE => new ActionFunctions(),
            AdminFunctions::FUNCTION_NAMESPACE => new AdminFunctions(),
            AssetFunctions::FUNCTION_NAMESPACE => new AssetFunctions(),
            BookmarkFunctions::FUNCTION_NAMESPACE => new BookmarkFunctions(),
            CacheFunctions::FUNCTION_NAMESPACE => new CacheFunctions(),
            CategoryFunctions::FUNCTION_NAMESPACE => new CategoryFunctions(),
            CommentFunctions::FUNCTION_NAMESPACE => new CommentFunctions(),
            ConditionalFunctions::FUNCTION_NAMESPACE => new ConditionalFunctions(),
            CookieFunctions::FUNCTION_NAMESPACE => new CookieFunctions(),
            CronFunctions::FUNCTION_NAMESPACE => new CronFunctions(),
            DateTimeFunctions::FUNCTION_NAMESPACE => new DateTimeFunctions(),
            EmbedFunctions::FUNCTION_NAMESPACE => new EmbedFunctions(),
            EnclosureFunctions::FUNCTION_NAMESPACE => new EnclosureFunctions(),
            FeedFunctions::FUNCTION_NAMESPACE => new FeedFunctions(),
            FileFunctions::FUNCTION_NAMESPACE => new FileFunctions(),
            FilterFunctions::FUNCTION_NAMESPACE => new FilterFunctions(),
            FormattingFunctions::FUNCTION_NAMESPACE => new FormattingFunctions(),
            FormFunctions::FUNCTION_NAMESPACE => new FormFunctions(),
            HttpFunctions::FUNCTION_NAMESPACE => new HttpFunctions(),
            HttpHeaderFunctions::FUNCTION_NAMESPACE => new HttpHeaderFunctions(),
            JsonFunctions::FUNCTION_NAMESPACE => new JsonFunctions(),
            LanguageFunctions::FUNCTION_NAMESPACE => new LanguageFunctions(),
            MailFunctions::FUNCTION_NAMESPACE => new MailFunctions(),
            MediaFunctions::FUNCTION_NAMESPACE => new MediaFunctions(),
            MetaFunctions::FUNCTION_NAMESPACE => new MetaFunctions(),
            MiscFunctions::FUNCTION_NAMESPACE => new MiscFunctions(),
            NavFunctions::FUNCTION_NAMESPACE => new NavFunctions(),
            MultisiteFunctions::FUNCTION_NAMESPACE => new MultisiteFunctions(),
            OptionFunctions::FUNCTION_NAMESPACE => new OptionFunctions(),
            PageFunctions::FUNCTION_NAMESPACE => new PageFunctions(),
            PingFunctions::FUNCTION_NAMESPACE => new PingFunctions(),
            PluginFunctions::FUNCTION_NAMESPACE => new PluginFunctions(),
            PostFunctions::FUNCTION_NAMESPACE => new PostFunctions(),
            PostTypeFunctions::FUNCTION_NAMESPACE => new PostTypeFunctions(),
            QueryFunctions::FUNCTION_NAMESPACE => new QueryFunctions(),
            RedirectFunctions::FUNCTION_NAMESPACE => new RedirectFunctions(),
            SecurityFunctions::FUNCTION_NAMESPACE => new SecurityFunctions(),
            SerializationFunctions::FUNCTION_NAMESPACE => new SerializationFunctions(),
            SettingFunctions::FUNCTION_NAMESPACE => new SettingFunctions(),
            ShortcodeFunctions::FUNCTION_NAMESPACE => new ShortcodeFunctions(),
            SidebarFunctions::FUNCTION_NAMESPACE => new SidebarFunctions(),
            SqlFunctions::FUNCTION_NAMESPACE => new SqlFunctions(),
            TagFunctions::FUNCTION_NAMESPACE => new TagFunctions(),
            TaxFunctions::FUNCTION_NAMESPACE => new TaxFunctions(),
            TemplateFunctions::FUNCTION_NAMESPACE => new TemplateFunctions(),
            TermFunctions::FUNCTION_NAMESPACE => new TermFunctions(),
            ThemeFunctions::FUNCTION_NAMESPACE => new ThemeFunctions(),
            TracebackFunctions::FUNCTION_NAMESPACE => new TracebackFunctions(),
            TransientFunctions::FUNCTION_NAMESPACE => new TransientFunctions(),
            UrlFunctions::FUNCTION_NAMESPACE => new UrlFunctions(),
            UserFunctions::FUNCTION_NAMESPACE => new UserFunctions(),
            WidgetFunctions::FUNCTION_NAMESPACE => new WidgetFunctions(),
            XmlrpcFunctions::FUNCTION_NAMESPACE => new XmlrpcFunctions(),
        );

        foreach ($overrides as $item) {
            if (!$item instanceof ExtensionInterface) {
                throw new \Exception('Invalid extension, it should implement Sympresso\ObjectPress\ExtensionInterface');
            }
            $extensions[$item->getExtensionNamespace()] = $item;
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
        $namespace = $extension->getExtensionNamespace();
        if (in_array($namespace, $this->coreExtensions)) {
            $this->$namespace = $extension;
        } else {
            $this->extraExtensions[$extension->getExtensionNamespace()] = $extension;
        }

        $functions = get_class_methods($extension);
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
        if (isset($this->extraExtensions[$name])) {
            return $this->extraExtensions[$name];
        }
    }
}