<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class TikiCachedContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'tiki.controller.access' => 'getTiki_Controller_AccessService',
            'tiki.controller.activitystream' => 'getTiki_Controller_ActivitystreamService',
            'tiki.controller.annotation' => 'getTiki_Controller_AnnotationService',
            'tiki.controller.article' => 'getTiki_Controller_ArticleService',
            'tiki.controller.attribute' => 'getTiki_Controller_AttributeService',
            'tiki.controller.auth_source' => 'getTiki_Controller_AuthSourceService',
            'tiki.controller.autosave' => 'getTiki_Controller_AutosaveService',
            'tiki.controller.bigbluebutton' => 'getTiki_Controller_BigbluebuttonService',
            'tiki.controller.calendar' => 'getTiki_Controller_CalendarService',
            'tiki.controller.category' => 'getTiki_Controller_CategoryService',
            'tiki.controller.comment' => 'getTiki_Controller_CommentService',
            'tiki.controller.connect' => 'getTiki_Controller_ConnectService',
            'tiki.controller.connect_server' => 'getTiki_Controller_ConnectServerService',
            'tiki.controller.contenttemplate' => 'getTiki_Controller_ContenttemplateService',
            'tiki.controller.customroute' => 'getTiki_Controller_CustomrouteService',
            'tiki.controller.draw' => 'getTiki_Controller_DrawService',
            'tiki.controller.edit' => 'getTiki_Controller_EditService',
            'tiki.controller.favorite' => 'getTiki_Controller_FavoriteService',
            'tiki.controller.file' => 'getTiki_Controller_FileService',
            'tiki.controller.file_finder' => 'getTiki_Controller_FileFinderService',
            'tiki.controller.forum' => 'getTiki_Controller_ForumService',
            'tiki.controller.goal' => 'getTiki_Controller_GoalService',
            'tiki.controller.group' => 'getTiki_Controller_GroupService',
            'tiki.controller.h5p' => 'getTiki_Controller_H5pService',
            'tiki.controller.ids' => 'getTiki_Controller_IdsService',
            'tiki.controller.kaltura' => 'getTiki_Controller_KalturaService',
            'tiki.controller.language' => 'getTiki_Controller_LanguageService',
            'tiki.controller.mailin' => 'getTiki_Controller_MailinService',
            'tiki.controller.managestream' => 'getTiki_Controller_ManagestreamService',
            'tiki.controller.menu' => 'getTiki_Controller_MenuService',
            'tiki.controller.module' => 'getTiki_Controller_ModuleService',
            'tiki.controller.monitor' => 'getTiki_Controller_MonitorService',
            'tiki.controller.mustread' => 'getTiki_Controller_MustreadService',
            'tiki.controller.oauth' => 'getTiki_Controller_OauthService',
            'tiki.controller.object' => 'getTiki_Controller_ObjectService',
            'tiki.controller.payment' => 'getTiki_Controller_PaymentService',
            'tiki.controller.pdf' => 'getTiki_Controller_PdfService',
            'tiki.controller.pivot' => 'getTiki_Controller_PivotService',
            'tiki.controller.plugin' => 'getTiki_Controller_PluginService',
            'tiki.controller.rating' => 'getTiki_Controller_RatingService',
            'tiki.controller.recommendation_dev' => 'getTiki_Controller_RecommendationDevService',
            'tiki.controller.relation' => 'getTiki_Controller_RelationService',
            'tiki.controller.report' => 'getTiki_Controller_ReportService',
            'tiki.controller.scheduler' => 'getTiki_Controller_SchedulerService',
            'tiki.controller.score' => 'getTiki_Controller_ScoreService',
            'tiki.controller.search' => 'getTiki_Controller_SearchService',
            'tiki.controller.search_customsearch' => 'getTiki_Controller_SearchCustomsearchService',
            'tiki.controller.search_manifold' => 'getTiki_Controller_SearchManifoldService',
            'tiki.controller.search_stored' => 'getTiki_Controller_SearchStoredService',
            'tiki.controller.semaphore' => 'getTiki_Controller_SemaphoreService',
            'tiki.controller.showtikiorg' => 'getTiki_Controller_ShowtikiorgService',
            'tiki.controller.social' => 'getTiki_Controller_SocialService',
            'tiki.controller.styleguide' => 'getTiki_Controller_StyleguideService',
            'tiki.controller.suite' => 'getTiki_Controller_SuiteService',
            'tiki.controller.tabular' => 'getTiki_Controller_TabularService',
            'tiki.controller.tracker' => 'getTiki_Controller_TrackerService',
            'tiki.controller.tracker_calendar' => 'getTiki_Controller_TrackerCalendarService',
            'tiki.controller.tracker_sync' => 'getTiki_Controller_TrackerSyncService',
            'tiki.controller.tracker_todo' => 'getTiki_Controller_TrackerTodoService',
            'tiki.controller.translation' => 'getTiki_Controller_TranslationService',
            'tiki.controller.user' => 'getTiki_Controller_UserService',
            'tiki.controller.user_conditions' => 'getTiki_Controller_UserConditionsService',
            'tiki.controller.vimeo' => 'getTiki_Controller_VimeoService',
            'tiki.controller.wiki' => 'getTiki_Controller_WikiService',
            'tiki.controller.wiki_structure' => 'getTiki_Controller_WikiStructureService',
            'tiki.controller.workspace' => 'getTiki_Controller_WorkspaceService',
            'tiki.controller.xmpp' => 'getTiki_Controller_XmppService',
            'tiki.lib.access' => 'getTiki_Lib_AccessService',
            'tiki.lib.accounting' => 'getTiki_Lib_AccountingService',
            'tiki.lib.activity' => 'getTiki_Lib_ActivityService',
            'tiki.lib.admin' => 'getTiki_Lib_AdminService',
            'tiki.lib.areas' => 'getTiki_Lib_AreasService',
            'tiki.lib.art' => 'getTiki_Lib_ArtService',
            'tiki.lib.attribute' => 'getTiki_Lib_AttributeService',
            'tiki.lib.autosave' => 'getTiki_Lib_AutosaveService',
            'tiki.lib.avatar' => 'getTiki_Lib_AvatarService',
            'tiki.lib.banner' => 'getTiki_Lib_BannerService',
            'tiki.lib.bigbluebutton' => 'getTiki_Lib_BigbluebuttonService',
            'tiki.lib.blacklist' => 'getTiki_Lib_BlacklistService',
            'tiki.lib.blog' => 'getTiki_Lib_BlogService',
            'tiki.lib.cache' => 'getTiki_Lib_CacheService',
            'tiki.lib.calendar' => 'getTiki_Lib_CalendarService',
            'tiki.lib.captcha' => 'getTiki_Lib_CaptchaService',
            'tiki.lib.cart' => 'getTiki_Lib_CartService',
            'tiki.lib.categ' => 'getTiki_Lib_CategService',
            'tiki.lib.comments' => 'getTiki_Lib_CommentsService',
            'tiki.lib.connect' => 'getTiki_Lib_ConnectService',
            'tiki.lib.connect_server' => 'getTiki_Lib_ConnectServerService',
            'tiki.lib.contact' => 'getTiki_Lib_ContactService',
            'tiki.lib.contribution' => 'getTiki_Lib_ContributionService',
            'tiki.lib.credits' => 'getTiki_Lib_CreditsService',
            'tiki.lib.crypt' => 'getTiki_Lib_CryptService',
            'tiki.lib.css' => 'getTiki_Lib_CssService',
            'tiki.lib.custom_route' => 'getTiki_Lib_CustomRouteService',
            'tiki.lib.dcs' => 'getTiki_Lib_DcsService',
            'tiki.lib.edit' => 'getTiki_Lib_EditService',
            'tiki.lib.events' => 'getTiki_Lib_EventsService',
            'tiki.lib.faq' => 'getTiki_Lib_FaqService',
            'tiki.lib.federatedsearch' => 'getTiki_Lib_FederatedsearchService',
            'tiki.lib.filegal' => 'getTiki_Lib_FilegalService',
            'tiki.lib.filegalbatch' => 'getTiki_Lib_FilegalbatchService',
            'tiki.lib.filegalcopy' => 'getTiki_Lib_FilegalcopyService',
            'tiki.lib.flaggedrevision' => 'getTiki_Lib_FlaggedrevisionService',
            'tiki.lib.freetag' => 'getTiki_Lib_FreetagService',
            'tiki.lib.geo' => 'getTiki_Lib_GeoService',
            'tiki.lib.goal' => 'getTiki_Lib_GoalService',
            'tiki.lib.goalevent' => 'getTiki_Lib_GoaleventService',
            'tiki.lib.goalreward' => 'getTiki_Lib_GoalrewardService',
            'tiki.lib.groupalert' => 'getTiki_Lib_GroupalertService',
            'tiki.lib.h5p' => 'getTiki_Lib_H5pService',
            'tiki.lib.header' => 'getTiki_Lib_HeaderService',
            'tiki.lib.hist' => 'getTiki_Lib_HistService',
            'tiki.lib.iconset' => 'getTiki_Lib_IconsetService',
            'tiki.lib.imagegal' => 'getTiki_Lib_ImagegalService',
            'tiki.lib.kalturaadmin' => 'getTiki_Lib_KalturaadminService',
            'tiki.lib.kalturauser' => 'getTiki_Lib_KalturauserService',
            'tiki.lib.language' => 'getTiki_Lib_LanguageService',
            'tiki.lib.languagetranslations' => 'getTiki_Lib_LanguagetranslationsService',
            'tiki.lib.ldap' => 'getTiki_Lib_LdapService',
            'tiki.lib.login' => 'getTiki_Lib_LoginService',
            'tiki.lib.logs' => 'getTiki_Lib_LogsService',
            'tiki.lib.logsqry' => 'getTiki_Lib_LogsqryService',
            'tiki.lib.mailin' => 'getTiki_Lib_MailinService',
            'tiki.lib.memcache' => 'getTiki_Lib_MemcacheService',
            'tiki.lib.menu' => 'getTiki_Lib_MenuService',
            'tiki.lib.message' => 'getTiki_Lib_MessageService',
            'tiki.lib.mime' => 'getTiki_Lib_MimeService',
            'tiki.lib.mod' => 'getTiki_Lib_ModService',
            'tiki.lib.monitor' => 'getTiki_Lib_MonitorService',
            'tiki.lib.monitormail' => 'getTiki_Lib_MonitormailService',
            'tiki.lib.multilingual' => 'getTiki_Lib_MultilingualService',
            'tiki.lib.notification' => 'getTiki_Lib_NotificationService',
            'tiki.lib.oauth' => 'getTiki_Lib_OauthService',
            'tiki.lib.object' => 'getTiki_Lib_ObjectService',
            'tiki.lib.objectselector' => 'getTiki_Lib_ObjectselectorService',
            'tiki.lib.pagecontent' => 'getTiki_Lib_PagecontentService',
            'tiki.lib.parser' => 'getTiki_Lib_ParserService',
            'tiki.lib.payment' => 'getTiki_Lib_PaymentService',
            'tiki.lib.perspective' => 'getTiki_Lib_PerspectiveService',
            'tiki.lib.poll' => 'getTiki_Lib_PollService',
            'tiki.lib.prefs' => 'getTiki_Lib_PrefsService',
            'tiki.lib.quantify' => 'getTiki_Lib_QuantifyService',
            'tiki.lib.queue' => 'getTiki_Lib_QueueService',
            'tiki.lib.quiz' => 'getTiki_Lib_QuizService',
            'tiki.lib.rating' => 'getTiki_Lib_RatingService',
            'tiki.lib.ratingconfig' => 'getTiki_Lib_RatingconfigService',
            'tiki.lib.recommendationcontentbatch' => 'getTiki_Lib_RecommendationcontentbatchService',
            'tiki.lib.references' => 'getTiki_Lib_ReferencesService',
            'tiki.lib.registration' => 'getTiki_Lib_RegistrationService',
            'tiki.lib.relation' => 'getTiki_Lib_RelationService',
            'tiki.lib.rss' => 'getTiki_Lib_RssService',
            'tiki.lib.scheduler' => 'getTiki_Lib_SchedulerService',
            'tiki.lib.score' => 'getTiki_Lib_ScoreService',
            'tiki.lib.scorm' => 'getTiki_Lib_ScormService',
            'tiki.lib.searchstats' => 'getTiki_Lib_SearchstatsService',
            'tiki.lib.semantic' => 'getTiki_Lib_SemanticService',
            'tiki.lib.service' => 'getTiki_Lib_ServiceService',
            'tiki.lib.sheet' => 'getTiki_Lib_SheetService',
            'tiki.lib.slugmanager' => 'getTiki_Lib_SlugmanagerService',
            'tiki.lib.smarty' => 'getTiki_Lib_SmartyService',
            'tiki.lib.social' => 'getTiki_Lib_SocialService',
            'tiki.lib.stats' => 'getTiki_Lib_StatsService',
            'tiki.lib.storedsearch' => 'getTiki_Lib_StoredsearchService',
            'tiki.lib.struct' => 'getTiki_Lib_StructService',
            'tiki.lib.symbols' => 'getTiki_Lib_SymbolsService',
            'tiki.lib.tabular' => 'getTiki_Lib_TabularService',
            'tiki.lib.template' => 'getTiki_Lib_TemplateService',
            'tiki.lib.theme' => 'getTiki_Lib_ThemeService',
            'tiki.lib.themecontrol' => 'getTiki_Lib_ThemecontrolService',
            'tiki.lib.tikicalendar' => 'getTiki_Lib_TikicalendarService',
            'tiki.lib.tikidate' => 'getTiki_Lib_TikidateService',
            'tiki.lib.todo' => 'getTiki_Lib_TodoService',
            'tiki.lib.trk' => 'getTiki_Lib_TrkService',
            'tiki.lib.unifiedsearch' => 'getTiki_Lib_UnifiedsearchService',
            'tiki.lib.user' => 'getTiki_Lib_UserService',
            'tiki.lib.usermailin' => 'getTiki_Lib_UsermailinService',
            'tiki.lib.usermodules' => 'getTiki_Lib_UsermodulesService',
            'tiki.lib.userprefs' => 'getTiki_Lib_UserprefsService',
            'tiki.lib.validators' => 'getTiki_Lib_ValidatorsService',
            'tiki.lib.version' => 'getTiki_Lib_VersionService',
            'tiki.lib.vimeo' => 'getTiki_Lib_VimeoService',
            'tiki.lib.wiki' => 'getTiki_Lib_WikiService',
            'tiki.lib.wizard' => 'getTiki_Lib_WizardService',
            'tiki.lib.wysiwyg' => 'getTiki_Lib_WysiwygService',
            'tiki.lib.xmpp' => 'getTiki_Lib_XmppService',
            'tiki.lib.zotero' => 'getTiki_Lib_ZoteroService',
            'tiki.mailin.provider.articleput' => 'getTiki_Mailin_Provider_ArticleputService',
            'tiki.mailin.provider.replyhandler' => 'getTiki_Mailin_Provider_ReplyhandlerService',
            'tiki.mailin.provider.wiki' => 'getTiki_Mailin_Provider_WikiService',
            'tiki.mailin.provider.wikiappend' => 'getTiki_Mailin_Provider_WikiappendService',
            'tiki.mailin.provider.wikiget' => 'getTiki_Mailin_Provider_WikigetService',
            'tiki.mailin.provider.wikiprepend' => 'getTiki_Mailin_Provider_WikiprependService',
            'tiki.mailin.provider.wikiput' => 'getTiki_Mailin_Provider_WikiputService',
            'tiki.mailin.providerlist' => 'getTiki_Mailin_ProviderlistService',
            'tiki.recommendation.activity.store' => 'getTiki_Recommendation_Activity_StoreService',
            'tiki.recommendation.content.set' => 'getTiki_Recommendation_Content_SetService',
            'tiki.wiki.slug.dash' => 'getTiki_Wiki_Slug_DashService',
            'tiki.wiki.slug.underscore' => 'getTiki_Wiki_Slug_UnderscoreService',
            'tiki.wiki.slug.urlencode' => 'getTiki_Wiki_Slug_UrlencodeService',
        );

        $this->aliases = array();
    }

    public function getRemovedIds()
    {
        return array(
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
        );
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'tiki.controller.access' shared service.
     *
     * @return \Services_Access_Controller
     */
    protected function getTiki_Controller_AccessService()
    {
        return $this->services['tiki.controller.access'] = new \Services_Access_Controller();
    }

    /**
     * Gets the public 'tiki.controller.activitystream' shared service.
     *
     * @return \Services_ActivityStream_Controller
     */
    protected function getTiki_Controller_ActivitystreamService()
    {
        return $this->services['tiki.controller.activitystream'] = new \Services_ActivityStream_Controller();
    }

    /**
     * Gets the public 'tiki.controller.annotation' shared service.
     *
     * @return \Services_Comment_AnnotationController
     */
    protected function getTiki_Controller_AnnotationService()
    {
        return $this->services['tiki.controller.annotation'] = new \Services_Comment_AnnotationController();
    }

    /**
     * Gets the public 'tiki.controller.article' shared service.
     *
     * @return \Services_Article_Controller
     */
    protected function getTiki_Controller_ArticleService()
    {
        return $this->services['tiki.controller.article'] = new \Services_Article_Controller();
    }

    /**
     * Gets the public 'tiki.controller.attribute' shared service.
     *
     * @return \Services_Attribute_Controller
     */
    protected function getTiki_Controller_AttributeService()
    {
        return $this->services['tiki.controller.attribute'] = new \Services_Attribute_Controller();
    }

    /**
     * Gets the public 'tiki.controller.auth_source' shared service.
     *
     * @return \Services_AuthSource_Controller
     */
    protected function getTiki_Controller_AuthSourceService()
    {
        return $this->services['tiki.controller.auth_source'] = new \Services_AuthSource_Controller();
    }

    /**
     * Gets the public 'tiki.controller.autosave' shared service.
     *
     * @return \Services_AutoSave_Controller
     */
    protected function getTiki_Controller_AutosaveService()
    {
        return $this->services['tiki.controller.autosave'] = new \Services_AutoSave_Controller();
    }

    /**
     * Gets the public 'tiki.controller.bigbluebutton' shared service.
     *
     * @return \Services_BigBlueButton_Controller
     */
    protected function getTiki_Controller_BigbluebuttonService()
    {
        return $this->services['tiki.controller.bigbluebutton'] = new \Services_BigBlueButton_Controller();
    }

    /**
     * Gets the public 'tiki.controller.calendar' shared service.
     *
     * @return \Services_Calendar_Controller
     */
    protected function getTiki_Controller_CalendarService()
    {
        return $this->services['tiki.controller.calendar'] = new \Services_Calendar_Controller();
    }

    /**
     * Gets the public 'tiki.controller.category' shared service.
     *
     * @return \Services_Category_Controller
     */
    protected function getTiki_Controller_CategoryService()
    {
        return $this->services['tiki.controller.category'] = new \Services_Category_Controller();
    }

    /**
     * Gets the public 'tiki.controller.comment' shared service.
     *
     * @return \Services_Comment_Controller
     */
    protected function getTiki_Controller_CommentService()
    {
        return $this->services['tiki.controller.comment'] = new \Services_Comment_Controller();
    }

    /**
     * Gets the public 'tiki.controller.connect' shared service.
     *
     * @return \Services_Connect_Client
     */
    protected function getTiki_Controller_ConnectService()
    {
        return $this->services['tiki.controller.connect'] = new \Services_Connect_Client();
    }

    /**
     * Gets the public 'tiki.controller.connect_server' shared service.
     *
     * @return \Services_Connect_Server
     */
    protected function getTiki_Controller_ConnectServerService()
    {
        return $this->services['tiki.controller.connect_server'] = new \Services_Connect_Server();
    }

    /**
     * Gets the public 'tiki.controller.contenttemplate' shared service.
     *
     * @return \Services_ContentTemplate_Controller
     */
    protected function getTiki_Controller_ContenttemplateService()
    {
        return $this->services['tiki.controller.contenttemplate'] = new \Services_ContentTemplate_Controller();
    }

    /**
     * Gets the public 'tiki.controller.customroute' shared service.
     *
     * @return \Services_CustomRoute_Controller
     */
    protected function getTiki_Controller_CustomrouteService()
    {
        return $this->services['tiki.controller.customroute'] = new \Services_CustomRoute_Controller();
    }

    /**
     * Gets the public 'tiki.controller.draw' shared service.
     *
     * @return \Services_Draw_Controller
     */
    protected function getTiki_Controller_DrawService()
    {
        return $this->services['tiki.controller.draw'] = new \Services_Draw_Controller();
    }

    /**
     * Gets the public 'tiki.controller.edit' shared service.
     *
     * @return \Services_Edit_Controller
     */
    protected function getTiki_Controller_EditService()
    {
        return $this->services['tiki.controller.edit'] = new \Services_Edit_Controller();
    }

    /**
     * Gets the public 'tiki.controller.favorite' shared service.
     *
     * @return \Services_User_FavoriteController
     */
    protected function getTiki_Controller_FavoriteService()
    {
        return $this->services['tiki.controller.favorite'] = new \Services_User_FavoriteController();
    }

    /**
     * Gets the public 'tiki.controller.file' shared service.
     *
     * @return \Services_File_Controller
     */
    protected function getTiki_Controller_FileService()
    {
        return $this->services['tiki.controller.file'] = new \Services_File_Controller();
    }

    /**
     * Gets the public 'tiki.controller.file_finder' shared service.
     *
     * @return \Services_File_FinderController
     */
    protected function getTiki_Controller_FileFinderService()
    {
        return $this->services['tiki.controller.file_finder'] = new \Services_File_FinderController();
    }

    /**
     * Gets the public 'tiki.controller.forum' shared service.
     *
     * @return \Services_Forum_Controller
     */
    protected function getTiki_Controller_ForumService()
    {
        return $this->services['tiki.controller.forum'] = new \Services_Forum_Controller();
    }

    /**
     * Gets the public 'tiki.controller.goal' shared service.
     *
     * @return \Services_Goal_Controller
     */
    protected function getTiki_Controller_GoalService()
    {
        return $this->services['tiki.controller.goal'] = new \Services_Goal_Controller();
    }

    /**
     * Gets the public 'tiki.controller.group' shared service.
     *
     * @return \Services_Group_Controller
     */
    protected function getTiki_Controller_GroupService()
    {
        return $this->services['tiki.controller.group'] = new \Services_Group_Controller();
    }

    /**
     * Gets the public 'tiki.controller.h5p' shared service.
     *
     * @return \Services_H5P_Controller
     */
    protected function getTiki_Controller_H5pService()
    {
        return $this->services['tiki.controller.h5p'] = new \Services_H5P_Controller();
    }

    /**
     * Gets the public 'tiki.controller.ids' shared service.
     *
     * @return \Services_IDS_Controller
     */
    protected function getTiki_Controller_IdsService()
    {
        return $this->services['tiki.controller.ids'] = new \Services_IDS_Controller();
    }

    /**
     * Gets the public 'tiki.controller.kaltura' shared service.
     *
     * @return \Services_Kaltura_Controller
     */
    protected function getTiki_Controller_KalturaService()
    {
        return $this->services['tiki.controller.kaltura'] = new \Services_Kaltura_Controller();
    }

    /**
     * Gets the public 'tiki.controller.language' shared service.
     *
     * @return \Services_Language_Controller
     */
    protected function getTiki_Controller_LanguageService()
    {
        return $this->services['tiki.controller.language'] = new \Services_Language_Controller();
    }

    /**
     * Gets the public 'tiki.controller.mailin' shared service.
     *
     * @return \Services_MailIn_Controller
     */
    protected function getTiki_Controller_MailinService()
    {
        return $this->services['tiki.controller.mailin'] = new \Services_MailIn_Controller();
    }

    /**
     * Gets the public 'tiki.controller.managestream' shared service.
     *
     * @return \Services_ActivityStream_ManageController
     */
    protected function getTiki_Controller_ManagestreamService()
    {
        return $this->services['tiki.controller.managestream'] = new \Services_ActivityStream_ManageController();
    }

    /**
     * Gets the public 'tiki.controller.menu' shared service.
     *
     * @return \Services_Menu_Controller
     */
    protected function getTiki_Controller_MenuService()
    {
        return $this->services['tiki.controller.menu'] = new \Services_Menu_Controller();
    }

    /**
     * Gets the public 'tiki.controller.module' shared service.
     *
     * @return \Services_Module_Controller
     */
    protected function getTiki_Controller_ModuleService()
    {
        return $this->services['tiki.controller.module'] = new \Services_Module_Controller();
    }

    /**
     * Gets the public 'tiki.controller.monitor' shared service.
     *
     * @return \Services_User_MonitorController
     */
    protected function getTiki_Controller_MonitorService()
    {
        return $this->services['tiki.controller.monitor'] = new \Services_User_MonitorController();
    }

    /**
     * Gets the public 'tiki.controller.mustread' shared service.
     *
     * @return \Services_MustRead_Controller
     */
    protected function getTiki_Controller_MustreadService()
    {
        return $this->services['tiki.controller.mustread'] = new \Services_MustRead_Controller();
    }

    /**
     * Gets the public 'tiki.controller.oauth' shared service.
     *
     * @return \Services_AuthSource_OAuthController
     */
    protected function getTiki_Controller_OauthService()
    {
        return $this->services['tiki.controller.oauth'] = new \Services_AuthSource_OAuthController();
    }

    /**
     * Gets the public 'tiki.controller.object' shared service.
     *
     * @return \Services_Object_Controller
     */
    protected function getTiki_Controller_ObjectService()
    {
        return $this->services['tiki.controller.object'] = new \Services_Object_Controller();
    }

    /**
     * Gets the public 'tiki.controller.payment' shared service.
     *
     * @return \Services_Payment_Controller
     */
    protected function getTiki_Controller_PaymentService()
    {
        return $this->services['tiki.controller.payment'] = new \Services_Payment_Controller();
    }

    /**
     * Gets the public 'tiki.controller.pdf' shared service.
     *
     * @return \Services_PDF_Controller
     */
    protected function getTiki_Controller_PdfService()
    {
        return $this->services['tiki.controller.pdf'] = new \Services_PDF_Controller();
    }

    /**
     * Gets the public 'tiki.controller.pivot' shared service.
     *
     * @return \Services_Pivot_Controller
     */
    protected function getTiki_Controller_PivotService()
    {
        return $this->services['tiki.controller.pivot'] = new \Services_Pivot_Controller();
    }

    /**
     * Gets the public 'tiki.controller.plugin' shared service.
     *
     * @return \Services_Edit_PluginController
     */
    protected function getTiki_Controller_PluginService()
    {
        return $this->services['tiki.controller.plugin'] = new \Services_Edit_PluginController();
    }

    /**
     * Gets the public 'tiki.controller.rating' shared service.
     *
     * @return \Services_Rating_Controller
     */
    protected function getTiki_Controller_RatingService()
    {
        return $this->services['tiki.controller.rating'] = new \Services_Rating_Controller();
    }

    /**
     * Gets the public 'tiki.controller.recommendation_dev' shared service.
     *
     * @return \Services_Recommendation_DevelopmentController
     */
    protected function getTiki_Controller_RecommendationDevService()
    {
        return $this->services['tiki.controller.recommendation_dev'] = new \Services_Recommendation_DevelopmentController();
    }

    /**
     * Gets the public 'tiki.controller.relation' shared service.
     *
     * @return \Services_Relation_Controller
     */
    protected function getTiki_Controller_RelationService()
    {
        return $this->services['tiki.controller.relation'] = new \Services_Relation_Controller();
    }

    /**
     * Gets the public 'tiki.controller.report' shared service.
     *
     * @return \Services_Report_Controller
     */
    protected function getTiki_Controller_ReportService()
    {
        return $this->services['tiki.controller.report'] = new \Services_Report_Controller();
    }

    /**
     * Gets the public 'tiki.controller.scheduler' shared service.
     *
     * @return \Services_Scheduler_Controller
     */
    protected function getTiki_Controller_SchedulerService()
    {
        return $this->services['tiki.controller.scheduler'] = new \Services_Scheduler_Controller();
    }

    /**
     * Gets the public 'tiki.controller.score' shared service.
     *
     * @return \Services_Score_Controller
     */
    protected function getTiki_Controller_ScoreService()
    {
        return $this->services['tiki.controller.score'] = new \Services_Score_Controller();
    }

    /**
     * Gets the public 'tiki.controller.search' shared service.
     *
     * @return \Services_Search_Controller
     */
    protected function getTiki_Controller_SearchService()
    {
        return $this->services['tiki.controller.search'] = new \Services_Search_Controller();
    }

    /**
     * Gets the public 'tiki.controller.search_customsearch' shared service.
     *
     * @return \Services_Search_CustomSearchController
     */
    protected function getTiki_Controller_SearchCustomsearchService()
    {
        return $this->services['tiki.controller.search_customsearch'] = new \Services_Search_CustomSearchController();
    }

    /**
     * Gets the public 'tiki.controller.search_manifold' shared service.
     *
     * @return \Services_Search_ManifoldController
     */
    protected function getTiki_Controller_SearchManifoldService()
    {
        return $this->services['tiki.controller.search_manifold'] = new \Services_Search_ManifoldController();
    }

    /**
     * Gets the public 'tiki.controller.search_stored' shared service.
     *
     * @return \Services_Search_StoredController
     */
    protected function getTiki_Controller_SearchStoredService()
    {
        return $this->services['tiki.controller.search_stored'] = new \Services_Search_StoredController();
    }

    /**
     * Gets the public 'tiki.controller.semaphore' shared service.
     *
     * @return \Services_Edit_SemaphoreController
     */
    protected function getTiki_Controller_SemaphoreService()
    {
        return $this->services['tiki.controller.semaphore'] = new \Services_Edit_SemaphoreController();
    }

    /**
     * Gets the public 'tiki.controller.showtikiorg' shared service.
     *
     * @return \Services_ShowTikiOrg_Controller
     */
    protected function getTiki_Controller_ShowtikiorgService()
    {
        return $this->services['tiki.controller.showtikiorg'] = new \Services_ShowTikiOrg_Controller();
    }

    /**
     * Gets the public 'tiki.controller.social' shared service.
     *
     * @return \Services_User_SocialController
     */
    protected function getTiki_Controller_SocialService()
    {
        return $this->services['tiki.controller.social'] = new \Services_User_SocialController();
    }

    /**
     * Gets the public 'tiki.controller.styleguide' shared service.
     *
     * @return \Services_StyleGuide_Controller
     */
    protected function getTiki_Controller_StyleguideService()
    {
        return $this->services['tiki.controller.styleguide'] = new \Services_StyleGuide_Controller();
    }

    /**
     * Gets the public 'tiki.controller.suite' shared service.
     *
     * @return \Services_Suite_Controller
     */
    protected function getTiki_Controller_SuiteService()
    {
        return $this->services['tiki.controller.suite'] = new \Services_Suite_Controller();
    }

    /**
     * Gets the public 'tiki.controller.tabular' shared service.
     *
     * @return \Services_Tracker_TabularController
     */
    protected function getTiki_Controller_TabularService()
    {
        return $this->services['tiki.controller.tabular'] = new \Services_Tracker_TabularController();
    }

    /**
     * Gets the public 'tiki.controller.tracker' shared service.
     *
     * @return \Services_Tracker_Controller
     */
    protected function getTiki_Controller_TrackerService()
    {
        return $this->services['tiki.controller.tracker'] = new \Services_Tracker_Controller();
    }

    /**
     * Gets the public 'tiki.controller.tracker_calendar' shared service.
     *
     * @return \Services_Tracker_CalendarController
     */
    protected function getTiki_Controller_TrackerCalendarService()
    {
        return $this->services['tiki.controller.tracker_calendar'] = new \Services_Tracker_CalendarController();
    }

    /**
     * Gets the public 'tiki.controller.tracker_sync' shared service.
     *
     * @return \Services_Tracker_SyncController
     */
    protected function getTiki_Controller_TrackerSyncService()
    {
        return $this->services['tiki.controller.tracker_sync'] = new \Services_Tracker_SyncController();
    }

    /**
     * Gets the public 'tiki.controller.tracker_todo' shared service.
     *
     * @return \Services_Tracker_TodoController
     */
    protected function getTiki_Controller_TrackerTodoService()
    {
        return $this->services['tiki.controller.tracker_todo'] = new \Services_Tracker_TodoController();
    }

    /**
     * Gets the public 'tiki.controller.translation' shared service.
     *
     * @return \Services_Language_TranslationController
     */
    protected function getTiki_Controller_TranslationService()
    {
        return $this->services['tiki.controller.translation'] = new \Services_Language_TranslationController();
    }

    /**
     * Gets the public 'tiki.controller.user' shared service.
     *
     * @return \Services_User_Controller
     */
    protected function getTiki_Controller_UserService()
    {
        return $this->services['tiki.controller.user'] = new \Services_User_Controller();
    }

    /**
     * Gets the public 'tiki.controller.user_conditions' shared service.
     *
     * @return \Services_User_ConditionsController
     */
    protected function getTiki_Controller_UserConditionsService()
    {
        return $this->services['tiki.controller.user_conditions'] = new \Services_User_ConditionsController();
    }

    /**
     * Gets the public 'tiki.controller.vimeo' shared service.
     *
     * @return \Services_File_VimeoController
     */
    protected function getTiki_Controller_VimeoService()
    {
        return $this->services['tiki.controller.vimeo'] = new \Services_File_VimeoController();
    }

    /**
     * Gets the public 'tiki.controller.wiki' shared service.
     *
     * @return \Services_Wiki_Controller
     */
    protected function getTiki_Controller_WikiService()
    {
        return $this->services['tiki.controller.wiki'] = new \Services_Wiki_Controller();
    }

    /**
     * Gets the public 'tiki.controller.wiki_structure' shared service.
     *
     * @return \Services_Wiki_StructureController
     */
    protected function getTiki_Controller_WikiStructureService()
    {
        return $this->services['tiki.controller.wiki_structure'] = new \Services_Wiki_StructureController();
    }

    /**
     * Gets the public 'tiki.controller.workspace' shared service.
     *
     * @return \Services_Workspace_Controller
     */
    protected function getTiki_Controller_WorkspaceService()
    {
        return $this->services['tiki.controller.workspace'] = new \Services_Workspace_Controller();
    }

    /**
     * Gets the public 'tiki.controller.xmpp' shared service.
     *
     * @return \Services_Xmpp_Controller
     */
    protected function getTiki_Controller_XmppService()
    {
        return $this->services['tiki.controller.xmpp'] = new \Services_Xmpp_Controller();
    }

    /**
     * Gets the public 'tiki.lib.access' shared service.
     *
     * @return \TikiAccessLib
     */
    protected function getTiki_Lib_AccessService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/tikiaccesslib.php';

        return $this->services['tiki.lib.access'] = new \TikiAccessLib();
    }

    /**
     * Gets the public 'tiki.lib.accounting' shared service.
     *
     * @return \AccountingLib
     */
    protected function getTiki_Lib_AccountingService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/accounting/accountinglib.php';

        return $this->services['tiki.lib.accounting'] = new \AccountingLib();
    }

    /**
     * Gets the public 'tiki.lib.activity' shared service.
     *
     * @return \ActivityLib
     */
    protected function getTiki_Lib_ActivityService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/activity/activitylib.php';

        return $this->services['tiki.lib.activity'] = new \ActivityLib();
    }

    /**
     * Gets the public 'tiki.lib.admin' shared service.
     *
     * @return \AdminLib
     */
    protected function getTiki_Lib_AdminService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/admin/adminlib.php';

        return $this->services['tiki.lib.admin'] = new \AdminLib();
    }

    /**
     * Gets the public 'tiki.lib.areas' shared service.
     *
     * @return \AreasLib
     */
    protected function getTiki_Lib_AreasService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/perspective/binderlib.php';

        return $this->services['tiki.lib.areas'] = new \AreasLib();
    }

    /**
     * Gets the public 'tiki.lib.art' shared service.
     *
     * @return \ArtLib
     */
    protected function getTiki_Lib_ArtService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/articles/artlib.php';

        return $this->services['tiki.lib.art'] = new \ArtLib();
    }

    /**
     * Gets the public 'tiki.lib.attribute' shared service.
     *
     * @return \AttributeLib
     */
    protected function getTiki_Lib_AttributeService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/attributes/attributelib.php';

        return $this->services['tiki.lib.attribute'] = new \AttributeLib();
    }

    /**
     * Gets the public 'tiki.lib.autosave' shared service.
     *
     * @return \AutoSaveLib
     */
    protected function getTiki_Lib_AutosaveService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/ajax/autosave.php';

        return $this->services['tiki.lib.autosave'] = new \AutoSaveLib();
    }

    /**
     * Gets the public 'tiki.lib.avatar' shared service.
     *
     * @return \AvatarLib
     */
    protected function getTiki_Lib_AvatarService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/avatarlib.php';

        return $this->services['tiki.lib.avatar'] = new \AvatarLib();
    }

    /**
     * Gets the public 'tiki.lib.banner' shared service.
     *
     * @return \BannerLib
     */
    protected function getTiki_Lib_BannerService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/banners/bannerlib.php';

        return $this->services['tiki.lib.banner'] = new \BannerLib();
    }

    /**
     * Gets the public 'tiki.lib.bigbluebutton' shared service.
     *
     * @return \BigBlueButtonLib
     */
    protected function getTiki_Lib_BigbluebuttonService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/bigbluebuttonlib.php';

        return $this->services['tiki.lib.bigbluebutton'] = new \BigBlueButtonLib();
    }

    /**
     * Gets the public 'tiki.lib.blacklist' shared service.
     *
     * @return \blacklistLib
     */
    protected function getTiki_Lib_BlacklistService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/user/blacklistlib.php';

        return $this->services['tiki.lib.blacklist'] = new \blacklistLib();
    }

    /**
     * Gets the public 'tiki.lib.blog' shared service.
     *
     * @return \BlogLib
     */
    protected function getTiki_Lib_BlogService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/blogs/bloglib.php';

        return $this->services['tiki.lib.blog'] = new \BlogLib();
    }

    /**
     * Gets the public 'tiki.lib.cache' shared service.
     *
     * @return \CacheLib
     */
    protected function getTiki_Lib_CacheService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/cache/cachelib.php';

        return $this->services['tiki.lib.cache'] = new \CacheLib();
    }

    /**
     * Gets the public 'tiki.lib.calendar' shared service.
     *
     * @return \CalendarLib
     */
    protected function getTiki_Lib_CalendarService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/calendar/calendarlib.php';

        return $this->services['tiki.lib.calendar'] = new \CalendarLib();
    }

    /**
     * Gets the public 'tiki.lib.captcha' shared service.
     *
     * @return \Captcha
     */
    protected function getTiki_Lib_CaptchaService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/captcha/captchalib.php';

        return $this->services['tiki.lib.captcha'] = new \Captcha();
    }

    /**
     * Gets the public 'tiki.lib.cart' shared service.
     *
     * @return \CartLib
     */
    protected function getTiki_Lib_CartService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/payment/cartlib.php';

        return $this->services['tiki.lib.cart'] = new \CartLib();
    }

    /**
     * Gets the public 'tiki.lib.categ' shared service.
     *
     * @return \CategLib
     */
    protected function getTiki_Lib_CategService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/categories/categlib.php';

        return $this->services['tiki.lib.categ'] = new \CategLib();
    }

    /**
     * Gets the public 'tiki.lib.comments' shared service.
     *
     * @return \Comments
     */
    protected function getTiki_Lib_CommentsService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/comments/commentslib.php';

        return $this->services['tiki.lib.comments'] = new \Comments();
    }

    /**
     * Gets the public 'tiki.lib.connect' shared service.
     *
     * @return \Tiki_Connect_Client
     */
    protected function getTiki_Lib_ConnectService()
    {
        return $this->services['tiki.lib.connect'] = new \Tiki_Connect_Client();
    }

    /**
     * Gets the public 'tiki.lib.connect_server' shared service.
     *
     * @return \Tiki_Connect_Server
     */
    protected function getTiki_Lib_ConnectServerService()
    {
        return $this->services['tiki.lib.connect_server'] = new \Tiki_Connect_Server();
    }

    /**
     * Gets the public 'tiki.lib.contact' shared service.
     *
     * @return \ContactLib
     */
    protected function getTiki_Lib_ContactService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/webmail/contactlib.php';

        return $this->services['tiki.lib.contact'] = new \ContactLib();
    }

    /**
     * Gets the public 'tiki.lib.contribution' shared service.
     *
     * @return \ContributionLib
     */
    protected function getTiki_Lib_ContributionService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/contribution/contributionlib.php';

        return $this->services['tiki.lib.contribution'] = new \ContributionLib();
    }

    /**
     * Gets the public 'tiki.lib.credits' shared service.
     *
     * @return \CreditsLib
     */
    protected function getTiki_Lib_CreditsService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/credits/creditslib.php';

        return $this->services['tiki.lib.credits'] = new \CreditsLib();
    }

    /**
     * Gets the public 'tiki.lib.crypt' shared service.
     *
     * @return \CryptLib
     */
    protected function getTiki_Lib_CryptService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/crypt/cryptlib.php';

        return $this->services['tiki.lib.crypt'] = new \CryptLib();
    }

    /**
     * Gets the public 'tiki.lib.css' shared service.
     *
     * @return \cssLib
     */
    protected function getTiki_Lib_CssService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/csslib.php';

        return $this->services['tiki.lib.css'] = new \cssLib();
    }

    /**
     * Gets the public 'tiki.lib.custom_route' shared service.
     *
     * @return \Tiki\CustomRoute\CustomRouteLib
     */
    protected function getTiki_Lib_CustomRouteService()
    {
        return $this->services['tiki.lib.custom_route'] = new \Tiki\CustomRoute\CustomRouteLib();
    }

    /**
     * Gets the public 'tiki.lib.dcs' shared service.
     *
     * @return \DCSLib
     */
    protected function getTiki_Lib_DcsService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/dcs/dcslib.php';

        return $this->services['tiki.lib.dcs'] = new \DCSLib();
    }

    /**
     * Gets the public 'tiki.lib.edit' shared service.
     *
     * @return \EditLib
     */
    protected function getTiki_Lib_EditService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/wiki/editlib.php';

        return $this->services['tiki.lib.edit'] = new \EditLib();
    }

    /**
     * Gets the public 'tiki.lib.events' shared service.
     *
     * @return \Tiki_Event_Manager
     */
    protected function getTiki_Lib_EventsService()
    {
        return $this->services['tiki.lib.events'] = new \Tiki_Event_Manager();
    }

    /**
     * Gets the public 'tiki.lib.faq' shared service.
     *
     * @return \FaqLib
     */
    protected function getTiki_Lib_FaqService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/faqs/faqlib.php';

        return $this->services['tiki.lib.faq'] = new \FaqLib();
    }

    /**
     * Gets the public 'tiki.lib.federatedsearch' shared service.
     *
     * @return \FederatedSearchLib
     */
    protected function getTiki_Lib_FederatedsearchService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/search/federatedsearchlib.php';

        return $this->services['tiki.lib.federatedsearch'] = new \FederatedSearchLib(${($_ = isset($this->services['tiki.lib.unifiedsearch']) ? $this->services['tiki.lib.unifiedsearch'] : $this->getTiki_Lib_UnifiedsearchService()) && false ?: '_'});
    }

    /**
     * Gets the public 'tiki.lib.filegal' shared service.
     *
     * @return \FileGalLib
     */
    protected function getTiki_Lib_FilegalService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/filegals/filegallib.php';

        return $this->services['tiki.lib.filegal'] = new \FileGalLib();
    }

    /**
     * Gets the public 'tiki.lib.filegalbatch' shared service.
     *
     * @return \FileGalBatchLib
     */
    protected function getTiki_Lib_FilegalbatchService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/filegals/filegalbatchlib.php';

        return $this->services['tiki.lib.filegalbatch'] = new \FileGalBatchLib();
    }

    /**
     * Gets the public 'tiki.lib.filegalcopy' shared service.
     *
     * @return \FileGalCopyLib
     */
    protected function getTiki_Lib_FilegalcopyService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/filegals/filegalcopylib.php';

        return $this->services['tiki.lib.filegalcopy'] = new \FileGalCopyLib();
    }

    /**
     * Gets the public 'tiki.lib.flaggedrevision' shared service.
     *
     * @return \FlaggedRevisionLib
     */
    protected function getTiki_Lib_FlaggedrevisionService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/wiki/flaggedrevisionlib.php';

        return $this->services['tiki.lib.flaggedrevision'] = new \FlaggedRevisionLib();
    }

    /**
     * Gets the public 'tiki.lib.freetag' shared service.
     *
     * @return \FreetagLib
     */
    protected function getTiki_Lib_FreetagService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/freetag/freetaglib.php';

        return $this->services['tiki.lib.freetag'] = new \FreetagLib();
    }

    /**
     * Gets the public 'tiki.lib.geo' shared service.
     *
     * @return \GeoLib
     */
    protected function getTiki_Lib_GeoService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/geo/geolib.php';

        return $this->services['tiki.lib.geo'] = new \GeoLib();
    }

    /**
     * Gets the public 'tiki.lib.goal' shared service.
     *
     * @return \GoalLib
     */
    protected function getTiki_Lib_GoalService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/goal/goallib.php';

        return $this->services['tiki.lib.goal'] = new \GoalLib();
    }

    /**
     * Gets the public 'tiki.lib.goalevent' shared service.
     *
     * @return \GoalEventLib
     */
    protected function getTiki_Lib_GoaleventService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/goal/eventlib.php';

        return $this->services['tiki.lib.goalevent'] = new \GoalEventLib();
    }

    /**
     * Gets the public 'tiki.lib.goalreward' shared service.
     *
     * @return \GoalRewardLib
     */
    protected function getTiki_Lib_GoalrewardService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/goal/rewardlib.php';

        return $this->services['tiki.lib.goalreward'] = new \GoalRewardLib();
    }

    /**
     * Gets the public 'tiki.lib.groupalert' shared service.
     *
     * @return \GroupAlertLib
     */
    protected function getTiki_Lib_GroupalertService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/groupalert/groupalertlib.php';

        return $this->services['tiki.lib.groupalert'] = new \GroupAlertLib();
    }

    /**
     * Gets the public 'tiki.lib.h5p' shared service.
     *
     * @return \H5PLib
     */
    protected function getTiki_Lib_H5pService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/filegals/h5plib.php';

        return $this->services['tiki.lib.h5p'] = new \H5PLib();
    }

    /**
     * Gets the public 'tiki.lib.header' shared service.
     *
     * @return \HeaderLib
     */
    protected function getTiki_Lib_HeaderService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/headerlib.php';

        return $this->services['tiki.lib.header'] = new \HeaderLib();
    }

    /**
     * Gets the public 'tiki.lib.hist' shared service.
     *
     * @return \HistLib
     */
    protected function getTiki_Lib_HistService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/wiki/histlib.php';

        return $this->services['tiki.lib.hist'] = new \HistLib();
    }

    /**
     * Gets the public 'tiki.lib.iconset' shared service.
     *
     * @return \IconsetLib
     */
    protected function getTiki_Lib_IconsetService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/theme/iconsetlib.php';

        return $this->services['tiki.lib.iconset'] = new \IconsetLib();
    }

    /**
     * Gets the public 'tiki.lib.imagegal' shared service.
     *
     * @return \ImageGalsLib
     */
    protected function getTiki_Lib_ImagegalService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/imagegals/imagegallib.php';

        return $this->services['tiki.lib.imagegal'] = new \ImageGalsLib();
    }

    /**
     * Gets the public 'tiki.lib.kalturaadmin' shared service.
     *
     * @return \KalturaLib
     */
    protected function getTiki_Lib_KalturaadminService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/videogals/kalturalib.php';

        return $this->services['tiki.lib.kalturaadmin'] = new \KalturaLib('2');
    }

    /**
     * Gets the public 'tiki.lib.kalturauser' shared service.
     *
     * @return \KalturaLib
     */
    protected function getTiki_Lib_KalturauserService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/videogals/kalturalib.php';

        return $this->services['tiki.lib.kalturauser'] = new \KalturaLib('0');
    }

    /**
     * Gets the public 'tiki.lib.language' shared service.
     *
     * @return \Language
     */
    protected function getTiki_Lib_LanguageService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/language/Language.php';

        return $this->services['tiki.lib.language'] = new \Language();
    }

    /**
     * Gets the public 'tiki.lib.languagetranslations' shared service.
     *
     * @return \LanguageTranslations
     */
    protected function getTiki_Lib_LanguagetranslationsService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/language/LanguageTranslations.php';

        return $this->services['tiki.lib.languagetranslations'] = new \LanguageTranslations();
    }

    /**
     * Gets the public 'tiki.lib.ldap' shared service.
     *
     * @return \LdapLib
     */
    protected function getTiki_Lib_LdapService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/ldap/ldaplib.php';

        return $this->services['tiki.lib.ldap'] = new \LdapLib();
    }

    /**
     * Gets the public 'tiki.lib.login' shared service.
     *
     * @return \LoginLib
     */
    protected function getTiki_Lib_LoginService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/loginlib.php';

        return $this->services['tiki.lib.login'] = new \LoginLib();
    }

    /**
     * Gets the public 'tiki.lib.logs' shared service.
     *
     * @return \LogsLib
     */
    protected function getTiki_Lib_LogsService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/logs/logslib.php';

        return $this->services['tiki.lib.logs'] = new \LogsLib();
    }

    /**
     * Gets the public 'tiki.lib.logsqry' shared service.
     *
     * @return \LogsQueryLib
     */
    protected function getTiki_Lib_LogsqryService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/logs/logsquerylib.php';

        return $this->services['tiki.lib.logsqry'] = new \LogsQueryLib();
    }

    /**
     * Gets the public 'tiki.lib.mailin' shared service.
     *
     * @return \MailinLib
     */
    protected function getTiki_Lib_MailinService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/mailin/mailinlib.php';

        return $this->services['tiki.lib.mailin'] = new \MailinLib();
    }

    /**
     * Gets the public 'tiki.lib.memcache' shared service.
     *
     * @return \Memcachelib
     */
    protected function getTiki_Lib_MemcacheService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/cache/memcachelib.php';

        return $this->services['tiki.lib.memcache'] = new \Memcachelib();
    }

    /**
     * Gets the public 'tiki.lib.menu' shared service.
     *
     * @return \MenuLib
     */
    protected function getTiki_Lib_MenuService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/menubuilder/menulib.php';

        return $this->services['tiki.lib.menu'] = new \MenuLib();
    }

    /**
     * Gets the public 'tiki.lib.message' shared service.
     *
     * @return \Messu
     */
    protected function getTiki_Lib_MessageService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/messu/messulib.php';

        return $this->services['tiki.lib.message'] = new \Messu();
    }

    /**
     * Gets the public 'tiki.lib.mime' shared service.
     *
     * @return \MimeLib
     */
    protected function getTiki_Lib_MimeService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/mime/mimelib.php';

        return $this->services['tiki.lib.mime'] = new \MimeLib();
    }

    /**
     * Gets the public 'tiki.lib.mod' shared service.
     *
     * @return \ModLib
     */
    protected function getTiki_Lib_ModService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/modules/modlib.php';

        return $this->services['tiki.lib.mod'] = new \ModLib();
    }

    /**
     * Gets the public 'tiki.lib.monitor' shared service.
     *
     * @return \MonitorLib
     */
    protected function getTiki_Lib_MonitorService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/user/monitorlib.php';

        return $this->services['tiki.lib.monitor'] = new \MonitorLib();
    }

    /**
     * Gets the public 'tiki.lib.monitormail' shared service.
     *
     * @return \MonitorMailLib
     */
    protected function getTiki_Lib_MonitormailService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/user/monitormaillib.php';

        return $this->services['tiki.lib.monitormail'] = new \MonitorMailLib();
    }

    /**
     * Gets the public 'tiki.lib.multilingual' shared service.
     *
     * @return \MultilingualLib
     */
    protected function getTiki_Lib_MultilingualService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/multilingual/multilinguallib.php';

        return $this->services['tiki.lib.multilingual'] = new \MultilingualLib();
    }

    /**
     * Gets the public 'tiki.lib.notification' shared service.
     *
     * @return \NotificationLib
     */
    protected function getTiki_Lib_NotificationService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/notifications/notificationlib.php';

        return $this->services['tiki.lib.notification'] = new \NotificationLib();
    }

    /**
     * Gets the public 'tiki.lib.oauth' shared service.
     *
     * @return \OAuthLib
     */
    protected function getTiki_Lib_OauthService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/oauthlib.php';

        return $this->services['tiki.lib.oauth'] = new \OAuthLib();
    }

    /**
     * Gets the public 'tiki.lib.object' shared service.
     *
     * @return \ObjectLib
     */
    protected function getTiki_Lib_ObjectService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/objectlib.php';

        return $this->services['tiki.lib.object'] = new \ObjectLib();
    }

    /**
     * Gets the public 'tiki.lib.objectselector' shared service.
     *
     * @return \Tiki\Object\Selector
     */
    protected function getTiki_Lib_ObjectselectorService()
    {
        return $this->services['tiki.lib.objectselector'] = new \Tiki\Object\Selector(${($_ = isset($this->services['tiki.lib.object']) ? $this->services['tiki.lib.object'] : $this->getTiki_Lib_ObjectService()) && false ?: '_'});
    }

    /**
     * Gets the public 'tiki.lib.pagecontent' shared service.
     *
     * @return \PageContentLib
     */
    protected function getTiki_Lib_PagecontentService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/rss/pagecontentlib.php';

        return $this->services['tiki.lib.pagecontent'] = new \PageContentLib();
    }

    /**
     * Gets the public 'tiki.lib.parser' shared service.
     *
     * @return \ParserLib
     */
    protected function getTiki_Lib_ParserService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/parser/parserlib.php';

        return $this->services['tiki.lib.parser'] = new \ParserLib();
    }

    /**
     * Gets the public 'tiki.lib.payment' shared service.
     *
     * @return \PaymentLib
     */
    protected function getTiki_Lib_PaymentService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/payment/paymentlib.php';

        return $this->services['tiki.lib.payment'] = new \PaymentLib();
    }

    /**
     * Gets the public 'tiki.lib.perspective' shared service.
     *
     * @return \PerspectiveLib
     */
    protected function getTiki_Lib_PerspectiveService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/perspectivelib.php';

        return $this->services['tiki.lib.perspective'] = new \PerspectiveLib();
    }

    /**
     * Gets the public 'tiki.lib.poll' shared service.
     *
     * @return \PollLib
     */
    protected function getTiki_Lib_PollService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/polls/polllib.php';

        return $this->services['tiki.lib.poll'] = new \PollLib();
    }

    /**
     * Gets the public 'tiki.lib.prefs' shared service.
     *
     * @return \PreferencesLib
     */
    protected function getTiki_Lib_PrefsService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/prefslib.php';

        return $this->services['tiki.lib.prefs'] = new \PreferencesLib();
    }

    /**
     * Gets the public 'tiki.lib.quantify' shared service.
     *
     * @return \QuantifyLib
     */
    protected function getTiki_Lib_QuantifyService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/wiki/quantifylib.php';

        return $this->services['tiki.lib.quantify'] = new \QuantifyLib();
    }

    /**
     * Gets the public 'tiki.lib.queue' shared service.
     *
     * @return \QueueLib
     */
    protected function getTiki_Lib_QueueService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/queuelib.php';

        return $this->services['tiki.lib.queue'] = new \QueueLib();
    }

    /**
     * Gets the public 'tiki.lib.quiz' shared service.
     *
     * @return \QuizLib
     */
    protected function getTiki_Lib_QuizService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/quizzes/quizlib.php';

        return $this->services['tiki.lib.quiz'] = new \QuizLib();
    }

    /**
     * Gets the public 'tiki.lib.rating' shared service.
     *
     * @return \RatingLib
     */
    protected function getTiki_Lib_RatingService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/rating/ratinglib.php';

        return $this->services['tiki.lib.rating'] = new \RatingLib();
    }

    /**
     * Gets the public 'tiki.lib.ratingconfig' shared service.
     *
     * @return \RatingConfigLib
     */
    protected function getTiki_Lib_RatingconfigService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/rating/configlib.php';

        return $this->services['tiki.lib.ratingconfig'] = new \RatingConfigLib();
    }

    /**
     * Gets the public 'tiki.lib.recommendationcontentbatch' shared service.
     *
     * @return \Tiki\Recommendation\BatchProcessor
     */
    protected function getTiki_Lib_RecommendationcontentbatchService()
    {
        return $this->services['tiki.lib.recommendationcontentbatch'] = new \Tiki\Recommendation\BatchProcessor(${($_ = isset($this->services['tiki.recommendation.activity.store']) ? $this->services['tiki.recommendation.activity.store'] : $this->getTiki_Recommendation_Activity_StoreService()) && false ?: '_'}, ${($_ = isset($this->services['tiki.recommendation.content.set']) ? $this->services['tiki.recommendation.content.set'] : $this->services['tiki.recommendation.content.set'] = new \Tiki\Recommendation\EngineSet()) && false ?: '_'});
    }

    /**
     * Gets the public 'tiki.lib.references' shared service.
     *
     * @return \ReferencesLib
     */
    protected function getTiki_Lib_ReferencesService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/references/referenceslib.php';

        return $this->services['tiki.lib.references'] = new \ReferencesLib();
    }

    /**
     * Gets the public 'tiki.lib.registration' shared service.
     *
     * @return \RegistrationLib
     */
    protected function getTiki_Lib_RegistrationService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/registration/registrationlib.php';

        return $this->services['tiki.lib.registration'] = new \RegistrationLib();
    }

    /**
     * Gets the public 'tiki.lib.relation' shared service.
     *
     * @return \RelationLib
     */
    protected function getTiki_Lib_RelationService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/attributes/relationlib.php';

        return $this->services['tiki.lib.relation'] = new \RelationLib();
    }

    /**
     * Gets the public 'tiki.lib.rss' shared service.
     *
     * @return \RSSLib
     */
    protected function getTiki_Lib_RssService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/rss/rsslib.php';

        return $this->services['tiki.lib.rss'] = new \RSSLib();
    }

    /**
     * Gets the public 'tiki.lib.scheduler' shared service.
     *
     * @return \SchedulersLib
     */
    protected function getTiki_Lib_SchedulerService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/schedulerslib.php';

        return $this->services['tiki.lib.scheduler'] = new \SchedulersLib();
    }

    /**
     * Gets the public 'tiki.lib.score' shared service.
     *
     * @return \ScoreLib
     */
    protected function getTiki_Lib_ScoreService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/score/scorelib.php';

        return $this->services['tiki.lib.score'] = new \ScoreLib();
    }

    /**
     * Gets the public 'tiki.lib.scorm' shared service.
     *
     * @return \ScormLib
     */
    protected function getTiki_Lib_ScormService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/filegals/scormlib.php';

        return $this->services['tiki.lib.scorm'] = new \ScormLib();
    }

    /**
     * Gets the public 'tiki.lib.searchstats' shared service.
     *
     * @return \SearchStatsLib
     */
    protected function getTiki_Lib_SearchstatsService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/search/searchstatslib.php';

        return $this->services['tiki.lib.searchstats'] = new \SearchStatsLib();
    }

    /**
     * Gets the public 'tiki.lib.semantic' shared service.
     *
     * @return \SemanticLib
     */
    protected function getTiki_Lib_SemanticService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/wiki/semanticlib.php';

        return $this->services['tiki.lib.semantic'] = new \SemanticLib();
    }

    /**
     * Gets the public 'tiki.lib.service' shared service.
     *
     * @return \ServiceLib
     */
    protected function getTiki_Lib_ServiceService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/servicelib.php';

        return $this->services['tiki.lib.service'] = new \ServiceLib();
    }

    /**
     * Gets the public 'tiki.lib.sheet' shared service.
     *
     * @return \SheetLib
     */
    protected function getTiki_Lib_SheetService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/sheet/sheetlib.php';

        return $this->services['tiki.lib.sheet'] = new \SheetLib();
    }

    /**
     * Gets the public 'tiki.lib.slugmanager' shared service.
     *
     * @return \Tiki\Wiki\SlugManager
     */
    protected function getTiki_Lib_SlugmanagerService()
    {
        $this->services['tiki.lib.slugmanager'] = $instance = new \Tiki\Wiki\SlugManager();

        $instance->addGenerator(${($_ = isset($this->services['tiki.wiki.slug.dash']) ? $this->services['tiki.wiki.slug.dash'] : $this->services['tiki.wiki.slug.dash'] = new \Tiki\Wiki\SlugManager\DashGenerator()) && false ?: '_'});
        $instance->addGenerator(${($_ = isset($this->services['tiki.wiki.slug.underscore']) ? $this->services['tiki.wiki.slug.underscore'] : $this->services['tiki.wiki.slug.underscore'] = new \Tiki\Wiki\SlugManager\UnderscoreGenerator()) && false ?: '_'});
        $instance->addGenerator(${($_ = isset($this->services['tiki.wiki.slug.urlencode']) ? $this->services['tiki.wiki.slug.urlencode'] : $this->services['tiki.wiki.slug.urlencode'] = new \Tiki\Wiki\SlugManager\UrlencodeGenerator()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'tiki.lib.smarty' shared service.
     *
     * @return \Smarty_Tiki
     */
    protected function getTiki_Lib_SmartyService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/init/smarty.php';

        return $this->services['tiki.lib.smarty'] = new \Smarty_Tiki();
    }

    /**
     * Gets the public 'tiki.lib.social' shared service.
     *
     * @return \SocialLib
     */
    protected function getTiki_Lib_SocialService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/user/sociallib.php';

        return $this->services['tiki.lib.social'] = new \SocialLib();
    }

    /**
     * Gets the public 'tiki.lib.stats' shared service.
     *
     * @return \StatsLib
     */
    protected function getTiki_Lib_StatsService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/stats/statslib.php';

        return $this->services['tiki.lib.stats'] = new \StatsLib();
    }

    /**
     * Gets the public 'tiki.lib.storedsearch' shared service.
     *
     * @return \StoredSearchLib
     */
    protected function getTiki_Lib_StoredsearchService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/search/storedsearchlib.php';

        return $this->services['tiki.lib.storedsearch'] = new \StoredSearchLib();
    }

    /**
     * Gets the public 'tiki.lib.struct' shared service.
     *
     * @return \StructLib
     */
    protected function getTiki_Lib_StructService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/structures/structlib.php';

        return $this->services['tiki.lib.struct'] = new \StructLib();
    }

    /**
     * Gets the public 'tiki.lib.symbols' shared service.
     *
     * @return \Tiki_Profile_SymbolLoader
     */
    protected function getTiki_Lib_SymbolsService()
    {
        return $this->services['tiki.lib.symbols'] = new \Tiki_Profile_SymbolLoader();
    }

    /**
     * Gets the public 'tiki.lib.tabular' shared service.
     *
     * @return \Tracker\Tabular\Manager
     */
    protected function getTiki_Lib_TabularService()
    {
        return $this->services['tiki.lib.tabular'] = new \Tracker\Tabular\Manager(${($_ = isset($this->services['tiki.lib.db']) ? $this->services['tiki.lib.db'] : $this->get('tiki.lib.db')) && false ?: '_'});
    }

    /**
     * Gets the public 'tiki.lib.template' shared service.
     *
     * @return \TemplatesLib
     */
    protected function getTiki_Lib_TemplateService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/templates/templateslib.php';

        return $this->services['tiki.lib.template'] = new \TemplatesLib();
    }

    /**
     * Gets the public 'tiki.lib.theme' shared service.
     *
     * @return \ThemeLib
     */
    protected function getTiki_Lib_ThemeService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/theme/themelib.php';

        return $this->services['tiki.lib.theme'] = new \ThemeLib();
    }

    /**
     * Gets the public 'tiki.lib.themecontrol' shared service.
     *
     * @return \ThemeControlLib
     */
    protected function getTiki_Lib_ThemecontrolService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/theme/themecontrollib.php';

        return $this->services['tiki.lib.themecontrol'] = new \ThemeControlLib();
    }

    /**
     * Gets the public 'tiki.lib.tikicalendar' shared service.
     *
     * @return \TikiCalendarLib
     */
    protected function getTiki_Lib_TikicalendarService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/calendar/tikicalendarlib.php';

        return $this->services['tiki.lib.tikicalendar'] = new \TikiCalendarLib();
    }

    /**
     * Gets the public 'tiki.lib.tikidate' shared service.
     *
     * @return \TikiDate
     */
    protected function getTiki_Lib_TikidateService()
    {
        return $this->services['tiki.lib.tikidate'] = new \TikiDate();
    }

    /**
     * Gets the public 'tiki.lib.todo' shared service.
     *
     * @return \TodoLib
     */
    protected function getTiki_Lib_TodoService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/todolib.php';

        return $this->services['tiki.lib.todo'] = new \TodoLib();
    }

    /**
     * Gets the public 'tiki.lib.trk' shared service.
     *
     * @return \TrackerLib
     */
    protected function getTiki_Lib_TrkService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/trackers/trackerlib.php';

        return $this->services['tiki.lib.trk'] = new \TrackerLib();
    }

    /**
     * Gets the public 'tiki.lib.unifiedsearch' shared service.
     *
     * @return \UnifiedSearchLib
     */
    protected function getTiki_Lib_UnifiedsearchService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/search/searchlib-unified.php';

        return $this->services['tiki.lib.unifiedsearch'] = new \UnifiedSearchLib();
    }

    /**
     * Gets the public 'tiki.lib.user' shared service.
     *
     * @return \UsersLib
     */
    protected function getTiki_Lib_UserService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/userslib.php';

        return $this->services['tiki.lib.user'] = new \UsersLib();
    }

    /**
     * Gets the public 'tiki.lib.usermailin' shared service.
     *
     * @return \UserMailinLib
     */
    protected function getTiki_Lib_UsermailinService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/mailin/usermailinlib.php';

        return $this->services['tiki.lib.usermailin'] = new \UserMailinLib();
    }

    /**
     * Gets the public 'tiki.lib.usermodules' shared service.
     *
     * @return \UserModulesLib
     */
    protected function getTiki_Lib_UsermodulesService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/usermodules/usermoduleslib.php';

        return $this->services['tiki.lib.usermodules'] = new \UserModulesLib();
    }

    /**
     * Gets the public 'tiki.lib.userprefs' shared service.
     *
     * @return \UserPrefsLib
     */
    protected function getTiki_Lib_UserprefsService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/userprefs/userprefslib.php';

        return $this->services['tiki.lib.userprefs'] = new \UserPrefsLib();
    }

    /**
     * Gets the public 'tiki.lib.validators' shared service.
     *
     * @return \Validators
     */
    protected function getTiki_Lib_ValidatorsService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/validatorslib.php';

        return $this->services['tiki.lib.validators'] = new \Validators();
    }

    /**
     * Gets the public 'tiki.lib.version' shared service.
     *
     * @return \TWVersion
     */
    protected function getTiki_Lib_VersionService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/setup/twversion.class.php';

        return $this->services['tiki.lib.version'] = new \TWVersion();
    }

    /**
     * Gets the public 'tiki.lib.vimeo' shared service.
     *
     * @return \VimeoLib
     */
    protected function getTiki_Lib_VimeoService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/filegals/vimeolib.php';

        return $this->services['tiki.lib.vimeo'] = new \VimeoLib(${($_ = isset($this->services['tiki.lib.oauth']) ? $this->services['tiki.lib.oauth'] : $this->getTiki_Lib_OauthService()) && false ?: '_'});
    }

    /**
     * Gets the public 'tiki.lib.wiki' shared service.
     *
     * @return \WikiLib
     */
    protected function getTiki_Lib_WikiService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/wiki/wikilib.php';

        return $this->services['tiki.lib.wiki'] = new \WikiLib();
    }

    /**
     * Gets the public 'tiki.lib.wizard' shared service.
     *
     * @return \WizardLib
     */
    protected function getTiki_Lib_WizardService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/wizard/wizardlib.php';

        return $this->services['tiki.lib.wizard'] = new \WizardLib();
    }

    /**
     * Gets the public 'tiki.lib.wysiwyg' shared service.
     *
     * @return \WYSIWYGLib
     */
    protected function getTiki_Lib_WysiwygService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/ckeditor_tiki/wysiwyglib.php';

        return $this->services['tiki.lib.wysiwyg'] = new \WYSIWYGLib();
    }

    /**
     * Gets the public 'tiki.lib.xmpp' shared service.
     *
     * @return \XMPPLib
     */
    protected function getTiki_Lib_XmppService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/xmpp/xmpplib.php';

        return $this->services['tiki.lib.xmpp'] = new \XMPPLib();
    }

    /**
     * Gets the public 'tiki.lib.zotero' shared service.
     *
     * @return \ZoteroLib
     */
    protected function getTiki_Lib_ZoteroService()
    {
        include_once 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/zoterolib.php';

        return $this->services['tiki.lib.zotero'] = new \ZoteroLib();
    }

    /**
     * Gets the public 'tiki.mailin.provider.articleput' shared service.
     *
     * @return \Tiki\MailIn\Provider\ArticlePutProvider
     */
    protected function getTiki_Mailin_Provider_ArticleputService()
    {
        return $this->services['tiki.mailin.provider.articleput'] = new \Tiki\MailIn\Provider\ArticlePutProvider();
    }

    /**
     * Gets the public 'tiki.mailin.provider.replyhandler' shared service.
     *
     * @return \Tiki\MailIn\Provider\ReplyHandlerProvider
     */
    protected function getTiki_Mailin_Provider_ReplyhandlerService()
    {
        return $this->services['tiki.mailin.provider.replyhandler'] = new \Tiki\MailIn\Provider\ReplyHandlerProvider();
    }

    /**
     * Gets the public 'tiki.mailin.provider.wiki' shared service.
     *
     * @return \Tiki\MailIn\Provider\WikiMultipleProvider
     */
    protected function getTiki_Mailin_Provider_WikiService()
    {
        return $this->services['tiki.mailin.provider.wiki'] = new \Tiki\MailIn\Provider\WikiMultipleProvider();
    }

    /**
     * Gets the public 'tiki.mailin.provider.wikiappend' shared service.
     *
     * @return \Tiki\MailIn\Provider\BasicWikiProvider
     */
    protected function getTiki_Mailin_Provider_WikiappendService()
    {
        return $this->services['tiki.mailin.provider.wikiappend'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-append', 'Append to wiki page', 'Tiki\\MailIn\\Action\\WikiAppend');
    }

    /**
     * Gets the public 'tiki.mailin.provider.wikiget' shared service.
     *
     * @return \Tiki\MailIn\Provider\BasicWikiProvider
     */
    protected function getTiki_Mailin_Provider_WikigetService()
    {
        return $this->services['tiki.mailin.provider.wikiget'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-get', 'Send page to user', 'Tiki\\MailIn\\Action\\WikiPut');
    }

    /**
     * Gets the public 'tiki.mailin.provider.wikiprepend' shared service.
     *
     * @return \Tiki\MailIn\Provider\BasicWikiProvider
     */
    protected function getTiki_Mailin_Provider_WikiprependService()
    {
        return $this->services['tiki.mailin.provider.wikiprepend'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-prepend', 'Prepend to wiki page', 'Tiki\\MailIn\\Action\\WikiPrepend');
    }

    /**
     * Gets the public 'tiki.mailin.provider.wikiput' shared service.
     *
     * @return \Tiki\MailIn\Provider\BasicWikiProvider
     */
    protected function getTiki_Mailin_Provider_WikiputService()
    {
        return $this->services['tiki.mailin.provider.wikiput'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-put', 'Create or update wiki page', 'Tiki\\MailIn\\Action\\WikiPut');
    }

    /**
     * Gets the public 'tiki.mailin.providerlist' shared service.
     *
     * @return \Tiki\MailIn\Provider\ProviderList
     */
    protected function getTiki_Mailin_ProviderlistService()
    {
        $this->services['tiki.mailin.providerlist'] = $instance = new \Tiki\MailIn\Provider\ProviderList();

        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.wikiput']) ? $this->services['tiki.mailin.provider.wikiput'] : $this->services['tiki.mailin.provider.wikiput'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-put', 'Create or update wiki page', 'Tiki\\MailIn\\Action\\WikiPut')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.wikiget']) ? $this->services['tiki.mailin.provider.wikiget'] : $this->services['tiki.mailin.provider.wikiget'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-get', 'Send page to user', 'Tiki\\MailIn\\Action\\WikiPut')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.wikiappend']) ? $this->services['tiki.mailin.provider.wikiappend'] : $this->services['tiki.mailin.provider.wikiappend'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-append', 'Append to wiki page', 'Tiki\\MailIn\\Action\\WikiAppend')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.wikiprepend']) ? $this->services['tiki.mailin.provider.wikiprepend'] : $this->services['tiki.mailin.provider.wikiprepend'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-prepend', 'Prepend to wiki page', 'Tiki\\MailIn\\Action\\WikiPrepend')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.wiki']) ? $this->services['tiki.mailin.provider.wiki'] : $this->services['tiki.mailin.provider.wiki'] = new \Tiki\MailIn\Provider\WikiMultipleProvider()) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.replyhandler']) ? $this->services['tiki.mailin.provider.replyhandler'] : $this->services['tiki.mailin.provider.replyhandler'] = new \Tiki\MailIn\Provider\ReplyHandlerProvider()) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.articleput']) ? $this->services['tiki.mailin.provider.articleput'] : $this->services['tiki.mailin.provider.articleput'] = new \Tiki\MailIn\Provider\ArticlePutProvider()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'tiki.recommendation.activity.store' shared service.
     *
     * @return \Tiki\Recommendation\Store\ActivityStore
     */
    protected function getTiki_Recommendation_Activity_StoreService()
    {
        return $this->services['tiki.recommendation.activity.store'] = new \Tiki\Recommendation\Store\ActivityStore(${($_ = isset($this->services['tiki.lib.unifiedsearch']) ? $this->services['tiki.lib.unifiedsearch'] : $this->getTiki_Lib_UnifiedsearchService()) && false ?: '_'}, ${($_ = isset($this->services['tiki.lib.relation']) ? $this->services['tiki.lib.relation'] : $this->getTiki_Lib_RelationService()) && false ?: '_'}, ${($_ = isset($this->services['tiki.lib.events']) ? $this->services['tiki.lib.events'] : $this->services['tiki.lib.events'] = new \Tiki_Event_Manager()) && false ?: '_'});
    }

    /**
     * Gets the public 'tiki.recommendation.content.set' shared service.
     *
     * @return \Tiki\Recommendation\EngineSet
     */
    protected function getTiki_Recommendation_Content_SetService()
    {
        return $this->services['tiki.recommendation.content.set'] = new \Tiki\Recommendation\EngineSet();
    }

    /**
     * Gets the public 'tiki.wiki.slug.dash' shared service.
     *
     * @return \Tiki\Wiki\SlugManager\DashGenerator
     */
    protected function getTiki_Wiki_Slug_DashService()
    {
        return $this->services['tiki.wiki.slug.dash'] = new \Tiki\Wiki\SlugManager\DashGenerator();
    }

    /**
     * Gets the public 'tiki.wiki.slug.underscore' shared service.
     *
     * @return \Tiki\Wiki\SlugManager\UnderscoreGenerator
     */
    protected function getTiki_Wiki_Slug_UnderscoreService()
    {
        return $this->services['tiki.wiki.slug.underscore'] = new \Tiki\Wiki\SlugManager\UnderscoreGenerator();
    }

    /**
     * Gets the public 'tiki.wiki.slug.urlencode' shared service.
     *
     * @return \Tiki\Wiki\SlugManager\UrlencodeGenerator
     */
    protected function getTiki_Wiki_Slug_UrlencodeService()
    {
        return $this->services['tiki.wiki.slug.urlencode'] = new \Tiki\Wiki\SlugManager\UrlencodeGenerator();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array();
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = array();

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => 'C:/xampp/htdocs/tikiwiki/tiki-18.1',
            'tiki.version' => '18.1',
        );
    }
}
