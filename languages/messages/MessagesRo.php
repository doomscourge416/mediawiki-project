<?php
/** Romanian (română)
 *
 * @file
 * @ingroup Languages
 *
 * @author AdiJapan
 * @author Cin
 * @author Danutz
 * @author Emily
 * @author Firilacroco
 * @author Geitost
 * @author Gutza
 * @author KlaudiuMihaila
 * @author Laurap
 * @author Malafaya
 * @author Memo18
 * @author Mihai
 * @author Minisarm
 * @author Misterr
 * @author SCriBu
 * @author Silviubogan
 * @author Stelistcristi
 * @author Strainu
 * @author TTO
 * @author Urhixidur
 * @author לערי ריינהארט
 */

$separatorTransformTable = [ ',' => ".", '.' => ',' ];

/** @phpcs-require-sorted-array */
$magicWords = [
	'anchorencode'              => [ '0', 'CODIFICAREANCORA', 'ANCHORENCODE' ],
	'basepagename'              => [ '1', 'NUMEDEBAZAPAGINA', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'NUMEEDEBAZAPAGINA', 'BASEPAGENAMEE' ],
	'contentlanguage'           => [ '1', 'LIMBACONTINUT', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'                => [ '1', 'NUMARZIUACURENTA', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'NUMARZIUACURENTA2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'NUMEZIUACURENTA', 'CURRENTDAYNAME' ],
	'currenthour'               => [ '1', 'ORACURENTA', 'CURRENTHOUR' ],
	'currentmonth'              => [ '1', 'NUMARLUNACURENTA', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'LUNACURENTA1', 'CURRENTMONTH1' ],
	'currentmonthabbrev'        => [ '1', 'LUNACURENTAABREV', 'CURRENTMONTHABBREV' ],
	'currentmonthname'          => [ '1', 'NUMELUNACURENTA', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'NUMELUNACURENTAGEN', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'               => [ '1', 'TIMPULCURENT', 'CURRENTTIME' ],
	'currenttimestamp'          => [ '1', 'STAMPILATIMPCURENT', 'CURRENTTIMESTAMP' ],
	'currentversion'            => [ '1', 'VERSIUNECURENTA', 'CURRENTVERSION' ],
	'currentweek'               => [ '1', 'SAPTAMANACURENTA', 'CURRENTWEEK' ],
	'currentyear'               => [ '1', 'ANULCURENT', 'CURRENTYEAR' ],
	'defaultsort'               => [ '1', 'SORTAREIMPLICITA:', 'CHEIESORTAREIMPLICITA:', 'CATEGORIESORTAREIMPLICITA:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'directionmark'             => [ '1', 'SEMNDIRECTIE', 'DIRECTIONMARK', 'DIRMARK' ],
	'displaytitle'              => [ '1', 'ARATATITLU', 'DISPLAYTITLE' ],
	'filepath'                  => [ '0', 'CALEAFISIERULUI:', 'FILEPATH:' ],
	'forcetoc'                  => [ '0', '__FORTEAZACUPRINS__', '__FORCETOC__' ],
	'formatdate'                => [ '0', 'formatdata', 'dataformat', 'formatdate', 'dateformat' ],
	'formatnum'                 => [ '0', 'FORMATNR', 'FORMATNUM' ],
	'fullpagename'              => [ '1', 'NUMEPAGINACOMPLET', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'NUMEEPAGINACOMPLET', 'FULLPAGENAMEE' ],
	'fullurl'                   => [ '0', 'URLCOMPLET:', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'URLCOMPLETE:', 'FULLURLE:' ],
	'gender'                    => [ '0', 'GEN:', 'GENDER:' ],
	'grammar'                   => [ '0', 'GRAMATICA:', 'GRAMMAR:' ],
	'hiddencat'                 => [ '1', '__ASCUNDECAT__', '__HIDDENCAT__' ],
	'img_baseline'              => [ '1', 'linia_de_bază', 'baseline' ],
	'img_border'                => [ '1', 'chenar', 'border' ],
	'img_bottom'                => [ '1', 'jos', 'bottom' ],
	'img_center'                => [ '1', 'centru', 'center', 'centre' ],
	'img_framed'                => [ '1', 'cadru', 'frame', 'framed', 'enframed' ],
	'img_frameless'             => [ '1', 'faracadru', 'frameless' ],
	'img_left'                  => [ '1', 'stanga', 'left' ],
	'img_link'                  => [ '1', 'legătură=$1', 'link=$1' ],
	'img_manualthumb'           => [ '1', 'miniatura=$1', 'mini=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'                => [ '1', 'mijloc', 'middle' ],
	'img_none'                  => [ '1', 'nu', 'none' ],
	'img_page'                  => [ '1', 'pagina=$1', 'pagina $1', 'page=$1', 'page $1' ],
	'img_right'                 => [ '1', 'dreapta', 'right' ],
	'img_sub'                   => [ '1', 'indice', 'sub' ],
	'img_super'                 => [ '1', 'exponent', 'super', 'sup' ],
	'img_text_bottom'           => [ '1', 'text-jos', 'text-bottom' ],
	'img_text_top'              => [ '1', 'text-sus', 'text-top' ],
	'img_thumbnail'             => [ '1', 'miniatura', 'mini', 'thumb', 'thumbnail' ],
	'img_top'                   => [ '1', 'sus', 'top' ],
	'img_upright'               => [ '1', 'dreaptasus', 'dreaptasus=$1', 'dreaptasus $1', 'upright', 'upright=$1', 'upright $1' ],
	'language'                  => [ '0', '#LIMBA', '#LANGUAGE' ],
	'lc'                        => [ '0', 'MINUSCULA:', 'LC:' ],
	'lcfirst'                   => [ '0', 'MINUSCULAPRIMA:', 'LCFIRST:' ],
	'localday'                  => [ '1', 'ZIUALOCALA', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'ZIUALOCALA2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'NUMEZIUALOCALA', 'LOCALDAYNAME' ],
	'localhour'                 => [ '1', 'ORALOCALA', 'LOCALHOUR' ],
	'localmonth'                => [ '1', 'LUNALOCALA', 'LUNALOCALA2', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'LUNALOCALA1', 'LOCALMONTH1' ],
	'localmonthabbrev'          => [ '1', 'LUNALOCALAABREV', 'LOCALMONTHABBREV' ],
	'localmonthname'            => [ '1', 'NUMELUNALOCALA', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'NUMELUNALOCALAGEN', 'LOCALMONTHNAMEGEN' ],
	'localtime'                 => [ '1', 'TIMPULLOCAL', 'LOCALTIME' ],
	'localtimestamp'            => [ '1', 'STAMPILATIMPLOCAL', 'LOCALTIMESTAMP' ],
	'localurl'                  => [ '0', 'URLLOCAL:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'URLLOCALE:', 'LOCALURLE:' ],
	'localweek'                 => [ '1', 'SAPTAMANALOCALA', 'LOCALWEEK' ],
	'localyear'                 => [ '1', 'ANULLOCAL', 'LOCALYEAR' ],
	'msg'                       => [ '0', 'MSJ:', 'MSG:' ],
	'msgnw'                     => [ '0', 'MSJNOU:', 'MSGNW:' ],
	'namespace'                 => [ '1', 'SPATIUDENUME', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'SPATIUUDENUME', 'NAMESPACEE' ],
	'newsectionlink'            => [ '1', '__LEGATURASECTIUNENOUA__', '__NEWSECTIONLINK__' ],
	'nocontentconvert'          => [ '0', '__FARACONVERTIRECONTINUT__', '__FCC__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'             => [ '0', '__FARAEDITSECTIUNE__', '__NOEDITSECTION__' ],
	'nogallery'                 => [ '0', '__FARAGALERIE__', '__NOGALLERY__' ],
	'noindex'                   => [ '1', '__FARAINDEX__', '__NOINDEX__' ],
	'nonewsectionlink'          => [ '1', '__FARALEGATURASECTIUNENOUA__', '__NONEWSECTIONLINK__' ],
	'notitleconvert'            => [ '0', '__FARACONVERTIRETITLU__', '__FCT__', '__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                     => [ '0', '__FARACUPRINS__', '__NOTOC__' ],
	'ns'                        => [ '0', 'SN:', 'NS:' ],
	'numberingroup'             => [ '1', 'NUMARINGRUP', 'NUMINGRUP', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'       => [ '1', 'NUMARDEUTILIZATORIACTIVI', 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'            => [ '1', 'NUMARADMINI', 'NUMBEROFADMINS' ],
	'numberofarticles'          => [ '1', 'NUMARDEARTICOLE', 'NUMBEROFARTICLES' ],
	'numberofedits'             => [ '1', 'NUMARDEMODIFICARI', 'NUMBEROFEDITS' ],
	'numberoffiles'             => [ '1', 'NUMARDEFISIERE', 'NUMBEROFFILES' ],
	'numberofpages'             => [ '1', 'NUMARDEPAGINI', 'NUMBEROFPAGES' ],
	'numberofusers'             => [ '1', 'NUMARDEUTILIZATORI', 'NUMBEROFUSERS' ],
	'pagename'                  => [ '1', 'NUMEPAGINA', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'NUMEEPAGINA', 'PAGENAMEE' ],
	'pagesincategory'           => [ '1', 'PAGINIINCATEGORIE', 'PAGINIINCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesinnamespace'          => [ '1', 'PANIGIINSPATIULDENUME:', 'PAGINIINSN:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                  => [ '1', 'MARIMEPAGINA', 'PAGESIZE' ],
	'protectionlevel'           => [ '1', 'NIVELPROTECTIE', 'PROTECTIONLEVEL' ],
	'raw'                       => [ '0', 'BRUT:', 'RAW:' ],
	'redirect'                  => [ '0', '#REDIRECTEAZA', '#REDIRECT' ],
	'revisionday'               => [ '1', 'ZIREVIZIE', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'ZIREVIZIE2', 'REVISIONDAY2' ],
	'revisionid'                => [ '1', 'IDREVIZIE', 'REVISIONID' ],
	'revisionmonth'             => [ '1', 'LUNAREVIZIE', 'REVISIONMONTH' ],
	'revisiontimestamp'         => [ '1', 'STAMPILATIMPREVIZIE', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'UTILIZATORREVIZIE', 'REVISIONUSER' ],
	'revisionyear'              => [ '1', 'ANREVIZIE', 'REVISIONYEAR' ],
	'scriptpath'                => [ '0', 'CALESCRIPT', 'SCRIPTPATH' ],
	'servername'                => [ '0', 'NUMESERVER', 'SERVERNAME' ],
	'sitename'                  => [ '1', 'NUMESITE', 'SITENAME' ],
	'staticredirect'            => [ '1', '__REDIRECTIONARESTATICA__', '__STATICREDIRECT__' ],
	'subjectpagename'           => [ '1', 'NUMEPAGINASUBIECT', 'NUMEPAGINAARTICOL', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'NUMEEPAGINASUBIECT', 'NUMEEPAGINAARTICOL', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'              => [ '1', 'SPATIUSUBIECT', 'SPATIUARTICOL', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'SPATIUUSUBIECT', 'SPATIUUARTICOL', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'               => [ '1', 'NUMESUBPAGINA', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'NUMEESUBPAGINA', 'SUBPAGENAMEE' ],
	'tag'                       => [ '0', 'eticheta', 'tag' ],
	'talkpagename'              => [ '1', 'NUMEPAGINADEDISCUTIE', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'NUMEEPAGINADEDISCUTIE', 'TALKPAGENAMEE' ],
	'talkspace'                 => [ '1', 'SPATIUDEDISCUTIE', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'SPATIUUDEDISCUTIE', 'TALKSPACEE' ],
	'toc'                       => [ '0', '__CUPRINS__', '__TOC__' ],
	'uc'                        => [ '0', 'MAJUSCULA:', 'UC:' ],
	'ucfirst'                   => [ '0', 'MAJUSCULAPRIMA:', 'UCFIRST:' ],
	'urlencode'                 => [ '0', 'CODIFICAREURL:', 'URLENCODE:' ],
];

$namespaceNames = [
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Special',
	NS_TALK             => 'Discuție',
	NS_USER             => 'Utilizator',
	NS_USER_TALK        => 'Discuție_Utilizator',
	NS_PROJECT_TALK     => 'Discuție_$1',
	NS_FILE             => 'Fișier',
	NS_FILE_TALK        => 'Discuție_Fișier',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discuție_MediaWiki',
	NS_TEMPLATE         => 'Format',
	NS_TEMPLATE_TALK    => 'Discuție_Format',
	NS_HELP             => 'Ajutor',
	NS_HELP_TALK        => 'Discuție_Ajutor',
	NS_CATEGORY         => 'Categorie',
	NS_CATEGORY_TALK    => 'Discuție_Categorie',
];

$namespaceAliases = [
	'Discuţie'            => NS_TALK,
	'Discuţie_Utilizator' => NS_USER_TALK,
	'Discuţie_$1'         => NS_PROJECT_TALK,
	'Imagine'             => NS_FILE,
	'Discuţie_Imagine'    => NS_FILE_TALK,
	'Fişier'              => NS_FILE,
	'Discuţie_Fişier'     => NS_FILE_TALK,
	'Discuţie_MediaWiki'  => NS_MEDIAWIKI_TALK,
	'Discuţie_Format'     => NS_TEMPLATE_TALK,
	'Discuţie_Ajutor'     => NS_HELP_TALK,
	'Discuţie_Categorie'  => NS_CATEGORY_TALK,
];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'Utilizatori_activi' ],
	'Allmessages'               => [ 'Toate_mesajele' ],
	'Allpages'                  => [ 'Toate_paginile' ],
	'Ancientpages'              => [ 'Pagini_vechi' ],
	'Blankpage'                 => [ 'Pagină_goală' ],
	'Block'                     => [ 'Blochează_IP' ],
	'BlockList'                 => [ 'Listă_IP_blocat' ],
	'Booksources'               => [ 'Referințe_în_cărți' ],
	'BrokenRedirects'           => [ 'Redirectări_invalide' ],
	'Categories'                => [ 'Categorii' ],
	'ChangePassword'            => [ 'Resetează_parola' ],
	'Confirmemail'              => [ 'Confirmă_email' ],
	'Contributions'             => [ 'Contribuții' ],
	'CreateAccount'             => [ 'Înregistrare' ],
	'Deadendpages'              => [ 'Pagini_fără_legături' ],
	'DeletedContributions'      => [ 'Contribuții_șterse' ],
	'DoubleRedirects'           => [ 'Redirectări_duble' ],
	'Emailuser'                 => [ 'Email_utilizator' ],
	'Export'                    => [ 'Exportă' ],
	'Fewestrevisions'           => [ 'Revizii_puține' ],
	'FileDuplicateSearch'       => [ 'Căutare_fișier_duplicat' ],
	'Filepath'                  => [ 'Cale_fișier' ],
	'Import'                    => [ 'Importă' ],
	'Invalidateemail'           => [ 'Invalidează_email' ],
	'LinkSearch'                => [ 'Căutare_legături' ],
	'Listadmins'                => [ 'Listă_administratori' ],
	'Listbots'                  => [ 'Listă_roboți' ],
	'Listfiles'                 => [ 'Listă_fișiere' ],
	'Listgrouprights'           => [ 'Listă_drepturi_grup' ],
	'Listredirects'             => [ 'Listă_redirectări' ],
	'Listusers'                 => [ 'Listă_utilizatori' ],
	'Lockdb'                    => [ 'Blochează_BD' ],
	'Log'                       => [ 'Jurnal', 'Jurnale' ],
	'Lonelypages'               => [ 'Pagini_orfane' ],
	'Longpages'                 => [ 'Pagini_lungi' ],
	'MergeHistory'              => [ 'Istoria_combinărilor' ],
	'MIMEsearch'                => [ 'Căutare_MIME' ],
	'Mostcategories'            => [ 'Categorii_multe' ],
	'Mostimages'                => [ 'Imagini_multe' ],
	'Mostlinked'                => [ 'Legături_multe' ],
	'Mostlinkedcategories'      => [ 'Categorii_des_folosite' ],
	'Mostlinkedtemplates'       => [ 'Formate_des_folosite' ],
	'Mostrevisions'             => [ 'Revizii_multe' ],
	'Movepage'                  => [ 'Mută_pagina' ],
	'Mycontributions'           => [ 'Contribuțiile_mele' ],
	'Mypage'                    => [ 'Pagina_mea' ],
	'Mytalk'                    => [ 'Discuțiile_mele' ],
	'Newimages'                 => [ 'Imagini_noi' ],
	'Newpages'                  => [ 'Pagini_noi' ],
	'PasswordReset'             => [ 'Resetare_parolă' ],
	'Preferences'               => [ 'Preferințe' ],
	'Prefixindex'               => [ 'Index' ],
	'Protectedpages'            => [ 'Pagini_protejate' ],
	'Protectedtitles'           => [ 'Titluri_protejate' ],
	'Randompage'                => [ 'Aleatoriu', 'Pagină_aleatorie' ],
	'Randomredirect'            => [ 'Redirectare_aleatorie' ],
	'Recentchanges'             => [ 'Schimbări_recente' ],
	'Recentchangeslinked'       => [ 'Modificări_corelate' ],
	'Renameuser'                => [ 'Redenumire_utilizator' ],
	'Revisiondelete'            => [ 'Şterge_revizie' ],
	'Search'                    => [ 'Căutare' ],
	'Shortpages'                => [ 'Pagini_scurte' ],
	'Specialpages'              => [ 'Pagini_speciale' ],
	'Statistics'                => [ 'Statistici' ],
	'Tags'                      => [ 'Etichete' ],
	'Uncategorizedcategories'   => [ 'Categorii_necategorizate' ],
	'Uncategorizedimages'       => [ 'Imagini_necategorizate' ],
	'Uncategorizedpages'        => [ 'Pagini_necategorizate' ],
	'Uncategorizedtemplates'    => [ 'Formate_necategorizate' ],
	'Undelete'                  => [ 'Restaurează' ],
	'Unlockdb'                  => [ 'Deblochează_BD' ],
	'Unusedcategories'          => [ 'Categorii_nefolosite' ],
	'Unusedimages'              => [ 'Imagini_nefolosite' ],
	'Unusedtemplates'           => [ 'Formate_nefolosite' ],
	'Unwatchedpages'            => [ 'Pagini_neurmărite' ],
	'Upload'                    => [ 'Încărcare' ],
	'Userlogin'                 => [ 'Autentificare' ],
	'Userlogout'                => [ 'Ieșire' ],
	'Userrights'                => [ 'Drepturi_utilizator' ],
	'Version'                   => [ 'Versiune' ],
	'Wantedcategories'          => [ 'Categorii_dorite' ],
	'Wantedfiles'               => [ 'Fișiere_dorite' ],
	'Wantedpages'               => [ 'Pagini_dorite', 'Legături_invalide' ],
	'Wantedtemplates'           => [ 'Formate_dorite' ],
	'Watchlist'                 => [ 'Pagini_urmărite' ],
	'Whatlinkshere'             => [ 'Ce_se_leagă_aici' ],
	'Withoutinterwiki'          => [ 'Fără_legături_interwiki' ],
];

$datePreferences = false;
$defaultDateFormat = 'dmy';
$dateFormats = [
	'dmy time' => 'H:i',
	'dmy date' => 'j F Y',
	'dmy both' => 'j F Y H:i',
];

$fallback8bitEncoding = 'iso8859-2';

$linkTrail = '/^([a-zăâîşţșțĂÂÎŞŢȘȚ]+)(.*)$/sDu';