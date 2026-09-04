<?php
/**
 * Admin System Ai
 *
 * @package blesta
 * @subpackage blesta.language.fi_fi
 * @copyright Copyright (c) 2026, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminSystemAi.!error.api_key_required'] = 'Syötä API-avain.';
$lang['AdminSystemAi.!error.auth_failed'] = 'Todentaminen epäonnistui. Tarkista käyttäjätunnuksesi ja lisenssiavaimesi.';
$lang['AdminSystemAi.!error.connection_failed'] = 'Yhteyttä AI-sovellusliittymään ei voitu muodostaa: %1$s';
$lang['AdminSystemAi.!error.invalid_api_key'] = 'API-avain on virheellinen.';
$lang['AdminSystemAi.!error.invalid_request'] = 'Virheellinen pyyntö.';
$lang['AdminSystemAi.!error.key_already_exists'] = 'Blesta AI -tilauksellesi on jo luotu API-avain, eikä sitä voi hakea uudelleen. Peruuta olemassa oleva avain palvelusi AI-hallintasivulta osoitteessa account.blesta.com ja yritä sitten uudelleen.';
$lang['AdminSystemAi.!error.no_license_key'] = 'Blesta-lisenssiavainta ei löytynyt. Määritä ensin lisenssisi.';
$lang['AdminSystemAi.!error.privacy_not_acknowledged'] = 'Sinun on hyväksyttävä tietosuojailmoitus ennen tallentamista.';
$lang['AdminSystemAi.!error.request_failed'] = 'Pyyntö epäonnistui. Yritä uudelleen.';
$lang['AdminSystemAi.!error.username_required'] = 'Syötä account.blesta.com-käyttäjätunnuksesi.';
$lang['AdminSystemAi.!success.api_key_fetched'] = 'API-avain on haettu onnistuneesti Blesta-tililtäsi.';
$lang['AdminSystemAi.!success.settings_updated'] = 'Tekoälyn asetukset päivitettiin onnistuneesti!';
$lang['AdminSystemAi.index.boxtitle_ai'] = 'Tekoälyn asetukset';
$lang['AdminSystemAi.index.degraded_model'] = 'Tällä hetkellä valittuna oleva malli ”%1$s ” ei ole enää käytettävissä. Tekoälyominaisuudet käyttävät väliaikaisesti mallia ”%2$s ”. Valitse alla uusi oletusmalli ja tallenna valinta.';
$lang['AdminSystemAi.index.field.ai_api_key'] = 'API-avain';
$lang['AdminSystemAi.index.field.ai_chatbot_staff_groups'] = 'Henkilöstöryhmän käyttöoikeudet';
$lang['AdminSystemAi.index.field.ai_default_model'] = 'Oletusmalli';
$lang['AdminSystemAi.index.field.ai_email_context_depth'] = 'Suhteen syvyys';
$lang['AdminSystemAi.index.field.ai_email_context_examples'] = 'Liitä esimerkkitietoja';
$lang['AdminSystemAi.index.field.ai_email_context_schemas'] = 'Sisällytä skeemamäärittelyt';
$lang['AdminSystemAi.index.field.ai_enabled'] = 'Ota tekoälyominaisuudet käyttöön';
$lang['AdminSystemAi.index.field.ai_feature_chatbot'] = 'Chatbot';
$lang['AdminSystemAi.index.field.ai_feature_email_templates'] = 'Sähköpostimallit';
$lang['AdminSystemAi.index.field.ai_feature_package_descriptions'] = 'Pakettien kuvaukset';
$lang['AdminSystemAi.index.field.ai_global_prompt'] = 'Globaali järjestelmäkehote (oletus)';
$lang['AdminSystemAi.index.field.ai_max_tokens'] = 'Enimmäismäärä poletteja';
$lang['AdminSystemAi.index.field.ai_privacy_acknowledged'] = 'Olen lukenut yllä olevan tietosuojailmoituksen ja ymmärrän sen sisällön.';
$lang['AdminSystemAi.index.field.ai_temperature'] = 'Lämpötila';
$lang['AdminSystemAi.index.field.submit'] = 'Päivitä asetukset';
$lang['AdminSystemAi.index.heading_api'] = 'API:n määritykset';
$lang['AdminSystemAi.index.heading_beta'] = 'Ilmoitus beetatoiminnosta';
$lang['AdminSystemAi.index.heading_email_context'] = 'Sähköpostimallin kontekstiasetukset';
$lang['AdminSystemAi.index.heading_features'] = 'Käytössä olevat ominaisuudet';
$lang['AdminSystemAi.index.heading_model'] = 'Oletusmalli';
$lang['AdminSystemAi.index.heading_parameters'] = 'Mallin parametrit';
$lang['AdminSystemAi.index.heading_privacy'] = 'Tietosuojailmoitus';
$lang['AdminSystemAi.index.heading_privacy_acknowledgment'] = 'Tietosuojailmoitus';
$lang['AdminSystemAi.index.heading_prompts'] = 'Järjestelmän kehotteet';
$lang['AdminSystemAi.index.model_pricing'] = '(%1$s / %2$s krediittiä 1 000 tokenia kohti)';
$lang['AdminSystemAi.index.model_recommended'] = '(Suositeltava)';
$lang['AdminSystemAi.index.page_title'] = 'Asetukset &gt; Järjestelmä &gt; Tekoäly';
$lang['AdminSystemAi.index.text_api_status'] = 'API:n tila';
$lang['AdminSystemAi.index.text_balance'] = 'Saldo: %1$s %2$s';
$lang['AdminSystemAi.index.text_beta_notice'] = 'Tämä ominaisuus on tällä hetkellä beta-vaiheessa, ja se saattaa tuottaa odottamattomia tai epätarkkoja tuloksia. Käytä harkiten.';
$lang['AdminSystemAi.index.text_connected'] = 'Yhteys Blesta AI:hin muodostettiin onnistuneesti.';
$lang['AdminSystemAi.index.text_connection_error'] = 'Yhteyden muodostaminen Blesta AI:hin epäonnistui. Tarkista API-avaimesi.';
$lang['AdminSystemAi.index.text_credits_used'] = 'Käytetyt hyvitykset (tässä kuussa)';
$lang['AdminSystemAi.index.text_email_context_depth'] = 'Määrittää, kuinka syvälle suhteita seurataan (esim. lasku → asiakas → yhteyshenkilöt). Oletusarvo: 2';
$lang['AdminSystemAi.index.text_email_context_examples'] = 'Lisää esimerkkitietojen arvoja, jotta tekoäly ymmärtää tietojen muodot ja rakenteen.';
$lang['AdminSystemAi.index.text_email_context_schemas'] = 'Lisää kontekstiin kenttätyyppitiedot ja tietokantakaaviot.';
$lang['AdminSystemAi.index.text_feature_chatbot'] = 'Tekoälypohjainen chatbot henkilöstön avustamiseen';
$lang['AdminSystemAi.index.text_feature_email_templates'] = 'Tekoälyn avulla tehtävät sähköpostimallien muokkaukset ja parannukset';
$lang['AdminSystemAi.index.text_feature_package_descriptions'] = 'Luo kiinnostavia tuote- ja palvelukuvauksia';
$lang['AdminSystemAi.index.text_features_intro'] = 'Valitse, mille Blestan ydintoiminnoille tekoälyavustuksen tulisi olla käytössä. Laajennukset voivat käyttää tekoälyominaisuuksia, ja ne määritetään erikseen.';
$lang['AdminSystemAi.index.text_fetch_key'] = 'Hae tiedot Blesta-tililtäni';
$lang['AdminSystemAi.index.text_global_prompt_help'] = 'Tämä ohje koskee kaikkia tekoälyominaisuuksia, ellei ominaisuudessa ole määritetty toisin.';
$lang['AdminSystemAi.index.text_key_valid'] = 'API-avain on vahvistettu ja tallennettu';
$lang['AdminSystemAi.index.text_last_api_call'] = 'Viimeisin API-kutsu';
$lang['AdminSystemAi.index.text_manual_entry'] = 'Syötä API-avain manuaalisesti tai hae se automaattisesti tililtäsi.';
$lang['AdminSystemAi.index.text_no_calls_yet'] = 'Ei vielä puheluita';
$lang['AdminSystemAi.index.text_privacy_last_acknowledged'] = 'Viimeksi vahvistettu osoitteessa %1$s.';
$lang['AdminSystemAi.index.text_privacy_notice'] = 'Pyynnöt lähetetään kolmansien osapuolten tekoälypalveluntarjoajille (esim. OpenAI, Anthropic) käsiteltäviksi. Blesta AI -palvelu ei tallenna tekoälykeskustelujen tietoja; emme kuitenkaan voi vaikuttaa siihen, miten nämä palveluntarjoajat käsittelevät tai säilyttävät tietoja. Vältä lähettämästä arkaluonteisia tai luottamuksellisia tietoja.';
$lang['AdminSystemAi.index.text_remaining_credits'] = 'Jäljellä olevat opintopisteet';
$lang['AdminSystemAi.index.text_select_model'] = 'Valitse malli';
$lang['AdminSystemAi.index.text_staff_groups_help'] = 'Pidä Ctrl-näppäintä (Cmd Macissa) painettuna valitaksesi useita ryhmiä.';
$lang['AdminSystemAi.index.text_status_active'] = 'Aktiivinen';
$lang['AdminSystemAi.index.text_temperature_range'] = '(0,0 – 2,0)';
$lang['AdminSystemAi.index.text_validating'] = 'Tarkistetaan...';
$lang['AdminSystemAi.index.tooltip.ai_api_key'] = 'Blesta AI -sovellusliittymän avain. Löydät sen osoitteesta account.blesta.com.';
$lang['AdminSystemAi.index.tooltip.ai_chatbot_staff_groups'] = 'Valitse, mitkä henkilöstöryhmät voivat käyttää tekoälypohjaista chatbotia. Voit valita useita ryhmiä.';
$lang['AdminSystemAi.index.tooltip.ai_default_model'] = 'Oletusarvoinen tekoälymalli, jota käytetään keskustelun täydennyksiin.';
$lang['AdminSystemAi.index.tooltip.ai_email_context_depth'] = 'Mallisuhteiden läpikäynnin enimmäissyvyys. Suuremmat arvot sisältävät enemmän liittyviä tietoja, mutta lisäävät merkkien käyttöä. Arvoalue: 1–5.';
$lang['AdminSystemAi.index.tooltip.ai_enabled'] = 'Ota tekoälyominaisuudet käyttöön tai poista ne käytöstä koko järjestelmässä.';
$lang['AdminSystemAi.index.tooltip.ai_global_prompt'] = 'Oletusohjeet, jotka lähetetään tekoälymallille jokaisen pyynnön yhteydessä. Nämä määrittelevät tekoälyn käyttäytymisen ja kontekstin kaikissa ominaisuuksissa.';
$lang['AdminSystemAi.index.tooltip.ai_max_tokens'] = 'Vastauksissa luotavien tunnisteiden enimmäismäärä.';
$lang['AdminSystemAi.index.tooltip.ai_temperature'] = 'Säätää satunnaisuutta. Pienemmät arvot tuottavat deterministisempää tulosta, suuremmat arvot luovempaa tulosta. Alue: 0,0–2,0';
$lang['AdminSystemAi.modal.button.authenticate'] = 'Kirjaudu sisään';
$lang['AdminSystemAi.modal.button.cancel'] = 'Peruuta';
$lang['AdminSystemAi.modal.field.username'] = 'Käyttäjätunnus';
$lang['AdminSystemAi.modal.field.username_placeholder'] = 'Syötä tilisi käyttäjätunnus';
$lang['AdminSystemAi.modal.heading_fetch'] = 'Hae My Blesta -tililtäni';
$lang['AdminSystemAi.modal.text_authenticating'] = 'Todennetaan...';
$lang['AdminSystemAi.modal.text_info'] = 'account.blesta.com-käyttäjätunnustasi ja Blesta-lisenssiavainta käytetään lisenssin vahvistamiseen ja uuden Blesta AI -sovellusliittymäavaimen automaattiseen hakemiseen. Jos avain on jo luotu, se on ensin peruutettava palvelusi AI-hallinta-sivulta osoitteessa account.blesta.com, ennen kuin uusi avain voidaan myöntää.';
$lang['AdminSystemAi.modal.text_subtitle'] = 'Käyttäjätunnuksesi tarvitaan API-avaimesi hakemiseen';

