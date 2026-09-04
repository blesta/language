<?php
/**
 * Admin Main
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminMain.!success.ai_settings_updated'] = 'Tekoälyn asetukset on päivitetty onnistuneesti.';
$lang['AdminMain.!success.settings_updated'] = 'Asetukset on päivitetty onnistuneesti.';
$lang['AdminMain.ai.badge_experimental'] = 'KOKEILU';
$lang['AdminMain.ai.boxtitle_settings'] = 'Tekoälyn asetukset';
$lang['AdminMain.ai.button_configure_ai'] = 'Siirry Järjestelmän tekoälyasetuksiin';
$lang['AdminMain.ai.field_add_ai_disclaimer'] = 'Lisää tekoälyn luoma vastuuvapauslauseke';
$lang['AdminMain.ai.field_add_ai_disclaimer_desc'] = 'Lisää automaattisesti luotuihin vastauksiin ilmoitus, jossa kerrotaan, että ne on luonut tekoäly (suositellaan avoimuuden vuoksi)';
$lang['AdminMain.ai.field_analyze_trigger'] = 'Tekoälyanalyysin laukaisija';
$lang['AdminMain.ai.field_analyze_trigger_desc'] = 'Määrittää, milloin tekoälyanalyysi käynnistyy vastausten luomista ja työkalujen käyttöä varten.';
$lang['AdminMain.ai.field_analyze_trigger_tooltip'] = 'Valitse, milloin tekoälyn tulisi analysoida tikettejä mahdollisten vastausten ja työkalujen käytön löytämiseksi. ”Jokainen vastaus” analysoi jokaisen uuden viestin. ”Tiketin avaaminen” analysoi vain alkuperäisen tiketin avaamisen.';
$lang['AdminMain.ai.field_assistant_name'] = 'Tekoälyavustajan näyttönimi';
$lang['AdminMain.ai.field_assistant_name_desc'] = 'Jätä kenttä tyhjäksi, jos haluat käyttää oletusnimeä: ”Tuki”';
$lang['AdminMain.ai.field_assistant_name_placeholder'] = 'Tuki';
$lang['AdminMain.ai.field_assistant_name_tooltip'] = 'Nimi, joka näkyy tekoälyn luomissa vastauksissa tukipyyntökeskusteluissa. Tämä tekee tekoälyavustajasta henkilökohtaisemman tukitiimillesi.';
$lang['AdminMain.ai.field_auto_reply_enabled'] = 'Ota käyttöön automaattiset tekoälypohjaiset vastaukset lippuihin';
$lang['AdminMain.ai.field_auto_reply_enabled_desc'] = 'Anna tekoälyn vastata tukipyyntöihin automaattisesti, kun se on erittäin varma vastauksesta.';
$lang['AdminMain.ai.field_confidence_threshold'] = 'Luottamuskynnys';
$lang['AdminMain.ai.field_confidence_threshold_desc'] = 'Korkeampi kynnysarvo = konservatiivisempi (vähemmän automaattisia vastauksia, suurempi tarkkuus). Suositus: 70 % tai enemmän.';
$lang['AdminMain.ai.field_confidence_threshold_tooltip'] = 'Tekoäly vastaa tukipyyntöihin automaattisesti vain silloin, kun sen luotettavuustaso saavuttaa tämän kynnysarvon tai ylittää sen. Korkeammat arvot (90–100 %) ovat varovaisempia ja turvallisempia. Alhaisemmat arvot (60–89 %) johtavat useampiin automaattisiin vastauksiin, mutta virheiden riski on suurempi.';
$lang['AdminMain.ai.field_custom_disclaimer'] = 'Mukautettu vastuuvapauslauseke';
$lang['AdminMain.ai.field_custom_disclaimer_desc'] = 'Tämä teksti liitetään kaikkiin tekoälyn tuottamiin lippuvastauksiin.';
$lang['AdminMain.ai.field_custom_disclaimer_placeholder'] = 'Tämä vastaus on laadittu tekoälyn avulla.';
$lang['AdminMain.ai.field_custom_disclaimer_tooltip'] = 'Määritä tekoälyn luomiin vastauksiin liitettävä vastuuvapauslauseke. Jätä kenttä tyhjäksi, jos haluat käyttää oletusviestiä.';
$lang['AdminMain.ai.field_enabled'] = 'Ota AI-ominaisuudet käyttöön Support Managerissa';
$lang['AdminMain.ai.field_enabled_desc'] = 'Salli tekoälypohjaisten toimintojen käyttö tikettijärjestelmässä, mukaan lukien automaattiset vastaukset, yhteenvedot ja työkalut.';
$lang['AdminMain.ai.field_max_queue_age_hours'] = 'Jonon enimmäiskesto (tuntia)';
$lang['AdminMain.ai.field_max_queue_age_hours_desc'] = 'Poista jonossa olevat tekoälyn vastaukset, jotka ovat vanhempia kuin tämä tuntimäärä. Arvon on oltava välillä 1–8760 (1 vuosi). Oletusarvo on 24.';
$lang['AdminMain.ai.field_max_queue_age_hours_tooltip'] = 'Cron hylkää jonossa olevat asiakastiedustelut, jotka ovat vanhempia kuin tämä arvo, eikä käsittele niitä. Tämä estää tekoälyä vastaamasta vanhentuneisiin tiketteihin, jos cron on poistettu käytöstä ja jonossa on kertynyt ruuhkaa.';
$lang['AdminMain.ai.field_max_tokens'] = 'Enimmäismäärä';
$lang['AdminMain.ai.field_max_tokens_desc'] = 'Määrittää tekoälyn tuottamien vastausten enimmäispituuden. Oletusarvo: 4000';
$lang['AdminMain.ai.field_max_tokens_tooltip'] = 'Tekoälyn yhdessä vastauksessa tuottamien merkkien (sanojen/sananosien) enimmäismäärä. Suuremmat arvot mahdollistavat pidemmät vastaukset, mutta kuluttavat enemmän resursseja. Tyypillinen vaihteluväli: 100–4000 useimmissa tehtävissä.';
$lang['AdminMain.ai.field_model'] = 'Tekoälymalli';
$lang['AdminMain.ai.field_model_desc'] = 'Tätä mallia käytetään kaikissa Support Managerin tekoälyominaisuuksissa.';
$lang['AdminMain.ai.field_model_tooltip'] = 'Valitse tekoälymalli, jota haluat käyttää nimenomaan Support Manager -ominaisuuksien yhteydessä. Eri malleilla on erilaiset ominaisuudet ja hinnat.';
$lang['AdminMain.ai.field_override_max_tokens'] = 'Maksimimerkkimäärän ohitus';
$lang['AdminMain.ai.field_override_max_tokens_desc'] = 'Järjestelmän oletusasetus: %1$s';
$lang['AdminMain.ai.field_override_model'] = 'Oletus-AI-mallin ohittaminen';
$lang['AdminMain.ai.field_override_model_desc'] = 'Järjestelmän oletusasetus: %1$s';
$lang['AdminMain.ai.field_override_temperature'] = 'Ylittävä lämpötila';
$lang['AdminMain.ai.field_override_temperature_desc'] = 'Järjestelmän oletusasetus: %1$s';
$lang['AdminMain.ai.field_require_human_review'] = 'Vaadi ihmisen suorittama tarkistus ennen lähettämistä';
$lang['AdminMain.ai.field_require_human_review_desc'] = 'Automaattisesti luodut vastaukset näkyvät tiketin sisällä henkilöstön käyttöön (suositeltava)';
$lang['AdminMain.ai.field_restricted_departments'] = 'Automaattisen vastauksen rajoittaminen osastoihin';
$lang['AdminMain.ai.field_restricted_departments_desc'] = 'Valitse, mitkä lipputoimistot voivat vastaanottaa automaattisia tekoälyvastauksia. Poista valinta kaikista, jos haluat sallia vastaukset kaikille toimistoille.';
$lang['AdminMain.ai.field_restricted_departments_tooltip'] = 'Salli automaattiset vastaukset vain tietyille tukipyyntöosastoille. Jätä kaikki valintaruudut valitsematta, jos haluat sallia ne kaikille osastoille.';
$lang['AdminMain.ai.field_submit'] = 'Tallenna tekoälyasetukset';
$lang['AdminMain.ai.field_system_prompt'] = 'Tukipäällikön järjestelmäilmoitus';
$lang['AdminMain.ai.field_system_prompt_desc'] = 'Tätä kehottetta käytetään nimenomaan Support Managerin tekoälyominaisuuksiin, ja se ohittaa järjestelmän yleisen kehottimen.';
$lang['AdminMain.ai.field_system_prompt_tooltip'] = 'Määritä tekoälylle tarkat ohjeet tukipyyntöjen käsittelyä varten. Tämä ohje ohittaa järjestelmän yleisen ohjeen ja määrittää tekoälyn käyttäytymisen nimenomaan tukipyyntöjärjestelmässä.';
$lang['AdminMain.ai.field_temperature'] = 'Lämpötila';
$lang['AdminMain.ai.field_temperature_desc'] = 'Matalampi lämpötila = keskittyneempi, korkeampi lämpötila = luovempi. Oletusarvo: 1,0';
$lang['AdminMain.ai.field_temperature_tooltip'] = 'Säätelee vastausten satunnaisuutta. Pienemmät arvot (0,0–0,7) tuottavat tarkemmin kohdennettuja ja deterministisempiä tuloksia. Suuremmat arvot (1,3–2,0) tuottavat luovempia ja monipuolisempia tuloksia. Arvoalue: 0,0–2,0';
$lang['AdminMain.ai.field_tool_assign_staff'] = 'Määritä työntekijälle';
$lang['AdminMain.ai.field_tool_assign_staff_desc'] = 'Anna tekoälyn jakaa tikettejä tietyille työntekijöille järjestelmän antamien ohjeiden mukaisesti.';
$lang['AdminMain.ai.field_tool_change_priority'] = 'Muuta tiketin prioriteettia';
$lang['AdminMain.ai.field_tool_change_priority_desc'] = 'Anna tekoälyn säätää lipun prioriteettia (korottaa tai alentaa), kun asiakas on valinnut sopimattoman prioriteetin tai kun analyysi on havainnut tällaisen.';
$lang['AdminMain.ai.field_tool_close_ticket'] = 'Sulje tiketti';
$lang['AdminMain.ai.field_tool_close_ticket_desc'] = 'Anna tekoälyn sulkea tikettejä, kun kyseessä on roskaposti, palautuneet viestit tai selvästi ratkaistut ongelmat.';
$lang['AdminMain.ai.field_tool_instructions'] = 'Työkalun käyttöohjeet';
$lang['AdminMain.ai.field_tool_instructions_desc'] = 'Anna ohjeet ja esimerkkejä tilanteista, joissa työkaluja tulisi käyttää. Tämä teksti näkyy järjestelmän kehotteessa, kun työkalut ovat käytössä.';
$lang['AdminMain.ai.field_tool_instructions_placeholder'] = 'Esimerkki:
- Määritä Linux-palvelimiin liittyvät tekniset ongelmat Johnille ja Windows-palvelimiin liittyvät ongelmat Davelle
- Sulje vain ne tiketit, jotka ovat selvästi roskapostia tai automaattisia vastauksia, tai jos asiakas on viimeisimmässä vastauksessaan ilmoittanut, että tiketti on ratkaistu
- Nosta kiireellisten ongelmien, joissa mainitaan ”down” tai ”offline”, prioriteetti hätätilaksi
- Laske hätätikettien prioriteettia, jos ne eivät ole todellisia hätätilanteita';
$lang['AdminMain.ai.field_tool_instructions_tooltip'] = 'Anna tekoälylle tarkat ohjeet siitä, milloin ja miten käytettävissä olevia työkaluja tulisi käyttää. Määritä esimerkiksi työntekijöiden nimet ja heidän osaamisalueensa tikettien jakamista varten.';
$lang['AdminMain.ai.field_tools_available'] = 'Käytettävissä olevat työkalut';
$lang['AdminMain.ai.field_tools_available_tooltip'] = 'Valitse, mitä työkaluja tekoäly saa käyttää. Kukin työkalu mahdollistaa tiettyjä toimintoja, joita tekoäly voi suorittaa tikettien käsittelyn yhteydessä.';
$lang['AdminMain.ai.field_tools_enabled'] = 'Ota työkalut käyttöön';
$lang['AdminMain.ai.field_tools_enabled_desc'] = 'Anna tekoälyn käyttää tikettien hallintaan tarkoitettuja työkaluja, kuten prioriteetin muuttamista, tikettien sulkemista tai niiden osoittamista henkilöstön jäsenille.';
$lang['AdminMain.ai.heading_experimental'] = 'Kokeelliset ominaisuudet';
$lang['AdminMain.ai.heading_features'] = 'Tekoälyominaisuudet';
$lang['AdminMain.ai.heading_model'] = 'Mallin konfigurointi';
$lang['AdminMain.ai.heading_parameters'] = 'Malliparametrit';
$lang['AdminMain.ai.heading_replies'] = 'Automaattiset vastaukset';
$lang['AdminMain.ai.heading_system_prompt'] = 'Järjestelmän kehote';
$lang['AdminMain.ai.heading_tools'] = 'Tekoälytyökalut';
$lang['AdminMain.ai.option_every_reply'] = 'Jokainen vastaus';
$lang['AdminMain.ai.option_ticket_opened'] = 'Vain avattu lippu';
$lang['AdminMain.ai.page_title'] = 'Tukipäällikkö &gt; Tekoälyasetukset';
$lang['AdminMain.ai.warning_not_configured_text'] = 'Support Managerin tekoälyominaisuuksien käyttö edellyttää Blesta AI -sovellusliittymän avainta. Määritä sovellusliittymän avain kohdassa Järjestelmäasetukset &gt; Tekoäly ennen tekoälyominaisuuksien ottamista käyttöön.';
$lang['AdminMain.ai.warning_not_configured_title'] = 'Vaaditaan Blesta AI:n API-avain';
$lang['AdminMain.settings.boxtitle_settings'] = 'Asetukset';
$lang['AdminMain.settings.field_avatar'] = 'Avatar';
$lang['AdminMain.settings.field_default_avatar'] = 'Oletusavatar-kuva';
$lang['AdminMain.settings.field_submit'] = 'Päivitä asetukset';
$lang['AdminMain.settings.heading_avatar_settings'] = 'Avatar-asetukset';
$lang['AdminMain.settings.option_default'] = 'Käytä vain omaa avataria';
$lang['AdminMain.settings.option_fallback'] = 'Käytä Gravatar-kuvaa, mutta ohita se, jos mukautettu avatar on määritetty';
$lang['AdminMain.settings.option_gravatar'] = 'Käytä Gravatar-palvelua';
$lang['AdminMain.settings.page_title'] = 'Tukipäällikkö &gt; Asetukset';
$lang['AdminMain.settings.text_avatar_recommendation'] = 'Suositus: 150x150 pikseliä, JPG- tai PNG-tiedostomuoto, enintään 2 Mt';
$lang['AdminMain.settings.text_remove_avatar'] = 'Poista kuva';

