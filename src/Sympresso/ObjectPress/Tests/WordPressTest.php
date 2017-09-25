<?php

namespace Sympresso\ObjectPress\Tests;

use PHPUnit\Framework\TestCase;
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
        $this->expectExceptionMessage('Invalid extension, it should extend class Sympresso\ObjectPress');
        new WordPress(array($filterExtensionOverride));
    }
}