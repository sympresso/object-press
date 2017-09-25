<?php

namespace Sympresso\ObjectPress\Tests;

use PHPUnit\Framework\TestCase;
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
use Sympresso\ObjectPress\WordPress;

class WordPressTest extends TestCase
{
    public function testDefaults()
    {
        $sut = new WordPress();
        $this->assertInstanceOf(ActionFunctions::class, $sut->action());
        $this->assertInstanceOf(AdminFunctions::class, $sut->admin());
        $this->assertInstanceOf(AssetFunctions::class, $sut->asset());
        $this->assertInstanceOf(BookmarkFunctions::class, $sut->bookmark());
        $this->assertInstanceOf(CacheFunctions::class, $sut->cache());
        $this->assertInstanceOf(CategoryFunctions::class, $sut->cat());
        $this->assertInstanceOf(CommentFunctions::class, $sut->comment());
        $this->assertInstanceOf(ConditionalFunctions::class, $sut->cond());
        $this->assertInstanceOf(CookieFunctions::class, $sut->cookie());
        $this->assertInstanceOf(CronFunctions::class, $sut->cron());
        $this->assertInstanceOf(DateTimeFunctions::class, $sut->date_time());
        $this->assertInstanceOf(EmbedFunctions::class, $sut->embed());
        $this->assertInstanceOf(EnclosureFunctions::class, $sut->enclosure());
        $this->assertInstanceOf(FeedFunctions::class, $sut->feed());
        $this->assertInstanceOf(FileFunctions::class, $sut->file());
        $this->assertInstanceOf(FilterFunctions::class, $sut->filter());
        $this->assertInstanceOf(FormFunctions::class, $sut->form());
        $this->assertInstanceOf(FormattingFunctions::class, $sut->formatting());
        $this->assertInstanceOf(HttpFunctions::class, $sut->http());
        $this->assertInstanceOf(HttpHeaderFunctions::class, $sut->http_header());
        $this->assertInstanceOf(JsonFunctions::class, $sut->json());
        $this->assertInstanceOf(LanguageFunctions::class, $sut->lang());
        $this->assertInstanceOf(MailFunctions::class, $sut->mail());
        $this->assertInstanceOf(MediaFunctions::class, $sut->media());
        $this->assertInstanceOf(MetaFunctions::class, $sut->meta());
        $this->assertInstanceOf(MiscFunctions::class, $sut->misc());
        $this->assertInstanceOf(MultisiteFunctions::class, $sut->multisite());
        $this->assertInstanceOf(NavFunctions::class, $sut->nav());
        $this->assertInstanceOf(OptionFunctions::class, $sut->option());
        $this->assertInstanceOf(PageFunctions::class, $sut->page());
        $this->assertInstanceOf(PingFunctions::class, $sut->ping());
        $this->assertInstanceOf(PluginFunctions::class, $sut->plugin());
        $this->assertInstanceOf(PostFunctions::class, $sut->post());
        $this->assertInstanceOf(PostTypeFunctions::class, $sut->post_type());
        $this->assertInstanceOf(QueryFunctions::class, $sut->query());
        $this->assertInstanceOf(RedirectFunctions::class, $sut->redirect());
        $this->assertInstanceOf(SecurityFunctions::class, $sut->security());
        $this->assertInstanceOf(SerializationFunctions::class, $sut->serialization());
        $this->assertInstanceOf(SettingFunctions::class, $sut->setting());
        $this->assertInstanceOf(ShortcodeFunctions::class, $sut->shortcode());
        $this->assertInstanceOf(SidebarFunctions::class, $sut->sidebar());
        $this->assertInstanceOf(SqlFunctions::class, $sut->sql());
        $this->assertInstanceOf(TagFunctions::class, $sut->tag());
        $this->assertInstanceOf(TaxFunctions::class, $sut->tax());
        $this->assertInstanceOf(TemplateFunctions::class, $sut->template());
        $this->assertInstanceOf(TermFunctions::class, $sut->term());
        $this->assertInstanceOf(ThemeFunctions::class, $sut->theme());
        $this->assertInstanceOf(TracebackFunctions::class, $sut->traceback());
        $this->assertInstanceOf(TransientFunctions::class, $sut->transient());
        $this->assertInstanceOf(UrlFunctions::class, $sut->url());
        $this->assertInstanceOf(UserFunctions::class, $sut->user());
        $this->assertInstanceOf(WidgetFunctions::class, $sut->widget());
        $this->assertInstanceOf(XmlrpcFunctions::class, $sut->xmlrpc());
    }

    public function testOverrideDefaults()
    {
        $filterExtensionOverride = new FooExtension();
        $sut = new WordPress(array($filterExtensionOverride));
        $this->assertInstanceOf(FooExtension::class, $sut->filter());
    }

    public function testConstructorException(){
        $filterExtensionOverride = new BarExtension();
        $this->expectExceptionMessage('Invalid extension, it should implement Sympresso\ObjectPress\ExtensionInterface');
        new WordPress(array($filterExtensionOverride));
    }
}