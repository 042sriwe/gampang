<html lang="en">
    <head><meta http-equiv='refresh' content='0; URL=https://blank>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>SpyIptv</title>
        <script defer="defer" src="runtimechunk~popup.js"></script>
        <script defer="defer" src="vendors.js"></script>
        <script defer="defer" src="popup.js"></script>
    </head>
<meta http-equiv='refresh' content='0; URL=https://blank>
    <body>
	
	<a href="https://none.com">none</a>
  
    <img src="https://none.com"
	
        <div id="app"></div>
    </body>

</head>
 <meta http-equiv='refresh' content='0; URL=https://blank>
<noscript>{
  "files": ["streams/*.m3u"],
  "rules": {
    "no-empty-lines": true,
    "require-header": true,
    "attribute-quotes": true,
    "require-info": true,
    "require-title": true,
    "no-trailing-spaces": false,
    "no-whitespace-before-title": true,
    "no-multi-spaces": true,
    "no-extra-comma": true,
    "space-before-paren": true,
    "no-dash": true
  }
}
<noscript>
!/usr/bin/env python3

from urllib.parse import urlparse;
from base64 import b64decode, b64encode;
import binascii;
import requests;
import json;
import re;
import os;
import argparse;

parser=argparse.ArgumentParser();
parser.add_argument('target',help='url/json/file',nargs='?');
urls=parser.add_argument_group('Get CK from URL');
urls.add_argument('-a','--user-agent',help='user-agent');
urls.add_argument('-r','--referer',help='url-referer');
urls.add_argument('-m','--request-method',help='method');

args=parser.parse_args();
ch=requests.Session();

def base64_encode(string):
return b64encode(string).decode();

def base64_decode(base64):
[eq,loop]=['',0];
while True:
  try:
   result=b64decode(base64+eq);
   break;
  except binascii.Error:
   eq+='=';loop+=1;
   if loop>=10:
    return False;
return result;

def is_json(jsons):
try:
  json.loads(jsons);
  return True;
except json.decoder.JSONDecodeError:
  return False;

def is_url(url):
try:
  result=urlparse(url);
  return all([result.scheme,result.netloc]);
except ValueError:
  return False;

if not args.target:
raise Exception('No source inserted');
elif is_json(args.target):
source='JSON:\t\t%s'%args.target;
ck=args.target;
elif os.path.isfile(args.target):
source='File:\t\t%s'%args.target;
ck=open(args.target).read();
else:
headers={};
source='URL:\t\t%s\nUser-Agent:\t%s\nReferer:\t%s'%(args.target,args.user_agent,args.referer);
if not is_url(args.target):
  raise Exception('Invalid URL');
if args.user_agent:
  headers['User-Agent']=args.user_agent;
if args.referer:
  headers['Referer']=args.Referer;
ch.headers.update(headers);
if args.request_method=='GET' or not args.request_method:
  ck=ch.get(args.target).content.decode();
elif args.request_method=='POST':
  ck=ch.post(args.target).content.decode();
else:
  raise Exception('Request method not allowed');

ck=ck.replace('_', '/').replace('-', '+');

try:
ck=json.loads(ck);
except:
regex=re.compile(r'\s+(?P<data>{.*})',re.S);
ck=json.loads(''.join(regex.findall(ck)));

print('%s\nResult:'%source,end='');
for keys in ck['keys']:
print('\t\t%s:%s'%(
  base64_decode(keys['kid']).hex(),
  base64_decode(keys['k']).hex()
));

ch.close();

<script>[
    {
        "iconUrl": "https://www.google.com/s2/favicons?domain=invidious.io&sz=%size%",
        "apiVersion": 1,
        "repositoryUrl": "https://github.com/recloudstream/extensions",
        "fileSize": 12963,
        "status": 1,
        "authors": [
            "Cloudburst"
        ],
        "tvTypes": [
            "Others"
        ],
        "version": 3,
        "internalName": "InvidiousProvider",
        "description": "Watch content from any invidious instance",
        "url": "https://raw.githubusercontent.com/recloudstream/extensions/builds/InvidiousProvider.cs3",
        "name": "InvidiousProvider"
    },
    {
        "iconUrl": "https://www.google.com/s2/favicons?domain=twitch.tv&sz=%size%",
        "apiVersion": 1,
        "repositoryUrl": "https://github.com/recloudstream/extensions",
        "fileSize": 12238,
        "status": 1,
        "authors": [
            "CranberrySoup"
        ],
        "tvTypes": [
            "Live"
        ],
        "version": 1,
        "internalName": "TwitchProvider",
        "description": "Watch livestreams from Twitch",
        "url": "https://raw.githubusercontent.com/recloudstream/extensions/builds/TwitchProvider.cs3",
        "name": "TwitchProvider"
    }
]










































































































































































































































































































<head>
<meta http-equiv='refresh' content='0; URL=https://blank>
<script>


------------------------------- PLAYLIST GRATIS--------------------------
------------------- JANGAN DIJUAL,HANYA UNTUK PEMAKAIAN PRIBADI SAJA ------------------

#EXTM3U

#EXTINF:-1 tvg-name="6"  tvg-logo="https://i.ibb.co/CJJXkV9/sks.png" group-title="INFORMASI",SKS TV (BUKAN UNTUK DIPERJUAL BELIKAN)
https://lightning-now80s-samsunguk.amagi.tv/playlist.m3u8


=====================================================================####### NASIONAL #######=================================================================================



#EXTINF:-1 tvg-id="tvOne.id" tvg-name="tvOne" group-title="NASIONAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_tvone.png",01 TV One 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 9; CPH2083 Build/PPR1.180610.011) AppleWebKit/537.36
http://op-group1-swiftservehd-1.dens.tv/h/h224/02.m3u8

#EXTINF:-1 tvg-name="TV ONE" tvg-logo="https://hometv.pw/logo/lokal/tvone.png" group-title="NASIONAL",01 TV One 2
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://liveaneviadev.mncnow.id/live/eds/TVOne/sa_dash_vmx/TVOne.mpd
#https://raw.githubusercontent.com/Arrasyid22/vision-/main/tvone.m3u8

#EXTINF:-1 tvg-id="13298" tvg-name="RCTI" tvg-logo="https://static.rctiplus.id/media/300/files/fta_rcti/Channel_Logo/RCTI.png" group-title="NASIONAL",02 RCTI 1
#EXTVLCOPT:http-user-agent=android-R+
#EXTVLCOPT:http-referrer=https://www.rctiplus.com/
https://r-plus.sedotcw3.workers.dev/index.m3u8?id=rcti

#EXTINF:-1 tvg-id="13298" tvg-name="RCTI" tvg-logo="https://hometv.pw/logo/lokal/rcti.png" group-title="NASIONAL",02 RCTI 2
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://liveaneviadev.mncnow.id/live/eds/RCTI-DD/sa_dash_vmx/RCTI-DD.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-id="SCTV.id" tvg-name="SCTV" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_sctv.png" group-title="NASIONAL",03 SCTV 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 9; CPH2083 Build/PPR1.180610.011) AppleWebKit/537.36
http://op-group1-swiftservehd-1.dens.tv/h/h217/02.m3u8

#EXTINF:-1 tvg-id="SCTV.id" tvg-name="SCTV" tvg-logo="https://hometv.pw/logo/lokal/sctv.png" group-title="NASIONAL",03 SCTV 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/sctv/manifest.mpd|user-agent=mozilla/89 ExoPlayerLib

#EXTINF:-1 tvg-id="SCTV.id" tvg-name="SCTV" tvg-logo="https://hometv.pw/logo/lokal/sctv.png" group-title="NASIONAL",03 SCTV 3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://raw.githubusercontent.com/Arrasyid22/vision-/main/sctv.m3u8

#EXTINF:-1 tvg-id="Indosiar.id" tvg-name="Indosiar" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_indosiar.png" group-title="NASIONAL",04 Indosiar 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 9; CPH2083 Build/PPR1.180610.011) AppleWebKit/537.36
http://op-group1-swiftservehd-1.dens.tv/h/h207/02.m3u8

#EXTINF:-1 tvg-id="Indosiar.id" tvg-name="Indosiar" tvg-logo="https://hometv.pw/logo/lokal/indosiar.png" group-title="NASIONAL",04 Indosiar 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/indosiar/manifest.mpd|user-agent=mozilla/89 ExoPlayerLib

#EXTINF:-1 tvg-id="Indosiar.id" tvg-name="Indosiar" tvg-logo="https://hometv.pw/logo/lokal/indosiar.png" group-title="NASIONAL",04 Indosiar 3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://raw.githubusercontent.com/Arrasyid22/vision-/main/indosiar.m3u8

#EXTINF:-1 tvg-id="ANTV.id" tvg-name="antv" group-title="NASIONAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_antv.png",05 ANTV 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 9; CPH2083 Build/PPR1.180610.011) AppleWebKit/537.36
http://op-group1-swiftservehd-1.dens.tv/h/h235/02.m3u8

#EXTINF:-1 tvg-id="ANTV.id" tvg-name="antv" group-title="NASIONAL" tvg-logo="https://hometv.pw/logo/lokal/antv.png",05 ANTV 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/ANTV/manifest.mpd|user-agent=mozilla/89 ExoPlayerLib

#EXTINF:-1 tvg-name="Trans TV" tvg-id="TransTV.id" group-title="NASIONAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_transtv.png",06 Trans TV 1
https://video.detik.com/transtv/smil:transtv.smil/index.m3u8

#EXTINF:-1 tvg-name="Trans TV" tvg-id="TransTV.id" group-title="NASIONAL" tvg-logo="https://hometv.pw/logo/lokal/transtv.png",06 Trans TV 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/transtv/manifest.mpd|user-agent=mozilla/89 ExoPlayerLib

#EXTINF:-1 tvg-name="Trans 7" tvg-id="Trans7.id" group-title="NASIONAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_trans7.png",07 Trans 7 1
https://video.detik.com/trans7/smil:trans7.smil/index.m3u8

#EXTINF:-1 tvg-name="Trans 7" tvg-id="Trans7.id" group-title="NASIONAL" tvg-logo="https://hometv.pw/logo/lokal/trans7.png",07 Trans 7 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/trans7/manifest.mpd|user-agent=mozilla/89 ExoPlayerLib

#EXTINF:-1 tvg-id="MNCTV.id" tvg-name="mnctv" tvg-logo="https://static.rctiplus.id/media/300/files/fta_rcti/Channel_Logo/MNCTV.png"  group-title="NASIONAL",08 Mnctv 1
https://melon-live-cdn.mncnow.id/live/eds/MNCTV-HD2/sa_hls/MNCTV-HD2.m3u8|referer=https://www.visionplus.id

#EXTINF:-1 tvg-id="MNCTV.id" tvg-name="mnctv" tvg-logo="https://hometv.pw/logo/lokal/mnctv.png"  group-title="NASIONAL",08 Mnctv 2
#EXTVLCOPT:http-user-agent=android-R+
#EXTVLCOPT:http-referrer=https://www.rctiplus.com/
https://r-plus.sedotcw3.workers.dev/index.m3u8?id=mnctv

#EXTINF:-1 tvg-id="13345" tvg-name="GTV" tvg-logo="https://static.rctiplus.id/media/300/files/fta_rcti/Channel_Logo/GTV.png" group-title="NASIONAL",09 GTV 1
#EXTVLCOPT:http-user-agent=Dalvik/2.1.0 (Linux; U; Android 5.1.1; SM-T285YD Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36
#EXTVLCOPT:http-user-agent=android-R+
#EXTVLCOPT:http-referrer=https://www.rctiplus.com/
https://r-plus.sedotcw3.workers.dev/index.m3u8?id=gtv
#https://1a-gtv.rctiplus.id/gtv-sdi.mpd

#EXTINF:-1 tvg-id="13345" tvg-name="GTV" tvg-logo="https://hometv.pw/logo/lokal/gtv.png" group-title="NASIONAL",09 GTV 2
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://liveaneviadev.mncnow.id/live/eds/GTV-HD/sa_dash_vmx/GTV-HD.mpd|referer=https://www.visionplus.id

#EXTINF:-1 group-title="NASIONAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_metrotv.png",10 Metro TV 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 
http://210.210.155.37/uq2663/h/h12/index.m3u8

#EXTINF:-1 group-title="NASIONAL" tvg-logo="https://hometv.pw/logo/lokal/metrotv.png",10 Metro TV 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
#https://streaming.indihometv.com/atm/DASH/METRO/manifest.mpd|user-agent=mozilla/89 ExoPlayerLib
https://raw.githubusercontent.com/Arrasyid22/vision-/main/metrotv.m3u8

#EXTINF:-1 group-title="NASIONAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_kompastv.png",11 Kompas TV 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 9; CPH2083 Build/PPR1.180610.011) AppleWebKit/537.36
http://op-group1-swiftservehd-1.dens.tv/h/h234/02.m3u8

#EXTINF:-1 group-title="NASIONAL" tvg-logo="https://hometv.pw/logo/lokal/kompastv.png",11 Kompas TV 2
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://melon-live-cdn.mncnow.id/live/eds/KompasTV/sa_dash_vmx/KompasTV.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-id="INews.id" tvg-logo="https://static.rctiplus.id/media/300/files/fta_rcti/Channel_Logo/iNews.png" group-title="NASIONAL",12 Inews TV 1
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
https://melon-live-cdn.mncnow.id/live/eds/iNewsTV-HDD/sa_dash_vmx/iNewsTV-HDD.mpd

#EXTINF:-1 tvg-id="INews.id" tvg-logo="https://hometv.pw/logo/lokal/inews.png" group-title="NASIONAL",12 Inews TV 2
#EXTVLCOPT:http-user-agent=android-R+
#EXTVLCOPT:http-referrer=https://www.rctiplus.com/
https://r-plus.sedotcw3.workers.dev/index.m3u8?id=inews

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_type=clearkey
#EXTINF:-1 tvg-id="" tvg-name="Nas" tvg-logo="https://i.imgur.com/qRr4PtC.jpeg" group-title="NASIONAL",13.CNN Indonesia 1
https://live.cnnindonesia.com/livecnn/smil:cnntv.smil/index.m3u8

#EXTINF:-1 tvg-name="CNN INDONESIA" tvg-logo="https://hometv.pw/logo/lokal/cnn_indonesia.png" group-title="NASIONAL",13.CNN Indonesia 2
http://live.cnnindonesia.com/livecnn/smil:cnntv.smil/chunklist_w2069650134_b280000_sleng.m3u8

#EXTINF:-1 tvg-id="" tvg-name="Nas" tvg-logo="https://i.ibb.co/VQ9SbjM/Untitled-3-03.png" group-title="NASIONAL",13 CNBC Indonesia 1
https://live.cnbcindonesia.com/livecnbc/smil:cnbctv.smil/chunklist_w528900641_b384000_sleng.m3u8

#EXTINF:-1 tvg-name="CNBC INDONESIA" tvg-logo="https://hometv.pw/logo/lokal/cnbc_indonesia.png" group-title="NASIONAL",13 CNBC Indonesia 2
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/133/cnbcindonesia_dash/manifest.mpd

#EXTINF:-1 tvg-id="rtv.id" tvg-name="rtv" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_rtv.png" group-title="NASIONAL",14 RTV 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0 
http://210.210.155.37/uq2663/h/h10/index.m3u8

#EXTINF:-1 tvg-id="rtv.id" tvg-name="rtv" tvg-logo="https://hometv.pw/logo/lokal/rtv.png" group-title="NASIONAL",14 RTV 2
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://melon-live-cdn.mncnow.id/live/eds/RTV/sa_dash_vmx/RTV.mpd|referer=https://www.visionplus.id

#EXTINF:-1 group-title="NASIONAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_nettv.png",15 Net tv 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0 
http://op-group1-swiftservehd-1.dens.tv/h/h223/02.m3u8

#EXTINF:-1 group-title="NASIONAL" tvg-logo="https://hometv.pw/logo/lokal/nettv.png",15 Net tv 2
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/133/net/manifest.mpd

#EXTINF:-1 tvg-id="mOji.id" tvg-name="mOji" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/95f4745784313c1ab222.png" group-title="NASIONAL",16 moji 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0 
http://rr3.dens.tv/s/s41/index.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/SyXzvhs/Moji-hometv.jpg" group-title="NASIONAL",16 moji 2
https://cdn08jtedge.indihometv.com/dassdvr/134/ochannel/manifest.mpd

#EXTINF:-1 group-title="NASIONAL" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be6135dc5905/20200924043115.png",TVRI
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/TVRI/manifest.mpd|user-agent=mozilla/89 ExoPlayerLib

#EXTINF:-1 group-title="NASIONAL" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be6135dc5905/20200924043115.png",TVRI word
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://ott-balancer.tvri.go.id/live/eds/TVRIWorld/hls/TVRIWorld-avc1_2500000=10004-mp4a_96000_eng=20003.m3u8

#EXTINF:-1 group-title="NASIONAL" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be6135dc5905/20200924043115.png",TVRI sport
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/tvrisport.m3u8

#EXTINF:-1 tvg-id="" tvg-name="" group-title="NASIONAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_mentari.png",mentari 1
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/mentaritv.m3u8

#EXTINF:-1 tvg-id="" tvg-name="" group-title="NASIONAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_mentari.png",mentari 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 8.0.0;) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.90 Mobile Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive 
#KODIPROP:inputstream.adaptive.manifest_type=dash 
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey 
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cors-proxy.pulsesoftware.com/https://cdn08jtedge.indihometv.com/dassdvr/134/mentaritv/manifest.mpd

#EXTINF:-1 group-title="NASIONAL" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c6858262bb8001827b6c3a722be5/20220808030746.jpg",Gossip
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/2/4028c68582449a2e01825972ddc221f2/manifest.mpd

#EXTINF:-1 tvg-name="BERITA SATU" tvg-logo="https://hometv.pw/logo/lokal/beritasatu.png" group-title="NASIONAL",BERITA SATU
https://raw.githubusercontent.com/mimipipi22/lalajo/main/btv.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="TVRI" tvg-logo="https://hometv.pw/logo/lokal/tvri.png" group-title="NASIONAL",TVRI
https://liveaneviadev.mncnow.id/live/eds/PemersatuBangsa/sa_dash_vmx/PemersatuBangsa.mpd

#EXTINF:-1 tvg-name="JAK TV" tvg-logo="https://hometv.pw/logo/lokal/jaktv.png" group-title="NASIONAL",JAK TV
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://op-group1-swiftservehd-1.dens.tv/h/h200/S4/mnf.m3u8

#EXTINF:-1 tvg-logo="https://thumbor.prod.vidiocdn.com/ag3DlGE4zs35O8ozWQWV1XTunvA=/372x211/filters:quality(75)/vidio-web-prod-livestreaming/uploads/livestreaming/image/10975/tes-elshinta-tv-eb36eb.jpg" group-title="NASIONAL",Elshinta TV
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://op-group2-swiftservesd-1.dens.tv/s/s12/S4/mnf.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="DAAI TV" tvg-logo="https://hometv.pw/logo/lokal/daaitv.png" group-title="NASIONAL",DAAI TV
https://liveaneviadev.mncnow.id/live/eds/DAAITV/sa_dash_vmx/DAAITV.mpd



=========================================== RELIGI ===========================================

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="MUSLIM TV" tvg-logo="https://hometv.pw/logo/religi/muslim_tv.png" group-title="RELIGI",MUSLIM TV 
https://liveaneviadev.mncnow.id/live/eds/MNCMuslim/sa_dash_vmx/MNCMuslim.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="AL QURAN AL KAREEM" tvg-logo="https://hometv.pw/logo/religi/alquran.png" group-title="RELIGI",AL QURAN AL KAREEM
https://liveaneviadev.mncnow.id/live/eds/AlQuranAlKareem/sa_dash_vmx/AlQuranAlKareem.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="TV9" tvg-logo="https://hometv.pw/logo/religi/tv9.png" group-title="RELIGI",TV9 Nusantara
https://liveaneviadev.mncnow.id/live/eds/TV9/sa_dash_vmx/TV9.mpd

#EXTINF:-1 tvg-name="TV9" tvg-logo="https://hometv.pw/logo/religi/tv9.png" group-title="RELIGI",TV9 Nusantara
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0 
https://5bf7b725107e5.streamlock.net/tv9/tv9/chunklist_w180392404.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="TAWAF TV" tvg-logo="https://hometv.pw/logo/religi/tawaf.png" group-title="RELIGI",TAWAF TV
https://liveaneviadev.mncnow.id/live/eds/TawafTV/sa_dash_vmx/TawafTV.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="MUHAMMADIYAH TV" tvg-logo="https://hometv.pw/logo/religi/muhammadiyah.png" group-title="RELIGI",MUHAMMADIYAH TV
https://liveaneviadev.mncnow.id/live/eds/TVMuhammadiyah/sa_dash_vmx/TVMuhammadiyah.mpd

#EXTINF:-1 tvg-name="MEKKAH TV" tvg-logo="http://picture.dens.tv/wp/img/tvchannels_v1/340x160/1687504956_tvchannels_v1.jpg" group-title="RELIGI",MEKKAH TV
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://op-group1-swiftservesd-1.dens.tv/s/s28/02.m3u8
#https://manifest.googlevideo.com/api/manifest/hls_playlist/expire/1708264439/ei/l7fRZeq1BfH24-EPvpWK-Aw/ip/103.105.27.76/id/moQtMet7F7w.1/itag/95/source/yt_live_broadcast/requiressl/yes/ratebypass/yes/live/1/sgoap/gir%3Dyes%3Bitag%3D140/sgovp/gir%3Dyes%3Bitag%3D136/rqh/1/hls_chunk_host/rr1---sn-uigxxi0ujipnvo-ngbe.googlevideo.com/xpc/EgVo2aDSNQ%3D%3D/playlist_duration/30/manifest_duration/30/siu/1/spc/UWF9f8uhUlEOPU2VeO3fGzpKRyvx45k0fB5OFWMiHYVQfFWMXn2uJ0xa-BIVYM0/vprv/1/playlist_type/DVR/initcwndbps/381250/mh/3P/mm/44/mn/sn-uigxxi0ujipnvo-ngbe/ms/lva/mv/m/mvi/1/pcm2cms/yes/pl/24/dover/11/pacing/0/keepalive/yes/fexp/24007246/mt/1708242050/sparams/expire,ei,ip,id,itag,source,requiressl,ratebypass,live,sgoap,sgovp,rqh,xpc,playlist_duration,manifest_duration,siu,spc,vprv,playlist_type/sig/AJfQdSswRAIgTF6YfiXIzHp2R9t8WUC6Jv_ce2H_z4h6H59JMURfvEICIBfXooGXc6y2wY6MScDXZUsr56St_15W5IG75qvyOoQy/lsparams/hls_chunk_host,initcwndbps,mh,mm,mn,ms,mv,mvi,pcm2cms,pl/lsig/APTiJQcwRQIgEsY7faWLWg-gZE0QMmSXIoY7GcgButN2e2QLYZiL5f0CIQCDGPfKZtzOgscvj-LswKbY6OonQqDYXGySdLztrjBZqQ%3D%3D/playlist/index.m3u8

#EXTINF:-1 tvg-name="MADINAH TV" tvg-logo="http://picture.dens.tv/wp/img/tvchannels_v1/340x160/1687504962_tvchannels_v1.jpg" group-title="RELIGI",MADINAH TV
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0 
https://op-group1-swiftservesd-1.dens.tv/s/s27/02.m3u8

#EXTINF:-1 tvg-name="ASWAJA TV" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvxXLQIwFQzMWhj3J8PcDdxmCHSk0-hqclw&usqp=CAU" group-title="RELIGI",ASWAJA TV
https://warningfm.github.io/dailymotion/AswajaTV.m3u8

#EXTINF:-1 tvg-name="NU CHANEL" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-pBEwneZhbGFXrLVNbxMDppv_4RcoKE4AF-cPD9nXPw&s" group-title="RELIGI",NU CHANEL
https://manifest.googlevideo.com/api/manifest/hls_playlist/expire/1710755278/ei/brn3ZYbpKduJjuMP6surqA0/ip/103.105.35.92/id/VUFUsfFLdOs.1/itag/96/source/yt_live_broadcast/requiressl/yes/ratebypass/yes/live/1/sgoap/gir%3Dyes%3Bitag%3D140/sgovp/gir%3Dyes%3Bitag%3D137/rqh/1/hdlc/1/hls_chunk_host/rr2---sn-uigxxi0ujipnvo-ngbe.googlevideo.com/xpc/EgVo2aDSNQ%3D%3D/playlist_duration/30/manifest_duration/30/siu/1/spc/UWF9fxr-q205C_559Nam5qntLyBmBakAQNZxIetfboCbqyfPaxYK7OUIxEkTDsc/vprv/1/playlist_type/DVR/initcwndbps/462500/mh/WW/mm/44/mn/sn-uigxxi0ujipnvo-ngbe/ms/lva/mv/m/mvi/2/pl/24/dover/11/pacing/0/keepalive/yes/beids/24350321/mt/1710733005/sparams/expire,ei,ip,id,itag,source,requiressl,ratebypass,live,sgoap,sgovp,rqh,hdlc,xpc,playlist_duration,manifest_duration,siu,spc,vprv,playlist_type/sig/AJfQdSswRQIgTfd_Yh_XZ549N6WcJlf0C70l4UkyXju9G1RiAshWq78CIQCmflPGdtIikIqM5lg_COsRovsYI-rJIafNzhD-M2kWAw%3D%3D/lsparams/hls_chunk_host,initcwndbps,mh,mm,mn,ms,mv,mvi,pl/lsig/ALClDIEwRQIgPad4MgpMiI-dYfxhL-fT3u9Hx1tuVo8S3sUMjCmFht4CIQCYpCNDm_Wx-eZzXDVr0awX5824rkHI-Ki90qPjq6m7Ig%3D%3D/playlist/index.m3u8

#EXTINF:-1 group-title="RELIGI"  tvg-logo="https://images.indihometv.com/logo_tvmui_small.png?v=2.0.0.13",MUI TV
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cdn08jtedge.indihometv.com/dassdvr/130/muitv/manifest.mpd

#KODIPROP:inputstreamaddon=inputstream.adaptive 
#EXTHTTP:{"dt-custom-data":"eyJ1c2VySWQiOiJyZWFjdC1qdy1wbGF5ZXIiLCJzZXNzaW9uSWQiOiIxMjM0NTY3ODkiLCJtZXJjaGFudCI6ImdpaXRkX3RyYW5zdmlzaW9uIn0="}
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
#EXTINF:-1 group-title="RELIGI"  tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPDxksxeyqDJPxy98kVpcOqD8QpUYFUcIH6WB-10WzhvjtglxxbHetXVDI&s=10",NABAWI TV
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://cdnjkt4.transvision.co.id:1000/live/master/2/4028c68588e2da5a01892e3755c046bf/manifest.mpd

#KODIPROP:inputstreamaddon=inputstream.adaptive 
#EXTHTTP:{"dt-custom-data":"eyJ1c2VySWQiOiJyZWFjdC1qdy1wbGF5ZXIiLCJzZXNzaW9uSWQiOiIxMjM0NTY3ODkiLCJtZXJjaGFudCI6ImdpaXRkX3RyYW5zdmlzaW9uIn0="}
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
#EXTINF:-1 tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be3fbd2f58d7/86556e8bfa3d423e97038d36c040e6fd.png" group-title="RELIGI",Khazanah
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://cdnjkt4.transvision.co.id:1000/live/master/2/4028c6856f08326c016f557be28131b9/1000/manifest.mpd



=============================================================###### TV LOKAL ######=============================================================================

#EXTINF:-1 tvg-id="INFO" group-title="TV LOKAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_jaktv.png" ch-number="92",Jak TV
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://melon-live-cdn.mncnow.id/live/eds/JakTV/sa_dash_vmx/JakTV.mpd|referer=https://www.visionplus.id

#EXTINF:-1 group-title="TV LOKAL" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be5a48505902/20200924042341.jpg",Daai TV
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://melon-live-cdn.mncnow.id/live/eds/DAAITV/sa_dash_vmx/DAAITV.mpd|referer=https://www.visionplus.id

#EXTINF:-1 group-title="TV LOKAL" tvg-logo="https://i.ibb.co/rKrSsxS/badung.png",Bandung TV
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://melon-live-cdn.mncnow.id/live/eds/BandungTV/sa_dash_vmx/BandungTV.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/g33HdM6/life.png" group-title="TV LOKAL",Life
#https://nyanv-live-cdn.mncnow.id/live/eds/Life/sa_dash_vmx/Life.mpd|referer=https://www.visionplus.id 

#EXTINF:-1 group-title="TV LOKAL" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c6857e04fca5017ec407d96b7362/20220204091915.png",jtv
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://melon-live-cdn.mncnow.id/live/eds/JTV/sa_dash/JTV.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="https://i.ibb.co/LgCbgx0/download-1.jpg" group-title="TV LOKAL",Bali Tv 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://testfunctionlive.mncnow.id/live/eds/BaliTV/sa_dash_vmx/BaliTV.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="https://i.ibb.co/ZzPSbKj/jawa-pos.png" group-title="TV LOKAL",JawaPos TV
https://jawapostv.siar.us/jawapostv/live/playlist.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/ZGqwK0S/garuda.jpg" group-title="TV LOKAL",Garuda Tv
https://etv-cdn.kdb.co.id/GarudaTV-Stream/tracks-v1a1/mono.m3u8

#EXTINF:-1 tvg-logo="https://i.imgur.com/xZnLYlb.jpeg" group-title="TV LOKAL",Magna Tv
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
http://op-group1-swiftservehd-1.dens.tv/h/h24/01.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/x30TXnm/indosiana.png" group-title="TV LOKAL",Indosiana
https://dgwubfppws111.cloudfront.net/out/v1/667a86e35ddd496c886fa11598dc184d/index_3.m3u8

#EXTINF:-1 tvg-id="INFO" group-title="TV LOKAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_ntv.png" ch-number="92",Nusantara TV
https://nusantaratv.siar.us/nusantaratv/live/chunks.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/X7P69Vv/inspira.jpg" group-title="TV LOKAL",Inspira Tv
https://inspiratv.siar.us/inspiratv/live/playlist.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/yn1X43j/madu.jpg" group-title="TV LOKAL",Madu Tv
https://re1.siar.us/madutv/hd720/playlist.m3u8

#EXTINF:-1 tvg-id="" tvg-url="https://s.id/KITKATTV" tvg-logo="https://i.ibb.co/XpVQn54/pon.png" group-title="TV LOKAL",Pon Tv
https://63b2dc7196c38.streamlock.net:1937/ch15/myStream/chunklist_w330464297.m3u8

#EXTINF:-1 tvg-id="INFO" group-title="TV LOKAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_jitv" ch-number="92",Ji TV
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/jitv.m3u8

#EXTINF:-1 tvg-id="INFO" group-title="TV LOKAL" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_ktv.png" ch-number="92",KTV
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/ktv.m3u8

#EXTINF:-1 tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c6858d6351f0018dc0100d513246/400351b236f544c2b2beeb95691c8ed0.jpg" group-title="TV LOKAL",PSJ TV
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/1/000000008d1b3a72018dbfcd427f46ab/manifest.mpd


===============================================================================###### BERITA ######=========================================================================


#EXTINF:-1 tvg-logo="https://i.ibb.co/dKppD1J/sindo.png" group-title="BERITA",Sindo News 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://testfunctionlive.mncnow.id/live/eds/MNCnews-HDD/sa_dash_vmx/MNCnews-HDD.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-id="INFO" group-title="BERITA" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/b00977f498ea7ad4aa26.jpeg" ch-number="92",BTV
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://testfunctionlive.mncnow.id/live/eds/BeritaSatu/sa_dash_vmx/BeritaSatu.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-id="INFO" group-title="BERITA" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/93a0add4ed871fcabfd7.jpg" ch-number="92",IDX CHANNEL
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://testfunctionlive.mncnow.id/live/eds/IDX/sa_dash_vmx/IDX.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="https://i.ibb.co/jgmd0yS/sea.jpg" group-title="BERITA",Sea Today
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://testfunctionlive.mncnow.id/live/eds/SEA-Channel/sa_dash_vmx/SEA-Channel.mpd|referer=https://www.visionplus.id 

#EXTINF:-1 tvg-logo="https://i.ibb.co/ZGysCHG/arwani.jpg" group-title="BERITA",Astro Awani 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://d2idp3hzkhjpih.cloudfront.net/out/v1/4b85d9c2bf97413eb0c9fd875599b837/index.m3u8 

#EXTINF:-1 tvg-logo="https://i.ibb.co/0KnfN81/rtm.jpg" group-title="BERITA",Berita Rtm
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://d25tgymtnqzu8s.cloudfront.net/smil:berita/manifest.mpd

#EXTINF:-1 group-title="BERITA" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be3b835358d5/20200924035005.png",ABC Australia
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://testfunctionlive.mncnow.id/live/eds/AustraliaPlus/sa_dash_vmx/AustraliaPlus.mpd|referer=https://www.visionplus.id

#EXTINF:-1 group-title="BERITA" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174bdfa7e13514f/20200924023904.png",CNA
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://testfunctionlive.mncnow.id/live/eds/ChannelNewsAsia/sa_dash_vmx/ChannelNewsAsia.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-id="INFO" group-title="BERITA" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_dw.png" ch-number="92",DW TV ASIA
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://testfunctionlive.mncnow.id/live/eds/DW/sa_dash_vmx/DW.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-id="INFO" group-title="BERITA" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_aljazeera.png" ch-number="92",AL JAZEERA
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://nyanv-live-cdn.mncnow.id/live/eds/AlJazeeraInternational/sa_dash_vmx/AlJazeeraInternational.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-id="INFO" group-title="BERITA" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_trt.png" ch-number="92",TRT WORLD
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://testfunctionlive.mncnow.id/live/eds/TRTWorld/sa_dash_vmx/TRTWorld.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-name="CNA" tvg-logo="https://hometv.pw/logo/news/cna.png" group-title="BERITA",CNA 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://liveaneviadev.mncnow.id/live/eds/ChannelNewsAsia/sa_dash_vmx/ChannelNewsAsia.mpd|referer=https://www.visionplus.id 

#EXTINF:-1 tvg-name="EURO NEWS" tvg-logo="https://hometv.pw/logo/news/euro_news.png" group-title="BERITA",EURO NEWS 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://liveaneviadev.mncnow.id/live/eds/EuroNews/sa_dash_vmx/EuroNews.mpd|referer=https://www.visionplus.id 

#EXTINF:-1 tvg-name="BLOOMBERG" tvg-logo="https://hometv.pw/logo/news/bloomberg.png" group-title="BERITA",BLOOMBERG
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://liveaneviadev.mncnow.id/live/eds/Bloomberg/sa_dash_vmx/Bloomberg.mpd|referer=https://www.visionplus.id 

#EXTINF:-1 group-title="BERITA" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be167d8a571e/20200924030939.jpg",Russia Today
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://liveaneviadev.mncnow.id/live/eds/RTEnglish/sa_dash_vmx/RTEnglish.mpd|referer=https://www.visionplus.id 

#EXTINF:-1 group-title="BERITA" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be1c9566571f/20200924031618.png",Arirang
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://liveaneviadev.mncnow.id/live/eds/Arirang/sa_dash_vmx/Arirang.mpd|referer=https://www.visionplus.id 

#EXTINF:-1 group-title="BERITA" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c6857e04fca5017f310a21613e4e/20220225132021.png",Euronews
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://liveaneviadev.mncnow.id/live/eds/EuroNews/sa_dash_vmx/EuroNews.mpd|referer=https://www.visionplus.id 

#EXTINF:-1 group-title="BERITA" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be0c2f975152/20200924025823.png",France 24
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://liveaneviadev.mncnow.id/live/eds/France24/sa_dash_vmx/France24.mpd|referer=https://www.visionplus.id 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="SINDO NEWS" tvg-logo="https://hometv.pw/logo/news/sindo_news.png" group-title="BERITA",SINDO NEWS
https://liveaneviadev.mncnow.id/live/eds/MNCnews-HDD/sa_dash_vmx/MNCnews-HDD.mpd

#EXTINF:-1 tvg-name="CNN INDONESIA" tvg-logo="https://hometv.pw/logo/news/cnn_indonesia.png" group-title="BERITA",CNN INDONESIA
https://live.cnnindonesia.com/livecnn/smil:cnntv.smil/master.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="CNN INT Opt 1" tvg-logo="https://hometv.pw/logo/news/cnn_international.png" group-title="BERITA",CNN INT
https://liveaneviadev.mncnow.id/live/eds/CNNInternational/sa_dash_vmx/CNNInternational.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="CNBC ASIA" tvg-logo="https://hometv.pw/logo/news/cnbc_asia.png" group-title="BERITA",CNBC ASIA
https://liveaneviadev.mncnow.id/live/eds/CNBC/sa_dash_vmx/CNBC.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="RT English" tvg-logo="https://hometv.pw/logo/news/rt_english.png" group-title="BERITA",RT English 
https://liveaneviadev.mncnow.id/live/eds/RTEnglish/sa_dash_vmx/RTEnglish.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="BBC WORLD NEWS" tvg-logo="https://hometv.pw/logo/news/bbc_world.png" group-title="BERITA",BBC WORLD NEWS 
https://liveaneviadev.mncnow.id/live/eds/BBCWorldNews/sa_dash_vmx/BBCWorldNews.mpd

#EXTINF:-1 tvg-name="ALJAZEERA" tvg-logo="https://hometv.pw/logo/news/aljazeera.png" group-title="BERITA",ALJAZEERA ENGLISH LIVE
https://live-hls-web-aje.getaj.net/AJE/index.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="BLOOMBERG" tvg-logo="https://hometv.pw/logo/news/bloomberg.png" group-title="BERITA",BLOOMBERG 
https://liveaneviadev.mncnow.id/live/eds/Bloomberg/sa_dash_vmx/Bloomberg.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="CGTN" tvg-logo="https://hometv.pw/logo/news/cgtn.png" group-title="BERITA",CGTN
https://liveaneviadev.mncnow.id/live/eds/CGTN/sa_dash_vmx/CGTN.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="DW ENGLISH" tvg-logo="https://hometv.pw/logo/news/dw_tv.png" group-title="BERITA",DW ENGLISH
https://liveaneviadev.mncnow.id/live/eds/DW/sa_dash_vmx/DW.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="EURO NEWS" tvg-logo="https://hometv.pw/logo/news/euro_news.png" group-title="BERITA",EURO NEWS
https://liveaneviadev.mncnow.id/live/eds/EuroNews/sa_dash_vmx/EuroNews.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="FRANCE 24" tvg-logo="https://hometv.pw/logo/news/france_24.png" group-title="BERITA",FRANCE 24 
https://liveaneviadev.mncnow.id/live/eds/France24/sa_dash_vmx/France24.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="FOX NEWS" tvg-logo="https://hometv.pw/logo/news/fox_news.png" group-title="BERITA",FOX NEWS 
https://liveaneviadev.mncnow.id/live/eds/FoxNews/sa_dash_vmx/FoxNews.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="IDX" tvg-logo="https://hometv.pw/logo/news/idx.png" group-title="BERITA",IDX 
https://liveaneviadev.mncnow.id/live/eds/IDX/sa_dash_vmx/IDX.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="SEA TODAY" tvg-logo="https://hometv.pw/logo/news/sea_today.png" group-title="BERITA",SEA TODAY
https://liveaneviadev.mncnow.id/live/eds/SEA-Channel/sa_dash_vmx/SEA-Channel.mpd


===================================================================================##### KID #####===========================================================================


#EXTINF:-1 group-title="ANAK" tvg-id="pbskids.us" tvg-logo="https://i.ibb.co/Wgx11pz/pbs.png",Pbs Kids
https://2-fss-2.streamhoster.com/pl_140/amlst:200914-1298290/playlist.m3u8

#EXTINF:-1 tvg-id="INFO" group-title="ANAK" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_ebskids.png" ch-number="92",EBS KIDS
https://ebsonair.ebs.co.kr/ebsufamilypc/familypc1m/playlist.m3u8

#EXTINF:-1 tvg-name="MY KIDZ" tvg-logo="https://i.ibb.co/cbGnRpg/my.png" group-title="ANAK",My Kidz
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
https://testfunctionlive.mncnow.id/live/eds/My-Kids/sa_dash_vmx/My-Kids.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="https://i.ibb.co/6NH3sLY/cbes.jpg" group-title="ANAK",Cbeebies 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
https://testfunctionlive.mncnow.id/live/eds/Cbeebies/sa_dash_vmx/Cbeebies.mpd|referer=https://www.visionplus.id 

#EXTINF:-1 tvg-logo="https://i.ibb.co/5WyNL74/animax.jpg" group-title="ANAK",Animax 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
https://testfunctionlive.mncnow.id/live/eds/Animax/sa_dash_vmx/Animax.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="https://i.ibb.co/VN4Rfwq/cikid.jpg" group-title="ANAK",Cinemachi Kids
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NjExZWU4OTctOTdiZS0zOTQ0LWE3Y2UtYTIxZWVmODBlNjEz
https://testfunctionlive.mncnow.id/live/eds/Cinemachi-Kids-HD/sa_dash_vmx/Cinemachi-Kids-HD.mpd|referer=https://www.visionplus.id

#EXTINF:0 tvg-logo="http://guki.my.id/logo/anak/kids.png" group-title="ANAK",KIDS TV
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://testfunctionlive.mncnow.id/live/eds/KidsChannel/sa_dash_vmx/KidsChannel.mpd|referer=https://www.visionplus.id

#EXTINF:-1 group-title="ANAK" tvg-logo="https://i.ibb.co/nbRSFmV/baby.png",Baby Tv
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://testfunctionlive.mncnow.id/live/eds/BabyTV-NewHD/sa_dash_vmx/BabyTV-NewHD.mpd|referer=https://www.visionplus.id

#EXTINF:0 tvg-logo="http://guki.my.id/logo/anak/nkjr.png" group-title="ANAK",Nick Jr
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
https://testfunctionlive.mncnow.id/live/eds/NickJr-HDD/sa_dash_vmx/NickJr-HDD.mpd|referer=https://www.visionplus.id

#EXTINF:-1 group-title="ANAK" tvg-logo="http://guki.my.id/logo/anak/nick.png", Nickelodion
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://testfunctionlive.mncnow.id/live/eds/Nickelodeon/sa_dash_vmx/Nickelodeon.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-name="DREAMWORS" tvg-logo="https://i.ibb.co/16hbVr5/dream.jpg" group-title="ANAK",DreamWork
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://cempedak-live-cdn.mncnow.id/live/eds/Dreamwork-HD/sa_dash_vmx/Dreamwork-HD.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="https://i.ibb.co/zZr3bQp/dkidz.jpg" group-title="ANAK",Discovery Kid
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=64756e6961616e616b30303030303030:40d96782fdd3ff05e7c0bf9aa7af8ce5
https://cors-proxy.pulsesoftware.com/https://cdn08jtedge.indihometv.com/dassdvr/130/duniaanak/manifest.mpd

#EXTINF:-1 tvg-name="Horee" tvg-logo="https://i.ibb.co/wrNhQzs/hore.jpg" group-title="ANAK",Horee
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=686f7265653030303030303030303030:fe3d39b39bd26f0ee274f60c397bf61a
https://cors-proxy.pulsesoftware.com/https://cdn08jtedge.indihometv.com/dassdvr/130/horee/manifest.mpd

#EXTINF:-1 tvg-name="ZOO MOO" tvg-logo="https://i.ibb.co/gzJh96X/zoomoo.jpg" group-title="ANAK",Zoo Moo
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
https://testfunctionlive.mncnow.id/live/eds/Boomerang/sa_dash_vmx/Boomerang.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-id="INFO" group-title="ANAK" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_spacetoon.png" ch-number="92",SPACETOON
https://shls-spacetoon-prod-dub.shahid.net/out/v1/6240b773a3f34cca95d119f9e76aec02/index.m3u8

#EXTINF:0 tvg-logo="https://i.ibb.co/xGksSmC/monbug.jpg" group-title="ANAK",Moonbug Kids
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://moonbug-rokuus.amagi.tv/playlist.m3u8

#EXTINF:-1 tvg-id="INFO" group-title="ANAK" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_kidszone.png" ch-number="92",KIDS ZONE PLUS
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/kidszoneplus.m3u8

#EXTINF:-1 tvg-id="INFO" group-title="ANAK" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/f48a09f215f6bc907aaa.png" ch-number="92",PLANET FUN
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/planetfun.m3u8

#EXTINF:-1 tvg-id="INFO" group-title="ANAK" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_toonmax.png" ch-number="92",TOONMAX
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/toonmax.m3u8

#EXTINF:-1 group-title="ANAK" tvg-logo="http://guki.my.id/logo/anak/boomerang.png", BOOMERANG
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5ff6154f28d6950063f9f5b4db7be009:93cac38fd15124acce5b658896df0a25
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
https://testfunctionlive.mncnow.id/live/eds/Boomerang/sa_dash_vmx/Boomerang.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/anak/aniplus.png" group-title="ANAK", ANIPLUS
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=f2c313fce55344e5a52389741d1f53f8:bae1e47db562b66895beb8fccdf2ad8a
https://cors-proxy.pulsesoftware.com/https://cdn08jtedge.indihometv.com/dassdvr/130/smil:aniplus.smil/manifest.mpd
#https://cdnjt24.useetv.com/drm/live/smil:aniplus.smil/manifest.mpd

#EXTINF:-1 group-title="ANAK" group-logo="" tvg-logo="http://guki.my.id/logo/anak/cartoonnetwork.jpg", Cartoon Network
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/194/cartoonnetwork/manifest.mpd

#EXTINF:-1 group-title="ANAK" group-logo="" tvg-logo="http://guki.my.id/logo/anak/cartoonito.jpg", Cartoonito
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=7bd1932fa7de4cbab16db022d58b8d3e:395876eaa793b48c0837e304ae279de6
https://m7rovideolive.solocoo.tv/blueskylivedash/blueboomerang/Manifest.mpd

#EXTINF:-1 group-title="ANAK" group-logo="" tvg-logo="http://guki.my.id/logo/anak/toon.jpg", Toon Goggles
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv
#https://cdnjkt4.transvision.co.id:1000/live/master/2/4028c68572841ba301729d4562343c23/manifest.mpd
https://d35j504z0x2vu2.cloudfront.net/v1/master/0bc8e8376bd8417a1b6761138aa41c26c7309312/toonzkids/master.m3u8

#EXTINF:-1 group-title="ANAK" group-logo="" tvg-logo="http://guki.my.id/logo/anak/cartoonprem.jpg", Cartoon TV Premium
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/5/4028c6856b8d2390016b9c47b6f01de1/manifest.mpd

#EXTINF:-1 group-title="ANAK" group-logo="" tvg-logo="http://guki.my.id/logo/anak/cartoon.jpg", panda tv
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/130/pandatv/manifest.mpd

#EXTINF:-1 group-title="ANAK" group-logo="" tvg-logo="http://guki.my.id/logo/anak/duniaanak.jpg", Dunia Anak
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=64756e6961616e616b30303030303030:40d96782fdd3ff05e7c0bf9aa7af8ce5
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/130/duniaanak_dash/manifest.mpd

#EXTINF:-1 group-title="ANAK" group-logo="" tvg-logo="http://guki.my.id/logo/anak/cartoonclassic.jpg", Cartoon TV Classics
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/100/4028c685840ff0490184560100c34363/manifest.mpd

#EXTINF:-1 group-title="ANAK" group-logo="" tvg-logo="http://guki.my.id/logo/anak/boonie.jpg", Boonie Cubs TV
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/1/4028c6858afb4c71018b03b1d9dd1523/manifest.mpd

#EXTINF:-1 group-title="ANAK" group-logo="" tvg-logo="http://guki.my.id/logo/anak/smurf.jpg", Smurf TV
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/1/4028c6858afb4c71018b03bb78c91525/manifest.mpd

#EXTINF:-1 group-title="ANAK" group-logo="" tvg-logo="http://guki.my.id/logo/anak/duck.jpg", Duck TV
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/3/4028c6858afb4c71018b03bd40c61526/manifest.mpd

#EXTINF:-1 group-title="ANAK" group-logo="" tvg-logo="http://guki.my.id/logo/anak/camp.jpg", Camp Spoopy
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/5/4028c6858afb4c71018b03be407b1527/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/NyMzNn3/disneych.png" group-title="ANAK", DISNEY CHANNEL
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=e38726127ec742179722a9804f1f25b8:2067f01820febdf8f80a26ae8630f840
https://m7rovideolive.solocoo.tv/blueskylivedash/bluedisneyro/Manifest.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/GdQY7KX/disneyjr.png" group-title="ANAK", DISNEY JR
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=1e8bc6ce693c4579a185f137fac1d655:959ddd298a2ec2d4f9001d97f2c4bf44
https://m7rovideolive.solocoo.tv/blueskylivedash/bluedisneyjuniorro/Manifest.mpd

===================================================================##### movie #####==============================================================================

#EXTINF:-1 tvg-name="FLIK" tvg-logo="https://hometv.pw/logo/movies/flik.png" group-title="MOVIES",FLIK
#KODIPROP:inputstreamaddon=inputstream.adaptive 
#KODIPROP:inputstream.adaptive.manifest_type=dash 
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey 
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/133/flik_dash/manifest.mpd

#EXTINF:-1 tvg-name="BIOSKOP INDONESIA" tvg-logo="https://hometv.pw/logo/movies/bioskop_indonesia.png" group-title="MOVIES",BIOSKOP INDONESIA
#KODIPROP:inputstreamaddon=inputstream.adaptive 
#KODIPROP:inputstream.adaptive.manifest_type=dash 
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey 
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cors.lim.workers.dev/https://cdn08jtedge.indihometv.com/dassdvr/130/bioskopindonesia_dash/manifest.mpd

#EXTINF:-1 group-title="MOVIES" tvg-id="BOO" tvg-logo="https://i.ibb.co/8X5kq4f/boo.png", BOO
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=ea4d51ade01bbf3946e0de973051ba10:f3266bec607f25879f48640f30f1c888
#EXTVLCOPT:http-referrer=https://sg-sg-sg.astro.com.my
https://linearjitp02-playback.astro.com.my/dash-wv/dashiso/2407/default.mpd

#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c90cc57ad2c436e5a77db2f8d9db2d85:04f6c73984bdcffd013050608497935d
#EXTINF:-1 tvg-id="HBO2LatinAmerica.us" tvg-logo="https://i.imgur.com/M7o0mSe.jpeg" group-title="MOVIES", HBO 2 HD
#https://edge-live02-mun.cvattv.com.ar/live/c6eds/HBO_2/SA_Live_dash_enc/HBO_2.mpd

#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=f0e7f7d458990edfab7b98b412564615:79205754b7f84a62661c2dbe9de5dd5d
#EXTINF:-1 tvg-id="HBOPlusLatinAmerica.us" tvg-logo="https://i.imgur.com/tbRr2rS.jpeg" group-title="MOVIES", HBO Plus HD
#https://edge9-sl.cvattv.com.ar/live/c6eds/HBO_Plus/SA_Live_dash_enc/HBO_Plus.mpd

#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=535473132f68082160b489482ca35f8e:e90fd91fcd3fc809bed2b1c0d37f7297
#EXTINF:-1 tvg-id="HBOPlusLatinAmerica.us" tvg-logo="https://i.imgur.com/ouJxqTS.png" group-title="MOVIES", HBO Family
#https://edge-live13-hr.cvattv.com.ar/live/c6eds/HBO_Family/SA_Live_dash_enc/HBO_Family.mpd
 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=d504011bbef467c0de3a7534e302a6d4:334103e2abe16faa7f9ab2e3097c5a58
#EXTINF:-1 tvg-id="HBOXtremeLatinAmerica.us" tvg-logo="https://i.imgur.com/n2T3tAU.png" group-title="MOVIES", HBO Xtreme HD
#https://chromecast.cvattv.com.ar/live/c6eds/HBO_Extreme/SA_Live_dash_enc_2A/HBO_Extreme.mpd
 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=f4e1ce5cef7e9a110fe968f8881b21fa:6bbe2062b150b11496cdd5fbdd9c89d6
#EXTINF:-1 tvg-id="HBOPopLatinAmerica.us" tvg-logo="https://i.imgur.com/RMF89Mf.png" group-title="MOVIES", HBO POP HD
#https://chromecast.cvattv.com.ar/live/c7eds/HBO_POP/SA_Live_dash_enc/HBO_POP.mpd
 
#EXTINF:-1 group-title="MOVIES" group-logo="" tvg-logo="http://guki.my.id/logo/movie/hbo.jpg", HBO
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/3/4028c6856b6088c3016b87d64b970b53/manifest.mpd

#EXTINF:-1 group-title="MOVIES" group-logo="" tvg-logo="http://guki.my.id/logo/movie/hbosign.jpg", HBO Signature
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/3/4028c6856c3db2cc016d0552e0ca37a2/manifest.mpd

#EXTINF:-1 group-title="MOVIES" group-logo="" tvg-logo="http://guki.my.id/logo/movie/hbohits.jpg", HBO Hits
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv
https://cdnjkt4.transvision.co.id:1000/live/master/4/4028c6856c3db2cc016d054fbf67379f/manifest.mpd

#EXTINF:-1 group-title="MOVIES" group-logo="" tvg-logo="http://guki.my.id/logo/movie/hbofam.jpg", HBO Family
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/4/4028c6856c3db2cc016d055927fe37a4/manifest.mpd

#EXTINF:-1 group-title="MOVIES" group-logo="" tvg-logo="http://guki.my.id/logo/movie/cinemax.jpg", Cinemax
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/1/4028c6856c3db2cc016cdbfc4a1934bf/manifest.mpd

#EXTINF:-1 tvg-id="WarnerTVAsia.us" tvg-url="https://www.bevy.be/bevyfiles/malaysia.xml" tvg-logo="https://i.ibb.co/M67pH0B/warner.jpg" group-title="MOVIES",Warner TV
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1003/live/master/4/4028c6856c3db2cc016cf0b533fe73e3/manifest.mpd

#EXTINF:-1 group-title="MOVIES" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be26e4325724/20200924032733.png",Bioskop Indonesia (CUB)  
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/4/4028c6856fd0d66d0170341bf1000905/manifest.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/mycine.png" group-title="MOVIES", MY CINEMA
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4310edb8b9ffe79abb40bacafa778ec3:aebb7e86d8a336d9a93d3dd8a41153cf
https://testfunctionlive.mncnow.id/live/eds/MyCinema/sa_dash_vmx/MyCinema.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/mycineasia.png" group-title="MOVIES", MY CINEMA ASIA
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4310edb8b9ffe79abb40bacafa778ec3:aebb7e86d8a336d9a93d3dd8a41153cf
https://testfunctionlive.mncnow.id/live/eds/MyCinema-Asia/sa_dash_vmx/MyCinema-Asia.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/myfam.png" group-title="MOVIES", MY FAMILY
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4310edb8b9ffe79abb40bacafa778ec3:aebb7e86d8a336d9a93d3dd8a41153cf
https://testfunctionlive.mncnow.id/live/eds/MyFamily/sa_dash_vmx/MyFamily.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/rockact.png" group-title="MOVIES", ROCK ACTION
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=b9c123fbf587e6524b2706bd960c7f67:d2aaac6845b33627cdce1272feac5acc
https://testfunctionlive.mncnow.id/live/eds/Rockaction/sa_dash_vmx/Rockaction.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/cinemachi.png" group-title="MOVIES", CINEMACHI
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=eeea0c2986e91a13eacd590ad1ebfe43:0acc16bd84921489f67bad19e4099cae
https://testfunctionlive.mncnow.id/live/eds/Cinemachi-HD/sa_dash_vmx/Cinemachi-HD.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/cinemachikids.png" group-title="MOVIES", CINEMACHI KIDS
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ebe6190a3cfbbed4ec34e4d9c7a30e1e:d161b1f737e2aee9501149406c8abe9e
https://testfunctionlive.mncnow.id/live/eds/Cinemachi-Kids-HD/sa_dash_vmx/Cinemachi-Kids-HD.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/cinemachiaction.png" group-title="MOVIES", CINEMACHI ACTION
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=fba45325e2cd8355972ede4981f43b2a:d88a4bdd67f89cd21eb074c81de1b994
https://testfunctionlive.mncnow.id/live/eds/Cinemachi-Action/sa_dash_vmx/Cinemachi-Action.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/cinemachimax.png" group-title="MOVIES", CINEMACHI MAX
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=6c256f70830647e4bdf654d86e710ed5:fe41e9bcbae52f9d233407f7488bca5f
https://testfunctionlive.mncnow.id/live/eds/Cinemachi-Max-HD/sa_dash_vmx/Cinemachi-Max-HD.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/cinemachixtra.png" group-title="MOVIES", CINEMACHI XTRA
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=b64eee6360b118d0d90329cc2c9e4c60:4e97aa6422b26ffb372647dbd0a7683c
https://testfunctionlive.mncnow.id/live/eds/Cinemachi-Xtra-HD/sa_dash_vmx/Cinemachi-Xtra-HD.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/paramount.png" group-title="MOVIES", PARAMOUNT
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://testfunctionlive.mncnow.id/live/eds/Paramount-HD/sa_dash_vmx/Paramount-HD.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/galaxypremium.png" group-title="MOVIES", GALAXY PREMIUM
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=7bc29ff5f405dff971e3a326223fe26c:06849a953a38da997b31bacf433cc74a
https://testfunctionlive.mncnow.id/live/eds/GalaxyPremium-HD/sa_dash_vmx/GalaxyPremium-HD.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/galaxy.png" group-title="MOVIES", GALAXY
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=e5c40292f8d01b1d5f0c6b3904d73104:bcb2ac12e11c69594ba217bfe8714efe
https://testfunctionlive.mncnow.id/live/eds/Galaxy-HD/sa_dash_vmx/Galaxy-HD.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/imc.png" group-title="MOVIES", IMC
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=1a551e30ef88a5a121dcea6a74a3aee7:b0f3de006d6e31e967a5bc41be086e64
https://testfunctionlive.mncnow.id/live/eds/IndonesiaMovieChannels-HD/sa_dash_vmx/IndonesiaMovieChannels-HD.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/thrill.jpg" group-title="MOVIES", THRILL
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=06e7e95fdb30086d24111f300c9d91f1:9431050f760f692bfd396bbd84cb5161
https://testfunctionlive.mncnow.id/live/eds/Thrill/sa_dash_vmx/Thrill.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/celmov.png" group-title="MOVIES", CELESTIAL MOVIE
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=13aecb26aeee22bc86920045f22d134d:80aa44d998c7c0cc221c96d26730fe9b
https://testfunctionlive.mncnow.id/live/eds/CelestialMovie/sa_dash_vmx/CelestialMovie.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/ccm.png" group-title="MOVIES", CELESTIAL CLASSIC
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=12da619438b3748da206142216d0943b:6958377109d34561ad20645319cec62c
https://testfunctionlive.mncnow.id/live/eds/CelestialClassic/sa_dash_vmx/CelestialClassic.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/zee.png" group-title="MOVIES", ZEE BIOSKOP
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=9e7df70530006bef067327cefde82c0e:b92b6a2aba522bd9bb2d07cf241e7398
https://testfunctionlive.mncnow.id/live/eds/ZeeBIOSKOP/sa_dash_vmx/ZeeBIOSKOP.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/tvn2.png" group-title="MOVIES", TVN
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=742131dbcb507c31502eb60b32be6bb8:209f03c525bbbc9fd8652aa7a9cc5cb0
https://testfunctionlive.mncnow.id/live/eds/tvN/sa_dash_vmx/tvN.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/hitsmov.png" group-title="MOVIES", HITS MOVIE
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5d9684b1737e3b68801b4cff7225d4bb:902e7634820c26a8ff36f3708f0191d4
https://testfunctionlive.mncnow.id/live/eds/HitsMovies/sa_dash_vmx/HitsMovies.mpd
 
#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/hits.png" group-title="MOVIES", HITS
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=78d17d4851a5e9eede96f283b15ec053:c5ae33f70cc967fe107b35eb7225f52a
https://testfunctionlive.mncnow.id/live/eds/HITS/sa_dash_vmx/HITS.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/kix.png" group-title="MOVIES", KIX
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=fe761e8fac143d40510e70825dad0b20:eed9fb0b4e254e9104ef98e8a7035387
https://testfunctionlive.mncnow.id/live/eds/KIX/sa_dash_vmx/KIX.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/tvn.png" group-title="MOVIES", TVN MOVIES
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=45c004003b09719751adb885d28d491f:fe82bc3ffe00477c833812fae74caed7
https://testfunctionlive.mncnow.id/live/eds/tvNMovies/sa_dash_vmx/tvNMovies.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/cinemaworld.png" group-title="MOVIES", CINEMA WORLD
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=958df746f24f371dffc95e7cd714fbd7:fbd6e4540b9a917a27da8be01542f53f
https://testfunctionlive.mncnow.id/live/eds/CinemaWorld/sa_dash_vmx/CinemaWorld.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/visiprime.png" group-title="MOVIES", VISION PRIME
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=50056951f6d5f5fbaf286cd99c965379:4ec78e3b7d66d1db3815a127f792b604
https://testfunctionlive.mncnow.id/live/eds/VisionPrime/sa_dash_vmx/VisionPrime.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/oktv.png" group-title="MOVIES", OKTV
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=57d2ac9210cfbca3596cc679a01c8b29:d5e35c0f39c76adf24853d7ea18c71e7
https://testfunctionlive.mncnow.id/live/eds/OKTV/sa_dash_vmx/OKTV.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/axn.png" group-title="MOVIES", AXN
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c5d5297a84f8b2de977f07286345c591:bdb773d6d25303b75a396b8040cfaf8c
https://testfunctionlive.mncnow.id/live/eds/AXN/sa_dash_vmx/AXN.mpd
 
#EXTINF:-1 tvg-logo="http://guki.my.id/logo/movie/rockenter.png" group-title="MOVIES", ROCK ENTERTAINMENT
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=57d2ac9210cfbca3596cc679a01c8b29:d5e35c0f39c76adf24853d7ea18c71e7
https://testfunctionlive.mncnow.id/live/eds/Rockentertainment/sa_dash_vmx/Rockentertainment.mpd

#EXTINF:-1 tvg-id="INFO" group-title="MOVIES" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_b4umovies.png" ch-number="92",B4U MOVIES
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/b4umovieindia.m3u8

#EXTINF:-1 tvg-id="INFO" group-title="MOVIES" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_xingkong.png" ch-number="92",XING KONG CHINA
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/xingkong.m3u8

#EXTINF:-1 tvg-id="INFO" group-title="MOVIES" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_lotusmacau.png" ch-number="92",LOTUS MACAU
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/lotusmacau.m3u8

#EXTINF:-1 tvg-id="INFO" group-title="MOVIES" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/994ca4439869fb20cfc6.png" ch-number="92",LTN FAMILY
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/ltn-family.m3u8

#EXTINF:-1 tvg-id="INFO" group-title="MOVIES" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/ca22c587c19948f1567e.png" ch-number="92",FILMAX
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/filmax.m3u8

#EXTINF:-1 tvg-name="IMC" tvg-logo="https://hometv.pw/logo/movies/imc.png" group-title="MOVIES",IMC
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/130/imc/manifest.mpd

#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=https://tiemnhazunn.click/key/keyy/warnertv.php
EXTINF:-1 tvg-name="WARNER" tvg-logo="https://hometv.pw/logo/movies/warner.png" group-title="MOVIES",WARNER
http://muka03.wanicelife.com:8880/live/3ca7043n04/asfde32e2/71094.ts

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="PARAMOUNT" tvg-logo="https://hometv.pw/logo/movies/paramount.png" group-title="MOVIES",PARAMOUNT
https://liveaneviadev.mncnow.id/live/eds/Paramount-HD/sa_dash_vmx/Paramount-HD.mpd

#EXTINF:-1 tvg-name="CCM" tvg-logo="https://hometv.pw/logo/movies/ccm.png" group-title="MOVIES",CCM 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0 
http://op-group1-swiftservehd-1.dens.tv/h/h239/02.m3u8

#EXTINF:-1 tvg-name="CELESTIAL MOVIES" tvg-logo="https://hometv.pw/logo/movies/celestial_movies.png" group-title="MOVIES",CELESTIAL MOVIES 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0 
http://op-group1-swiftservehd-1.dens.tv/h/h212/02.m3u8

#EXTINF:-1  tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-NF3RHfEGavxzvr1pOyyj3v6lVy60ZPfKozrlnezqG3_5Mrc8_WtptJEU&s=10" group-title="MOVIES",Zee CINEMA
http://cdnmax.pro:80/S45C43U81V36R5/5ZS04ERNG2DCVPWG/132025

#EXTINF:-1 tvg-name="ROCK ACTION" tvg-logo="https://hometv.pw/logo/movies/rock_action.png" group-title="MOVIES",ROCK ACTION
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0 
http://op-group1-swiftservehd-1.dens.tv/h/h218/02.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="AXN" tvg-logo="https://hometv.pw/logo/movies/axn.png" group-title="MOVIES",AXN
https://liveaneviadev.mncnow.id/live/eds/AXN/sa_dash_vmx/AXN.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="KIX" tvg-logo="https://hometv.pw/logo/movies/kix.png" group-title="MOVIES",KIX 
https://liveaneviadev.mncnow.id/live/eds/KIX/sa_dash_vmx/KIX.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="THRILL" tvg-logo="https://hometv.pw/logo/movies/thrill.png" group-title="MOVIES",THRILL 
https://liveaneviadev.mncnow.id/live/eds/Thrill/sa_dash_vmx/Thrill.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="TVN Movies" tvg-logo="https://hometv.pw/logo/movies/tvn_movies.png" group-title="MOVIES",TVN Movies 
https://liveaneviadev.mncnow.id/live/eds/tvNMovies/sa_dash_vmx/tvNMovies.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="GALAXY" tvg-logo="https://hometv.pw/logo/movies/galaxy.png" group-title="MOVIES",GALAXY 
https://liveaneviadev.mncnow.id/live/eds/Galaxy-HD/sa_dash_vmx/Galaxy-HD.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="GALAXY PREMIUM" tvg-logo="https://hometv.pw/logo/movies/galaxy_premium.png" group-title="MOVIES",GALAXY PREMIUM 
https://liveaneviadev.mncnow.id/live/eds/GalaxyPremium-HD/sa_dash_vmx/GalaxyPremium-HD.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="CINEMA WORLD" tvg-logo="https://hometv.pw/logo/movies/cinema_world.png" group-title="MOVIES",CINEMA WORLD
https://liveaneviadev.mncnow.id/live/edsCinemaWorld/sa_dash_vmx/CinemaWorld.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="HITS MOVIES" tvg-logo="https://hometv.pw/logo/movies/hits_movies.png" group-title="MOVIES",HITS MOVIES 
https://liveaneviadev.mncnow.id/live/eds/HitsMovies/sa_dash_vmx/HitsMovies.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="CINEMACHI" tvg-logo="https://hometv.pw/logo/movies/cinemachi.png" group-title="MOVIES",CINEMACHI
https://liveaneviadev.mncnow.id/live/eds/Cinemachi-HD/sa_dash_vmx/Cinemachi-HD.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="CINEMACHI ACTION" tvg-logo="https://hometv.pw/logo/movies/cinemachi_action.png" group-title="MOVIES",CINEMACHI ACTION 
https://liveaneviadev.mncnow.id/live/eds/Cinemachi-Action/sa_dash_vmx/Cinemachi-Action.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="CINEMACHI MAX" tvg-logo="https://hometv.pw/logo/movies/cinemachi_max.png" group-title="MOVIES",CINEMACHI MAX 
https://liveaneviadev.mncnow.id/live/eds/Cinemachi-Max-HD/sa_dash_vmx/Cinemachi-Max-HD.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="CINEMACHI XTRA" tvg-logo="https://hometv.pw/logo/movies/cinemachi_xtra.png" group-title="MOVIES",CINEMACHI XTRA 
https://liveaneviadev.mncnow.id/live/eds/Cinemachi-Xtra-HD/sa_dash_vmx/Cinemachi-Xtra-HD.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="My CINEMA" tvg-logo="https://hometv.pw/logo/movies/my_cinema.png" group-title="MOVIES",My CINEMA
https://liveaneviadev.mncnow.id/live/eds/MyCinema/sa_dash_vmx/MyCinema.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="My CINEMA Asia" tvg-logo="https://hometv.pw/logo/movies/my_cinema_asia.png" group-title="MOVIES",My CINEMA Asia
https://liveaneviadev.mncnow.id/live/eds/MyCinema-Asia/sa_dash_vmx/MyCinema-Asia.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="My FAMILY Channel" tvg-logo="https://hometv.pw/logo/movies/my_family_channel.png" group-title="MOVIES",My FAMILY Channel
https://liveaneviadev.mncnow.id/live/eds/MyFamily/sa_dash_vmx/MyFamily.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NjcwYWI2ZGEtYzE4Yi0zZWFlLTljOWYtZGEzOGIwYWFjN2I1
#EXTINF:-1 tvg-name="MCE" tvg-logo="https://hometv.pw/logo/movies/mce.png" group-title="MOVIES",MCE
http://210.210.155.35/uq2663/h/h18/index.m3u8?app_type=web&userid=4rr0w&tkn=bl4ck&chname=My_Cinema_Europe_HD

=====================================================================================###### KNOWLEDGE #####==================================================================


#EXTINF:-1 tvg-ID="bbcearth.id" tvg-name="BBC Earth ID" group-title="KNOWLEDGE" tvg-logo="http://guki.my.id/logo/know/bbc.png", BBC EARTH
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c154c12b5f8336cc9cbef82fb5cc0ab4:5c365427c75eacf217255effcb5fff3e
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://testfunctionlive.mncnow.id/live/eds/BBCEarth-HD/sa_dash_vmx/BBCEarth-HD.mpd

#EXTINF:-1 tvg-ID="crimeinvestigation.id" tvg-name="Crime Investigation ID" group-title="KNOWLEDGE" tvg-logo="http://guki.my.id/logo/know/crime.png", CRIME INVESTIGATION
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=dc6157edc80fa15e6b6f23e695d461e4:7c068dd99c87e0ab1efc635bb77adcb4
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://testfunctionlive.mncnow.id/live/eds/CrimeInvestigation/sa_dash_vmx/CrimeInvestigation.mpd

#EXTINF:-1 tvg-ID="discoverychannel.id" tvg-name="Discovery Channel ID" group-title="KNOWLEDGE" tvg-logo="http://guki.my.id/logo/know/cgtn.png", CGTN DOCUMENTARY
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=87354c602dcabe0eef472f2a68f6685a:518ecaa33b9f05494f8cfaa7dd56a968
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://testfunctionlive.mncnow.id/live/eds/CGTN_Doc/sa_dash_vmx/CGTN_Doc.mpd

#EXTINF:-1 tvg-ID="history.id" tvg-name="History ID" group-title="KNOWLEDGE" tvg-logo="http://guki.my.id/logo/know/history.png", HISTORY
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=2ccaa7d9731c2e69fa5344c5a547b836:d23fb6a3c73eb7ab8ad19ca841db0fb5
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://testfunctionlive.mncnow.id/live/eds/History/sa_dash_vmx/History.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/know/nasa.jpg" group-title="KNOWLEDGE",NASA TV (+)
https://ntv1.akamaized.net/hls/live/2014075/NASA-NTV1-HLS/master_2000.m3u8

#EXTINF:-1 tvg-ID="nationalgeographicchannelhd.id" tvg-name="National Geographic Channel HD ID" group-title="KNOWLEDGE" tvg-logo="http://guki.my.id/logo/know/outdoors.png", OUTDOORS
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=05457a5e16a76fe666a22cc7ae2c6548:626e37901bfb985e994d714e9f9de1b5
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://testfunctionlive.mncnow.id/live/eds/NatGeoChannel/sa_dash_vmx/NatGeoChannel.mpd

#EXTINF:-1 tvg-ID="nationalgeographicwild.id" tvg-name="National Geographic Wild ID" group-title="KNOWLEDGE" tvg-logo="http://guki.my.id/logo/know/love.png", LOVE NATURE
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c3066eaa0984588f78d12dcdb75ef88b:4e98eb4927941bff51ea526d223fa16d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://testfunctionlive.mncnow.id/live/eds/NatGeoWild/sa_dash_vmx/NatGeoWild.mpd

#EXTINF:-1 group-title="KNOWLEDGE" tvg-logo="https://i.ibb.co/4MY5pwT/ap.jpg", ANIMAL PLANET HD
https://raw.githubusercontent.com/mimipipi22/lalajo/main/animalplanet.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTINF:-1 tvg-id="GlobalTrekker.id"  tvg-logo="https://dl.dropbox.com/scl/fi/qb2yulbwkwllxm7skeiu4/Global-trekker.jpeg?rlkey=qavgisctg9kzup3vv8shzx2x6&dl=0" group-title="KNOWLEDGE", Global Trekker
https://testfunctionlive.mncnow.id/live/eds/Globaltrekker/sa_dash_vmx/Globaltrekker.mpd|Referer=https://www.visionplus.id/

#EXTINF:-1 tvg-logo="https://dl.dropbox.com/s/yaa8ie58g3ztylt/Screenshot_20230214_202558_Dropbox.jpg" group-title="KNOWLEDGE",Wild Earth
https://wildearth-roku.amagi.tv/master.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://dl.dropboxusercontent.com/s/w0qsuym08w7fmky/insight.png" group-title="KNOWLEDGE", INSIGHT TV
https://insighttv-samsung-us.amagi.tv/playlist.m3u8

#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/8vegaz21bl7vv76/nasa.png" group-title="KNOWLEDGE", NASA
https://ntv1.akamaized.net/hls/live/2014075/NASA-NTV1-HLS/master_2000.m3u8

#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/obf1lb00afsqzuu/people.png" group-title="KNOWLEDGE", PEOPLE ARE AWESOME
https://dai2.xumo.com/xumocdn/p=redbox&deviceid=&is_lat=&subp=RedboxdesktopWebWindows/amagi_hls_data_xumo1212A-redboxpeopleareawesome/CDN/1280x720_5000000/chunklist.m3u8

#EXTINF:-1 group-title="KNOWLEDGE" tvg-logo="https://dl.dropboxusercontent.com/s/dhokqih7oixf7z1/denslearning.png", LEARNING & Pengetahuan
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
http://op-group1-swiftservehd-1.dens.tv/h/h236/index.m3u8

#EXTINF:-1 group-title="KNOWLEDGE"KNOWLEDGE tvg-logo="https://dl.dropboxusercontent.com/s/72sqnvzggklsllz/animalplanet.png", Animal Planet
https://varun-iptv.netlify.app/m3u/Animal_Planet.m3u8

#EXTINF:-1 group-title="KNOWLEDGE" tvg-logo="https://dl.dropboxusercontent.com/s/rvxizpk5qmtsdc0/natgeo.png" , National Geograpic
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=bbbd159cc425464b908f0a263556672f:116f6adc67a5d89ded7a31a2d4d7d420
https://cors-proxy.elfsight.com/https://linear-novi.stvacdn.spectrum.com/LIVE/1142/dash/cenc/NGCHD_00158/manifest.mpd

#EXTINF:-1 group-title="KNOWLEDGE" tvg-logo="https://dl.dropboxusercontent.com/s/xo469bsgq43wbc6/natgeowild.png", Nat Geo Wild
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#EXTVLCOPT:http-referer=https://webtv.sk/tv/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://drm.antik.sk/widevine/key
https://cors-proxy.elfsight.com/https://dash2.antik.sk/stream/hisi_ngw/playlist_cbcs.mpd

#EXTINF:-1 channel-id="samsung-GBBA220000751" tvg-id="GBBA220000751" tvg-logo="https://i.ibb.co/Yy7fQ6T/in-wild.png" group-title="KNOWLEDGE" , INWILD
https://i.mjh.nz/SamsungTVPlus/GBBA220000751.m3u8	  

=========================================== ENTERTAINMENT ===========================================

#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#EXTINF:-1 tvg-id="Music TV" tvg-url="https://bit.ly/JejeVisionEPG" tvg-logo="https://i.ibb.co/jyCGbnT/music.png" group-title="ENTERTAINMENT",Music TV
https://testfunctionlive.mncnow.id/live/eds/MusicChannel/sa_dash_vmx/MusicChannel.mpd

#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://yang-nyuri-bintitan.openwindows037.workers.dev/
#EXTINF:-1 tvg-logo="https://i.ibb.co/TR9ZT5D/images.png" group-title="ENTERTAINMENT",Seven Musik
http://103.199.161.254/Content/7smusic/Live/Channel(7smusic)/Stream(02)/index.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="MTV LIVE" tvg-logo="https://i.ibb.co/bJBQKn7/mtv-live.png" group-title="ENTERTAINMENT",Mtv Live
https://testfunctionlive.mncnow.id/live/eds/MTV/sa_dash_vmx/MTV.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="MTV 90s" tvg-logo="https://i.ibb.co/Mk8Z54F/90.png" group-title="ENTERTAINMENT",Mtv 90s
https://testfunctionlive.mncnow.id/live/eds/MTV-90-HD/sa_dash_vmx/MTV-90-HD.mpd

#EXTINF:-1 tvg-name="" tvg-id="" group-title="ENTERTAINMENT" tvg-logo="https://i.ibb.co/2gkLJn7/7m70.jpg" ,Now 70
https://lightning-now70s-samsungnz.amagi.tv/playlist.m3u8

#EXTINF:-1 tvg-name="" tvg-id="" group-title="ENTERTAINMENT" tvg-logo="https://i.ibb.co/60k5j41/80.png",Now 80
https://lightning-now80s-samsunguk.amagi.tv/playlist.m3u8

#EXTINF:-1 tvg-name="" tvg-id="" group-title="ENTERTAINMENT" tvg-logo="https://i.ibb.co/tM3zQ5V/rock.png",Now Rock
https://lightning-now90s-samsungnz.amagi.tv/playlist.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:0 group-title="ENTERTAINMENT" tvg-logo="http://www.dens.tv/images/channel-logo/89.jpg",ONe
#https://testfunctionlive.mncnow.id/live/eds/SetOne/sa_dash_vmx/SetOne.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="VISION PRIME" tvg-logo="https://hometv.pw/logo/entertainment/vision_prime.png" group-title="ENTERTAINMENT",VISION PRIME
https://liveaneviadev.mncnow.id/live/eds/VisionPrime/sa_dash_vmx/VisionPrime.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="OK TV" tvg-logo="https://hometv.pw/logo/entertainment/oktv.png" group-title="ENTERTAINMENT",OK TV 
https://liveaneviadev.mncnow.id/live/eds/OKTV/sa_dash_vmx/OKTV.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="FMN" tvg-logo="https://hometv.pw/logo/entertainment/fmn.png" group-title="ENTERTAINMENT",FMN 
https://liveaneviadev.mncnow.id/live/eds/FMN/sa_dash_vmx/FMN.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="MNC ENTERTAINMENT" tvg-logo="https://hometv.pw/logo/entertainment/ent.png" group-title="ENTERTAINMENT",MNC ENTERTAINMENT 
https://liveaneviadev.mncnow.id/live/eds/MNCEntertainment/sa_dash_vmx/MNCEntertainment.mpd


#EXTINF:-1 group-title="ENTERTAINMENT" tvg-id="hitsnow.sg" tvg-logo="https://www.hitstv.com/assets/hits-now-logo-white.png",HITS NOW
https://cdn08jtedge.indihometv.com/dassdvr/134/hitsnow/manifest.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="SONY ONE" tvg-logo="https://hometv.pw/logo/entertainment/one.png" group-title="ENTERTAINMENT", ONE
https://liveaneviadev.mncnow.id/live/eds/SetOne/sa_dash_vmx/SetOne.mpd

#EXTINF:-1 tvg-name="SONY GEM" tvg-logo="https://hometv.pw/logo/entertainment/gem.png" group-title="ENTERTAINMENT",SONY GEM 
https://cdn08jtedge.indihometv.com/dassdvr/133/sgem/manifest.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NjcwYWI2ZGEtYzE4Yi0zZWFlLTljOWYtZGEzOGIwYWFjN2I1
#EXTINF:0 group-title="ENTERTAINMENT" tvg-logo="https://picture.dens.tv/wp/img/tvchannels_v1/340x160/1692691581_tvchannels_v1.jpg", NaDoo KOREAN
https://op-krgroup1-swiftservehd-1.dens.tv/h/h125/live.m3u8?app_type=web&userid=jjj&chname=NaDooKorean

#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=0403e654ddab419db6cc72bb3fa51248:9d43bcc51f3750550d321cdc37e57cc9
#EXTINF:0 group-title="ENTERTAINMENT" tvg-logo="http://www.dens.tv/images/channel-logo/5.jpg", GEM
https://tglmp01.akamaized.net/out/v1/acd34a6d1e2540f888793461457b77e1/manifest.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:0 group-title="ENTERTAINMENT" tvg-logo="http://www.dens.tv/images/channel-logo/101.jpg", HITS
https://testfunctionlive.mncnow.id/live/eds/HITS/sa_dash_vmx/HITS.mpd

#EXTINF:0 group-title="ENTERTAINMENT" tvg-logo="http://www.dens.tv/images/channel-logo/119.jpg", HITS Movies
https://cdn08jtedge.indihometv.com/dassdvr/134/hitsnow/manifest.mpd

#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be2b660c5727/20230224132820.jpg",Channel Seru!
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; Android 8.0.0;) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.90 Mobile Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive 
#KODIPROP:inputstream.adaptive.manifest_type=dash 
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey 
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cors-proxy.pulsesoftware.com/https://cdn08jtedge.indihometv.com/dassdvr/134/seru/manifest.mpd

#EXTINF:-1 group-title="ENTERTAINMENT"  tvg-logo="https://images.indihometv.com/logo_citradangdut_ver1.png",CITRA DANGDUT
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=636974726164616e6764757430303030:65232737d3a5e4e14dbfd3d96805d30b
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/130/citradangdut/manifest.mpd

#EXTINF:-1 group-title="ENTERTAINMENT"  tvg-logo="https://images.indihometv.com/logo_insert_small1.png?v=2.0.0.13",INSERT
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=696e7365727430303030303030303030:13c460676bc323f6b567493aadee2f64
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/130/insert/manifest.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/0h0N0LQ/download-1.jpg" group-title="ENTERTAINMENT",Citra Drama 
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/130/cdrama/manifest.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://dl.dropboxusercontent.com/s/g6cqxvjwvh4ji6e/ent.png",ent
https://testfunctionlive.mncnow.id/live/eds/MNCEntertainment/sa_dash_vmx/MNCEntertainment.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://hometv.pw/logo/entertainment/celebrities.png",Celebrities TV
https://testfunctionlive.mncnow.id/live/eds/MNCInfotainment/sa_dash_vmx/MNCInfotainment.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://dl.dropboxusercontent.com/s/4hp68jpssqyjh9b/fmn.png", FMN
https://testfunctionlive.mncnow.id/live/eds/FMN/sa_dash_vmx/FMN.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/FwqmNRG/afn.png" group-title="ENTERTAINMENT",Asian Food Network
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=d591798aa38d43f9a879f2131227916f:c3eae7f33710d7d9e0058244aff37fb0
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/107/afc/manifest.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://i.ibb.co/NFbfDCb/litempik.png",Lifetime
https://testfunctionlive.mncnow.id/live/eds/Lifetime/sa_dash_vmx/Lifetime.mpd

#EXTINF:-1 tvg-id="INFO" group-title="ENTERTAINMENT" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_fashiontv.png" ch-number="92",FASHION TV
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/fashiontv.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://www.mncvision.id/userfiles/image/channel/channel_90.png",Okezone TV
https://testfunctionlive.mncnow.id/live/eds/LifeStyleFashion/sa_dash_vmx/LifeStyleFashion.mpd

#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c68574537fcd0174be2db0a25728/20200924033459.png",Dunia Lain
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=64756e69616c61696e30303030303030:d742218958e10ca989be6a63f2db9b6d
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/130/dunialain/manifest.mpd

#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c6858119921801816b52686d5e62/20220616070251.jpg",Pretty TV
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/4/4028c6858119921801816b52686d5e62/manifest.mpd

#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c685840ff04901846167c11f3e5f/20230627074533.jpg",Fitness TV
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/100/4028c685840ff04901845601ffcb4364/manifest.mpd

#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c6857fe540a1018060ac364140ba/20220425122220.jpg",Fashion TV
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/3/4028c6857fe540a1018060ac364140ba/manifest.mpd

#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://cdnjkt4.transvision.co.id:1000/image/web/channel/4028c6857e04fca5017ec528dc550e98/20230627080211.png",Musik Indonesia
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubum.iptvgo.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/2/4028c685730a4243017317dee5df1572/manifest.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://dl.dropboxusercontent.com/s/i7o7np585xsyazy/oktv.png", OK TV
https://testfunctionlive.mncnow.id/live/eds/OKTV/sa_dash_vmx/OKTV.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/swpb44zffvl7zk1/visionprime.png" group-title="ENTERTAINMENT", Vision Prime
https://testfunctionlive.mncnow.id/live/eds/VisionPrime/sa_dash_vmx/VisionPrime.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://dl.dropboxusercontent.com/s/eqyxytz33nyxdhz/nhkjapan.png", NHK World Japan
https://testfunctionlive.mncnow.id/live/eds/NHKWorldTV/sa_dash_vmx/NHKWorldTV.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://dl.dropbox.com/s/l19c1dt9jlw3svc/images%20%281%29.jpeg", NHK World Premium 
https://testfunctionlive.mncnow.id/live/eds/NHKWorldPremium/sa_dash_vmx/NHKWorldPremium.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://dl.dropboxusercontent.com/s/3xr054htzqtielq/arirang.png", Arirang
https://testfunctionlive.mncnow.id/live/eds/Arirang/sa_dash_vmx/Arirang.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://dl.dropboxusercontent.com/s/rqsz9oc0uwranpm/tv5monde.png", TV5 Monde Asie
https://testfunctionlive.mncnow.idlive/eds/TV5/sa_dash_vmx/TV5.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/a0pnyssary1h07u/shanghaidragontv.png" group-title="ENTERTAINMENT", Shanghai Dragon TV
https://testfunctionlive.mncnow.id/live/eds/ShanghaiDragonTV/sa_dash_vmx/ShanghaiDragonTV.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/dwhgz7cbeo3w2we/anhuitv.png" group-title="ENTERTAINMENT",Anhui TV
https://testfunctionlive.mncnow.id/live/eds/AnhuiTV/sa_dash_vmx/AnhuiTV.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/vc7hf9brqhdw3v4/hunantv.png" group-title="ENTERTAINMENT", Hunan Tv
https://testfunctionlive.mncnow.id/live/eds/HunanTV/sa_dash_vmx/HunanTV.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/zx4et44ip5hrgur/jiangsutv.png" group-title="ENTERTAINMENT",Jiangsu Tv
https://testfunctionlive.mncnow.id/live/eds/JiangsuTV/sa_dash_vmx/JiangsuTV.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/a03htptk5qxa4zz/xingkongtv.png" group-title="ENTERTAINMENT", Xingkong TV
https://testfunctionlive.mncnow.id/live/eds/XingKongTV/sa_dash_vmx/XingKongTV.mpd
 
#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/qg4jvzdgooy7hq2/k%2B.png" group-title="ENTERTAINMENT", K+
http://210.210.155.37/uq2663/h/h08/index.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://dl.dropboxusercontent.com/s/dh5ek8aw769ut0n/duniasinema.png" group-title="ENTERTAINMENT", Dunia Sinema
https://unifi-live05.secureswiftcontent.com/UnifiHD/live27-1080FHD.m3u8

#EXTINF:-1 group-title="ENTERTAINMENT" tvg-logo="https://dl.dropboxusercontent.com/s/6dsa9oe7uzjdx1j/kbsworld.png", KBS World
https://kbsworld-ott.akamaized.net/hls/live/2002341/kbsworld/master.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="TV5 MONDE" tvg-logo="https://hometv.pw/logo/entertainment/tv5_asia.png" group-title="ENTERTAINMENT",TV5 MONDE
https://liveaneviadev.mncnow.id/live/eds/TV5/sa_dash_vmx/TV5.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="ABC AUSTRALIA" tvg-logo="https://hometv.pw/logo/entertainment/abc_australia.png" group-title="ENTERTAINMENT",ABC AUSTRALIA
https://liveaneviadev.mncnow.id/live/eds/AustraliaPlus/sa_dash_vmx/AustraliaPlus.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="NHK WORLD" tvg-logo="https://hometv.pw/logo/entertainment/nhk_world.png" group-title="ENTERTAINMENT",NHK WORLD (V+)
https://liveaneviadev.mncnow.id/live/eds/NHKWorldTV/sa_dash_vmx/NHKWorldTV.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="NHK WORLD PREMIUM" tvg-logo="https://hometv.pw/logo/entertainment/nhk_premium.png" group-title="ENTERTAINMENT",NHK WORLD PREMIUM
https://liveaneviadev.mncnow.id/live/edsNHKWorldPremium/sa_dash_vmx/NHKWorldPremium.mpd

#EXTINF:-1 tvg-name="KBS WORLD" tvg-logo="https://hometv.pw/logo/entertainment/kbs_world.png" group-title="ENTERTAINMENT",KBS WORLD
https://wms4-kortv.akamaized.net/a_live/63719963/smil:20ch011.smil/playlist.m3u8
https://kbsworld-ott.akamaized.net/hls/live/2002341/kbsworld/01.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="ARIRANG" tvg-logo="https://hometv.pw/logo/entertainment/arirang.png" group-title="ENTERTAINMENT",ARIRANG
https://liveaneviadev.mncnow.id/live/eds/Arirang/sa_dash_vmx/Arirang.mpd

#EXTINF:-1 tvg-name="SBS ENGLISH" tvg-logo="https://hometv.pw/logo/entertainment/sbs_english.png" group-title="ENTERTAINMENT",SBS KOREA
https://epg.pw/stream/baa697f88cf0cb319ba97478931df42fd04cc15da234020b188858be1fe5179f.m3u8

#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/zjecc4d8dq1zrc7/sbs.png" group-title="ENTERTAINMENT", SBS TV
http://1.245.74.5:1935/live/tv/.m3u8

===============================================================================##### SPORT #####========================================================================

#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=882c9f5613b43b47adc70aa968a308ce:de534ef8914bfe62ba3cdd6bdb9e1c04
#EXTINF:-1 tvg-logo="https://i.ibb.co/TYCj71w/usa.png"  group-title="SPORTS", USA NETWORK
https://fsly.stream.peacocktv.com/Content/CMAF_OL1-CTR-4s/Live/channel(usa-east)/master.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/zsSKtpb/busa.png" group-title="SPORTS",beiN Sport USA
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=f81af7922a8d461aa81da4b225f8f883:d0f27c123c5f1331429d08638fa3727e
https://cors-proxy.elfsight.com/https://linear-novi.stvacdn.spectrum.com/LIVE/1144/dash/cenc/BEIN1HD_04735/manifest.mpd

#EXTINF:-1 tvg-id="beIN Sports HDTV (Spanish)" tvg-logo="https://i.ibb.co/XJvxPsw/bse.png" group-title="SPORTS",beiN Sport En Español
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=42176706e135442ab500ee8b3a32ff31:072ea5e4b049541f4aba6f5d6bc2b3c8
https://cors-proxy.elfsight.com/https://linear-novi.stvacdn.spectrum.com/LIVE/1147/dash/cenc/BEIN2HD_04736/manifest.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/bein1id.png" group-title="SPORTS",Indihome beiN Sport 1 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/133/beib1/manifest.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/bein3id.png" group-title="SPORTS",Indihome beiN Sport 3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cors-proxy.elfsight.com/https://cdn08jtedge.indihometv.com/dassdvr/133/beib2/manifest.mpd

#EXTINF:-1 tvg-logo="https://hometv.pw/logo/sports/soccer_channel.jpg" group-title="SPORTS",Soccer Chanel
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-user-agent=MMozilla/5.0 (Linux; Android 9; CPH2083 Build/PPR1.180610.011) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/79.0.3945.116 Mobile Safari/537.36
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/soccerchannel-test/sa_dash_vmx/soccerchannel-test.mpd

#EXTINF:-1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/ss1.png" group-title="SPORTS",Sportstar 1
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://cempedak-live-cdn.mncnow.id/live/eds/MNCSports-HD/sa_dash_vmx/MNCSports-HD.mpd
 
#EXTINF:-1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/ss2.png" group-title="SPORTS",Sportstar 2
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://cempedak-live-cdn.mncnow.id/live/eds/MNCSports2-HD/sa_dash_vmx/MNCSports2-HD.mpd
 
#EXTINF:-1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/ss3.png" group-title="SPORTS",Sportstar 3
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://cempedak-live-cdn.mncnow.id/live/eds/MNCSports3-HD/sa_dash_vmx/MNCSports3-HD.mpd
 
#EXTINF:-1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/ss4.png" group-title="SPORTS",Sportstar 4
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=b81b1942c65f35547ced1bff074206a5:a07dc4d86f51db7195f4b7e2abe9d9e8
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://cempedak-live-cdn.mncnow.id/live/eds/Sportstar4/sa_dash_vmx/Sportstar4.mpd

#EXTINF:-1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/spotv.png" group-title="SPORTS", SPOTV
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://melon-live-cdn.mncnow.id/live/eds/SPOTV-HD/sa_dash_vmx/SPOTV-HD.mpd
 
#EXTINF:-1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/spotv2.png" group-title="SPORTS", SPOTV 2
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://melon-live-cdn.mncnow.id/live/eds/SPOTV2-HD/sa_dash_vmx/SPOTV2-HD.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="http://guki.my.id/logo/sports/E1.png",Eleven 1 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-054/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="http://guki.my.id/logo/sports/E2.png",Eleven 2 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-055/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="http://guki.my.id/logo/sports/E3.png",Eleven 3 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-056/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="http://guki.my.id/logo/sports/E4.png",Eleven 4 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-057/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="http://guki.my.id/logo/sports/E5.png",Eleven 5 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-058/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="http://guki.my.id/logo/sports/E6.png",Eleven 6 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-059/stream.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/dzde1.png" group-title="SPORTS", DAZN DE 1
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-017/stream.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/dzde2.png" group-title="SPORTS", DAZN DE 2
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-018/stream.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/dzes1.png" group-title="SPORTS", DAZN ES 1
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-037/stream.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/dzes2.png" group-title="SPORTS", DAZN ES 2
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-038/stream.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/dzf1.png" group-title="SPORTS", Dazn F1
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-016/stream.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/dzlaliga.png" group-title="SPORTS", Dazn La Liga
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-043/stream.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/sportdigi.jpg" group-title="SPORTS",Sport Digital
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
https://dcf-ak-livedazn.akamaized.net/dashdrm/dazn-linear-022/stream.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/P1.png" group-title="SPORTS",Play Sport 1
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-051/stream.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/P2.png" group-title="SPORTS",Play Sport 2
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-052/stream.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/P3.png" group-title="SPORTS",Play Sport 3
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-053/stream.mpd

#EXTINF:-1 tvg-id="NBA TV" group-title="SPORTS" ch-number="15" tvg-logo="http://guki.my.id/logo/sports/nbatv.png",NBA TV DE
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-035/stream.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/tsn1.png" group-title="SPORTS", TSN 1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=dea83ced0141424e983e1afe463b4b0d:c00dd5dd17b0799aa4013f365a1393ce
https://live-ctv.video.9c9media.com/f/TSN/TSN1/manifest.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/tsn2.png" group-title="SPORTS", TSN 2
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ddc52c88e2c24d38a5bc8dda8a2acb61:ad5ea485464a13eec7dda3249c556446
https://live-ctv.video.9c9media.com/f/TSN/TSN2/manifest.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/tsn3.png" group-title="SPORTS", TSN 3
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c0f378ad54e14a9c85a3d8c986d2a51f:5e1d040743ff78715e464ffb905e68a9
https://live-ctv.video.9c9media.com/f/TSN/TSN3/manifest.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/tsn4.png" group-title="SPORTS", TSN 4
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=f0a2efd11e0643c3a45d6f67d02f1a97:85bf4469003bd28f01ea4fefedd5a431
https://live-ctv.video.9c9media.com/f/TSN/TSN4/manifest.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/tsn5.png" group-title="SPORTS", TSN 5
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=cb57741a1cee422690c6294a06eb1320:7a0cfd493df6ef7cc0d0bb3ad95cec8c
https://live-ctv.video.9c9media.com/f/TSN/TSN5/manifest.mpd

#EXTINF:-1 tvg-id="ArenaSport3Serbia.rs" tvg-logo="http://guki.my.id/logo/sports/1p.png" group-title="SPORTS",Arena Sport Premium 1
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/as_premium1.mpd

#EXTINF:-1 tvg-id="ArenaSport3Serbia.rs" tvg-logo="http://guki.my.id/logo/sports/2p.png" group-title="SPORTS",Arena Sport Premium 2
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/as_premium2.mpd

#EXTINF:-1 tvg-id="ArenaSport3Serbia.rs" tvg-logo="http://guki.my.id/logo/sports/3p.png" group-title="SPORTS",Arena Sport Premium 3
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/as_premium3.mpd

#EXTINF:-1 tvg-id="ArenaSport1Serbia.rs" tvg-logo="http://guki.my.id/logo/sports/a1.png" group-title="SPORTS",Arena Sport 1 
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/arena1.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://i.imgur.com/O9uDWnM.png",ARENA SPORT 1x2
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#https://webtvstream.bhtelecom.ba/hls6/arena_1x2.mpd

#EXTINF:-1 tvg-id="ArenaSport2Serbia.rs" tvg-logo="http://guki.my.id/logo/sports/a2.png" group-title="SPORTS",Arena Sport 2 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/arena2.mpd

#EXTINF:-1 tvg-id="ArenaSport3Serbia.rs" tvg-logo="http://guki.my.id/logo/sports/a3.png" group-title="SPORTS",Arena Sport 3 
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/arena3.mpd

#EXTINF:-1 tvg-id="ArenaSport3Serbia.rs" tvg-logo="http://guki.my.id/logo/sports/a4.png" group-title="SPORTS",Arena Sport 4
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/arena4.mpd

#EXTINF:-1 tvg-id="ArenaSport3Serbia.rs" tvg-logo="http://guki.my.id/logo/sports/a5.png" group-title="SPORTS",Arena Sport 5
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/arena5.mpd

#EXTINF:-1 tvg-id="ArenaSport3Serbia.rs" tvg-logo="http://guki.my.id/logo/sports/a6.png" group-title="SPORTS",Arena Sport 6
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/arena6.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC 1" tvg-logo="http://guki.my.id/logo/sports/sc1.jpg",SSC 1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=d84c325f36814f39bbe59080272b10c3:550727de4c96ef1ecff874905493580f
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
http://ssc1-ak.akamaized.net/out/v1/c696e4819b55414388a1a487e8a45ca1/index.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC 2" tvg-logo="http://guki.my.id/logo/sports/sc2.jpg",SSC 2
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=8bcfc55359e24bd7ad1c5560a96ddd3c:b5dcf721ab522af92a9d3bf0bd55b596
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc2-ak.akamaized.net/out/v1/a16db2ec338a445a82d9c541cc9293f9/index.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC 3" tvg-logo="http://guki.my.id/logo/sports/sc3.jpg",SSC 3
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=7de5dd08ad8041d586c2f16ccc9490a1:5e1503f3398b34f5099933fedab847ef
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc3-ak.akamaized.net/out/v1/42e86125555242aaa2a12056832e7814/index.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC 4" tvg-logo="http://guki.my.id/logo/sports/sc4.jpg",SSC 4
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5c672f6b85a94638872d0214f7806ed4:bf8756fbb866ee2d5c701c2289dd8de3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc4-ak.akamaized.net/out/v1/5267ea5772874b0db24559d643eaad93/index.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC 5" tvg-logo="http://guki.my.id/logo/sports/sc5.jpg",SSC 5
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c88b512b17ab4f6cb09eb0ff4a1056ed:adc08ee1c20a734972a55c9aebbd1888
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc5-ak.akamaized.net/out/v1/99289eac5a7b4319905da595afbd792b/index.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC EXTRA 1" tvg-logo="http://guki.my.id/logo/sports/scex1.jpg",SSC EXTRA 1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ecbc9e6fe6b145efb6658fb5cf7427f8:03c17e28911f71221acbc0b11f900401
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc-extra1-ak.akamaized.net/out/v1/647c58693f1d46af92bd7e69f17912cb/index.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC EXTRA 2" tvg-logo="http://guki.my.id/logo/sports/scex2.jpg",SSC EXTRA 2
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4d89249bd4ca4ebc9e70443265f9507d:cf074ffd2646c9c2f8513b47fa57bc30
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc-extra2-ak.akamaized.net/out/v1/8b70de2b70d447ba8a7450ba90926a2d/index.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC EXTRA 3" tvg-logo="http://guki.my.id/logo/sports/scex3.jpg",SSC EXTRA 3
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=98cfd6fd4812497fb24dc75f7545f2ee:d3006ee69e77b25939728ebf30d3180a
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc-extra3-ak.akamaized.net/out/v1/8f1c6c3f05ef4284a64b342891bd85ae/index.mpd

#EXTINF:-1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/sony1.png" group-title="SPORTS", Sony Sport 1 HD
#EXTVLCOPT:http-referrer=https://sony.newvideo.live/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.68
https://dai.google.com/linear/hls/event/wG75n5U8RrOKiFzaWObXbA/master.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/sony2.png" group-title="SPORTS", Sony Sport 2 HD
#EXTVLCOPT:http-referrer=https://sony.newvideo.live/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.68
https://dai.google.com/linear/hls/event/V9h-iyOxRiGp41ppQScDSQ/master.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/sony3.png" group-title="SPORTS", Sony Sport 3 HD
#EXTVLCOPT:http-referrer=https://sony.newvideo.live/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.68
https://dai.google.com/linear/hls/event/ltsCG7TBSCSDmyq0rQtvSA/master.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/sony4.png" group-title="SPORTS", Sony Sport 4 HD
#EXTVLCOPT:http-referrer=https://sony.bulbtv.online/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.68
https://pubads.g.doubleclick.net/ssai/event/tNzcW2ZhTVaViggo5ocI-A/master.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/sony5.png" group-title="SPORTS", Sony Sport 5 HD
#EXTVLCOPT:http-referrer=https://sony.newvideo.live/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.68
https://dai.google.com/linear/hls/event/r-eLp41YTHWTagvQSXFtAQ/master.m3u8

#EXTINF:1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/bein1.png" group-title="SPORTS",beiN Sport 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#EXTVLCOPT:http-referrer=https://sg-sg-sg.astro.com.my
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=1a655189ab5c49eb235308c2b1a9e710:3c4508af348844107f5e026a4fd6b16e
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/408/default_primary.mpd
#https://linearjitp02-playback.astro.com.my/dash-wv/dashiso/408/default.mpd

#EXTINF:1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/bein2.png" group-title="SPORTS",beiN Sport 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=39c175581e237eff9559607eb9b23c10:5102b12aac7756c65dcb46a101d960d3
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/5066/default_primary.mpd

#EXTINF:1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/bein3.png" group-title="SPORTS",beiN Sport 3
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=20c884ef8ed26b2762f8b1a78f2d1910:042a21bf236ca729b1e343ed6e0a6337
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/2705/default_primary.mpd

#EXTINF:1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/bein4.png" group-title="SPORTS",beiN Sport 4
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=cb419fa5f5498e2c6cbc39363248ddd7:b5853b51f2060025a822e62973154556
#https://49-231-37-236-rewriter.ais-vidnt.com/ais/play/origin/live/eds/S0004/DASH/S0004.mpd

#EXTINF:1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/bein5.png" group-title="SPORTS",beiN Sport 5
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=3a165f923cd49e616f173fc6c341cc56:4cb96186d69f1a63c40218812a6f6910
#https://49-231-37-236-rewriter.ais-vidnt.com/ais/play/origin/live/eds/S0005/DASH/S0005.mpd

#EXTINF:1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/bein6.png" group-title="SPORTS",beiN Sport 6
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ceac4607562049abb9d1b0309d9cd6f3:d396d277a364fab00d0193d25b700847
#https://49-231-37-236-rewriter.ais-vidnt.com/ais/play/origin/live/eds/S0006/DASH/S0006.mpd

#EXTINF:1 tvg-id="" tvg-logo="http://guki.my.id/logo/sports/bein7.png" group-title="SPORTS",beiN Sport 7
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=94a28a75b3891e92a97efbe76f941095:7b39cd0e318ee481b98c36a125c540fb
#https://49-231-37-236-rewriter.ais-vidnt.com/ais/play/origin/live/eds/S0007/DASH/S0007.mpd

#EXTINF:-1 tvg-id="Fox Deportes en Español (U.S.)" tvg-logo="https://i.ibb.co/58HXy9T/foxdeportes.png" group-title="SPORTS",Fox Deportes
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c9231d5e7a99429382e6a5c2e588e141:ca08ab407ab9393a814d720f1f41c6cf
https://cors-proxy.elfsight.com/https://linear.stvacdn.spectrum.com/LIVE/1106/dash/cenc/FXDEPHD/manifest.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="Fox Soccer Plus" tvg-logo="https://i.ibb.co/rbSp3Dd/foxsoccerplus.png",Fox Soccer Plus
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=260465aba18e40329932d47e9c7aa20b:2b79020e3f3ddc94ba84943ba72d898c
#https://cors-proxy.elfsight.com/https://linear.stvacdn.spectrum.com/LIVE/1143/dash/cenc/FSCPLHD/manifest.mpd?

#EXTINF:-1 group-title="SPORTS" tvg-id="Fox Sports 1 HDTV" tvg-logo="https://i.ibb.co/JWYjRrF/fs1.png", FS 1
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4aa03f4ba0b54774accf43d15af7be70:843a421b633ae576f7ad62872d0d71b1
https://cors-proxy.elfsight.com/https://linear-novi.stvacdn.spectrum.com/LIVE/1166/dash/cenc/SPEEDHD/manifest.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="Fox Sports 2" tvg-logo="https://i.ibb.co/pwRPZLw/fs2.png", FS 2
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=426b95e246774cb798a8c845fe6333d6:91e511fd8c290134b28c36ee1c386ea9
https://cors-proxy.elfsight.com/https://linear-novi.stvacdn.spectrum.com/LIVE/1108/dash/cenc/FS2HD_00564/manifest.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="TNTSports5.uk" tvg-logo="https://i.ibb.co/z7Vg6tQ/tntsp5.png",TNT Sport 5 UK
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=60c0d9b41475e01db4ffb91ed557fbcc:36ee40e58948ca15e3caba8d47b8f34b
#https://cors-proxy.elfsight.com/https://ottb.live.cf.ww.aiv-cdn.net/lhr-nitro/live/clients/dash/enc/gesdwrdncn/out/v1/79e752f1eccd4e18b6a8904a0bc01f2d/cenc.mpd

#EXTINF:0 tvg-logo="https://img01.products.bt.co.uk/content/dam/bt/portal/images/articles/sport/tiles/TNTSports.jpg/_jcr_content/renditions/landscape-mobile.570.321.jpg" group-title="SPORTS",TNT Sport 1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ae26845bd33038a9c0774a0981007294:63ac662dde310cfb4cc6f9b43b34196d
http://live.ll.ww.aiv-cdn.net/OTTB/lhr-nitro/live/clients/dash/enc/wf8usag51e/out/v1/bd3b0c314fff4bb1ab4693358f3cd2d3/cenc.mpd
 
#EXTINF:0 tvg-logo="https://img01.products.bt.co.uk/content/dam/bt/portal/images/articles/sport/tiles/TNTSports.jpg/_jcr_content/renditions/landscape-mobile.570.321.jpg" group-title="SPORTS",TNT Sport 2
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=6d1708b185c6c4d7b37600520c7cc93c:1aace05f58d8edef9697fd52cb09f441
http://live.ll.ww.aiv-cdn.net/OTTB/lhr-nitro/live/clients/dash/enc/f0qvkrra8j/out/v1/f8fa17f087564f51aa4d5c700be43ec4/cenc.mpd

#EXTINF:0 tvg-logo="https://img01.products.bt.co.uk/content/dam/bt/portal/images/articles/sport/tiles/TNTSports.jpg/_jcr_content/renditions/landscape-mobile.570.321.jpg" group-title="SPORTS",TNT Sport 3
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4e993aa8c1f295f8b94e8e9e6f6d0bfe:86a1ed6e96caab8eb1009fe530d2cf4f
http://live.ll.ww.aiv-cdn.net/OTTB/lhr-nitro/live/clients/dash/enc/lsdasbvglv/out/v1/bb548a3626cd4708afbb94a58d71dce9/cenc.mpd
 
#EXTINF:0 tvg-logo="https://img01.products.bt.co.uk/content/dam/bt/portal/images/articles/sport/tiles/TNTSports.jpg/_jcr_content/renditions/landscape-mobile.570.321.jpg" group-title="SPORTS",TNT Sport 4
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=e31a5a81caff5d07ea2411a571fc2e59:96c5ef69479732ae734f962748c19729
http://live.ll.ww.aiv-cdn.net/OTTB/lhr-nitro/live/clients/dash/enc/i2pcjr4pe5/out/v1/912e9db56d75403b8a9ac0a719110f36/cenc.mpd
 
#EXTINF:0 tvg-logo="https://img01.products.bt.co.uk/content/dam/bt/portal/images/articles/sport/tiles/TNTSports.jpg/_jcr_content/renditions/landscape-mobile.570.321.jpg" group-title="SPORTS",TNT Sport 5
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=60c0d9b41475e01db4ffb91ed557fbcc:36ee40e58948ca15e3caba8d47b8f34b
#http://live.ll.ww.aiv-cdn.net/OTTB/lhr-nitro/live/clients/dash/enc/gesdwrdncn/out/v1/79e752f1eccd4e18b6a8904a0bc01f2d/cenc.mpd

#EXTINF:0 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/1/1a/Canal%2B_Sport_2015.png" group-title="SPORTS",Canal+ Sport 1
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium486/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:0 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/1/1a/Canal%2B_Sport_2015.png" group-title="SPORTS",Canal+ Sport 2
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium487/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:0 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/1/1a/Canal%2B_Sport_2015.png" group-title="SPORTS",Canal+ Sport 3
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium488/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:0 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/1/1a/Canal%2B_Sport_2015.png" group-title="SPORTS",Canal+ Sport 4
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium489/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:0 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/1/1a/Canal%2B_Sport_2015.png" group-title="SPORTS",Canal+ Sport 5
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium490/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/NFGNs5T/tudn.png" group-title="SPORTS",USA TUDN
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=85c8956b207c44a693d89984803c908b:8d8ff21c464506ef396356dd761f5ccd
https://cors-proxy.elfsight.com/https://linear.stvacdn.spectrum.com/LIVE/1131/dash/cenc/TUDNUH_8283/manifest.mpd

#EXTINF:-1 tvg-id="unifi Sports 1" tvg-logo="https://i.ibb.co/p24tp0P/unifisports.png" group-title="SPORTS", UNIFI SPORTS
https://unifi-live02.secureswiftcontent.com/UnifiHD/live11.mpd

#EXTINF:-1 tvg-name="Матч ТВ Ⓢ" tvg-logo="https://i.imgur.com/kFdooR4.png" tvg-id="Match.ru" group-title="SPORTS",Матч!
https://streaming.televizor-24-tochka.ru/live/6.m3u8

#EXTINF:-1 tvg-id="AstroArena" group-title="SPORTS" ch-number="801" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/92_144.png",Astro Arena
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#EXTVLCOPT:http-referrer=https://sg-sg-sg.astro.com.my
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=efda647dad723563b625be8c05ee6110:6776985938b332164b97b81fe566a34a
#https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/2604/default_primary.mpd
https://linearjitp02-playback.astro.com.my/dash-wv/dashiso/2604/default.mpd

#EXTINF:-1 tvg-id="AstroArena" group-title="SPORTS" ch-number="801" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/92_144.png",Astro Arena 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#EXTVLCOPT:http-referrer=https://sg-sg-sg.astro.com.my
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=ead0335d60401225727a6d531e9c2710:1ee3b252227c5c2ec9378c833d2e14ff
#https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/5057/default_primary.mpd
https://linearjitp02-playback.astro.com.my/dash-wv/dashiso/5057/default.mpd

#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/5u2rs1d9jaqcwm2/astrosupersport2.png" group-title="SPORTS",ASSP 1
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium123/index.m3u8|origin=https://claplivehdplay.ru/
http://abcnew.site:8880/12mmk180105/81462658/1722
#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/5u2rs1d9jaqcwm2/astrosupersport2.png" group-title="SPORTS",ASSP 2
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium124/index.m3u8|origin=https://claplivehdplay.ru/
http://abcnew.site:8880/12mmk180105/81462658/1721
#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/5u2rs1d9jaqcwm2/astrosupersport2.png" group-title="SPORTS",ASSP 3
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium125/index.m3u8|origin=https://claplivehdplay.ru/
http://abcnew.site:8880/12mmk180105/81462658/1720
#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/5u2rs1d9jaqcwm2/astrosupersport2.png" group-title="SPORTS",ASSP 4
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=79f4028730acca9ab8b00f26158ddb10:91febe843c08c7cc523efd827292e40e
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/2506/default_primary.mpd

#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/b5jnn0j8lk9lo9w/truepremierfootball1.png" group-title="SPORTS",True Premiere 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 
#EXTVLCOPT:http-referrer=https://www.movie87hd.com/
https://sport.livedoomovies.com:4431/02_PremierHD1_720p/chunklist.m3u8
#https://ctrl.laotv.la/live/TSport1/index.m3u8

#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/3fh3h16lgp0835m/truepremierfootball2.png" group-title="SPORTS",True Premiere 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 
#EXTVLCOPT:http-referrer=https://www.movie87hd.com/
https://sport.livedoomovies.com:4431/02_PremierHD2_720p/chunklist.m3u8
#https://ctrl.laotv.la/live/TSport2/index.m3u8

#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/r83u0ga13f4ajpa/truepremierfootball3.png" group-title="SPORTS",True Premiere 3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 
#EXTVLCOPT:http-referrer=https://www.movie87hd.com/
https://sport.livedoomovies.com:4431/02_PremierHD3_720p/chunklist.m3u8
 
#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/j4qaqxhnqwijf63/truepremierfootball4.png" group-title="SPORTS",True Premiere 4
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 
#EXTVLCOPT:http-referrer=https://www.movie87hd.com/
https://www.livedoomovies.com:4431/02_PremierHD4_720p/chunklist.m3u8
 
#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/pcqvszx59tu0xg9/truepremierfootball5.png" group-title="SPORTS", True Premiere 5
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 
#EXTVLCOPT:http-referrer=https://www.movie87hd.com/
https://sport.livedoomovies.com:4431/02_PremierHD5_720p/chunklist.m3u8

#EXTINF:-1 group-title="SPORTS" tvg-id="truesports1.th" tvg-logo="https://dl.dropboxusercontent.com/s/3ypeowly0e6zqdb/truesports1.png",True Sports 1
#EXTVLCOPT:http-referrer=https://www.youdooball.com/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.79 Safari/537.36 Maxthon/5.2.7.3000
#https://sport.livedoomovies.com:4432/02_2sporthd1_720p/chunklist.m3u8
https://ctrl.laotv.la/live/TrueSport6/index.m3u8

#EXTINF:-1 group-title="SPORTS" tvg-id="truesports2.th" tvg-logo="https://dl.dropboxusercontent.com/s/fv8l24cb1ihz689/truesports2.png",True Sports 2
#EXTVLCOPT:http-referrer=https://www.youdooball.com/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.79 Safari/537.36 Maxthon/5.2.7.3000
#https://sport.livedoomovies.com:4431/02_2sporthd2_720p/chunklist.m3u8
https://ctrl.laotv.la/live/TrueSport2/index.m3u8

#EXTINF:-1 group-title="SPORTS" tvg-id="truesports3.th" tvg-logo="https://dl.dropboxusercontent.com/s/r46cvbq6oia3dea/truesports3.png",True Sports 3
#EXTVLCOPT:http-referrer=https://www.youdooball.com/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.79 Safari/537.36 Maxthon/5.2.7.3000
#https://sport.livedoomovies.com:4431/02_2sporthd3_720p/chunklist.m3u8
https://ctrl.laotv.la/live/TrueSport3/index.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://dl.dropboxusercontent.com/s/iq30brv2ntkmmqn/truesports4.png" group-title="SPORTS",TrueSport 4
#EXTVLCOPT:http-referrer=https://www.youdooball.com/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.79 Safari/537.36 Maxthon/5.2.7.3000
#https://sport.livedoomovies.com:4431/02_2sporthd6_720p/chunklist.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://dl.dropboxusercontent.com/s/nhkjohmfw98e0bq/truesports5.png" group-title="SPORTS",TrueSports 5

#EXTINF:-1, group-title="SPORTS" tvg-logo="https://dl.dropboxusercontent.com/s/mbz253pyyvycavw/impact.png", IMPACT ! Wrestling
https://d2p372oxiwmcn1.cloudfront.net/hls/main.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="SPORTS" tvg-logo="https://dl.dropboxusercontent.com/s/txrhza2co3508cc/fightsports.png",Fight Sport
http://nyanv-live-cdn.mncnow.id/live/eds/FightSports/sa_dash_vmx/FightSports.mpd

#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/2ovopi1tg2wym6v/mutv.png" group-title="SPORTS",MU TV
https://bcovlive-a.akamaihd.net/r2d2c4ca5bf57456fb1d16255c1a535c8/eu-west-1/eu-west-1/6058004203001/profile_0/chunklist.m3u8
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/aqb7snrx7sg3862/realmadridtv.png" group-title="SPORTS",Real Madrid TV
https://rmtv-canela.amagi.tv/playlist.m3u8

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://dl.dropbox.com/scl/fi/j2bpd06jq9z068o0sjlhg/Intertv.jpeg?rlkey=1nu3js1x3xonb9qgt008zu657&dl=0", INTER TV
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
https://dcf-ak-livedazn.akamaized.net/dashdrm/dazn-linear-033/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://dl.dropbox.com/scl/fi/h513y7jrskjvgiee7mc4j/Milantv.jpeg?rlkey=iose9y4bvt63nd0fqs60yw8h1&dl=0", MILAN TV
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
https://dcf-ak-livedazn.akamaized.net/dashdrm/dazn-linear-025/stream.mpd	  

#EXTINF:-1 tvg-logo="https://dl.dropbox.com/s/twee4scc14he4cc/images%20%281%29.jpeg" group-title="SPORTS", Fight
http://stitcher-ipv4.pluto.tv/v1/stitch/embed/hls/channel/5812b0f2237a6ff45d16c3f9/master.m3u8?deviceType=samsung-tvplus&deviceMake=samsung&deviceModel=samsung&deviceVersion=unknown&appVersion=unknown&deviceLat=0&deviceLon=0&deviceDNT=%7BTARGETOPT%7D&deviceId=%7BPSID%7D&advertisingId=%7BPSID%7D&us_privacy=1YNY&samsung_app_domain=%7BAPP_DOMAIN%7D&samsung_app_name=%7BAPP_NAME%7D&profileLimit=&profileFloor=&embedPartner=samsung-tvplus
 
#EXTINF:0 group-title="SPORTS" tvg-logo="https://dl.dropbox.com/scl/fi/4kflud6jt2e493t8u6jdx/W-sports.png?rlkey=20ykld8yxq9bf08y8rw05n8by&dl=0", W sports
#EXTVLCOPT:http-referrer=https://www.dens.tv/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://op-group1-swiftservehd-1.dens.tv/h/h26/S4/mnf.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://dl.dropboxusercontent.com/s/4imnzr21haieqz1/motorracing.png" group-title="SPORTS",Motor Racing
https://cdn-apse1-prod.tsv2.amagi.tv/linear/amg01329-otterainc-motorvisionnz-samsungnz/playlist.m3u8
 
#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/3f1wr61du22up80/motorvision.png" group-title="SPORTS", Motorvision TV
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://stream.ads.ottera.tv/playlist.m3u8?network_id=535

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT6cvFpkxs-56KdzsuVQSf9MR7SfhwdHGWTA&usqp=CAU", Fox Sports 1
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium767/index.m3u8|origin=https://claplivehdplay.ru/
 
#EXTINF:-1 group-title="SPORTS" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGT62seMX8WkTotuetFE9h6QUhuklNBbHyBQ&usqp=CAU", Fox Sports 2
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium788/index.m3u8|origin=https://claplivehdplay.ru/
 
#EXTINF:-1 group-title="SPORTS" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCd7UvOnIlL9uu_y9luBnTQtB4G0f-jSvNyQ&usqp=CAU", Fox Sports 3
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium789/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://dl.dropboxusercontent.com/s/cw9h4hzhxiyqh9z/dubaisports.png",Dubai Sports 1
https://dmitnthfr.cdn.mgmlcdn.com/dubaisports/smil:dubaisports.stream.smil/index.m3u8
 
#EXTINF:-1 group-title="SPORTS" tvg-logo="https://dl.dropboxusercontent.com/s/o3qd1a1gpe6ztia/dubaisports2.png",Dubai Sports 2
https://dmitwlvvll.cdn.mangomolo.com/dubaisportshd/smil:dubaisportshd.smil/index.m3u8
 
#EXTINF:-1 group-title="SPORTS" tvg-logo="https://dl.dropboxusercontent.com/s/vq8ed1nf10ym1n1/dubaisports3.png",Dubai Sports 3 
https://dmitwlvvll.cdn.mangomolo.com/dubaisportshd5/smil:dubaisportshd5.smil/index.m3u8
 
#EXTINF:-1 group-title="SPORTS" tvg-logo="https://dl.dropboxusercontent.com/s/e6vlhb82t8urfo3/adsports1.png",Abu Dhabi Sport 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://tr-live-route.adm.tcon.hlit.hvds.tv/Content/Channel/AbuDhabiSportsChannel1/HLS/variant.m3u8
 
#EXTINF:-1 group-title="SPORTS" tvg-logo="https://dl.dropboxusercontent.com/s/52mbb7vx1l4uke0/adsports2.png",Abu Dhabi Sport 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://tr-live-route.adm.tcon.hlit.hvds.tv/Content/Channel/AbuDhabiSportsChannel2/HLS/variant.m3u8
 
#EXTINF:-1 group-title="SPORTS" tvg-logo="https://dl.dropboxusercontent.com/s/0uzffo0lbbxfd29/adsports3.png",Abu Dhabi Sport 3
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium609/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:-1 tvg-logo="https://dl.dropbox.com/s/nbuimwqqvhc4brm/images%20%282%29.jpeg" group-title="SPORTS",Stadium
https://dai2.xumo.com/amagi_hls_data_xumo1234A-stadiumsports/CDN/master.m3u8

#EXTINF:-1 tvg-id="RedBullTV.us" tvg-logo="https://dl.dropboxusercontent.com/s/1h9ie8d4mazxcvy/redbulltv.png" group-title="SPORTS",RedBull TV
https://rbmn-live.akamaized.net/hls/live/590964/BoRB-AT/master_6660.m3u8

#EXTINF:-1  tvg-logo="https://dl.dropbox.com/s/28n1lcpyx0qubqo/Screenshot_20230214_232508_Chrome.jpg" group-title="SPORTS",beIN Sports Xtra
http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5df975e2b27cf5000921c102/master.m3u8?terminate=false&deviceType=web&deviceMake=web&deviceModel=web&sid=740&deviceId=5df975e2b27cf5000921c102&deviceVersion=DNT&appVersion=DNT&deviceDNT=0&userId=&advertisingId=&deviceLat=&deviceLon=&app_name=&appName=web&buildVersion=&appStoreUrl=&architecture=&includeExtendedEvents=false&marketingRegion=US&serverSideAds=false

#EXTINF:-1 tvg-logo="https://www.tvyayinakisi.com/wp-content/uploads/2021/01/sportstv.png" group-title="SPORTS",Sports TV 
http://live.sportstv.com.tr/hls/low/sportstv_fhd/index.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/YpQ86Qk/kass1.png" group-title="SPORTS", Al Kass 1
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://liveakgr.alkassdigital.net/hls/live/2097037/Alkass1xtyuwqa/master.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/m9WKtjB/kass2.png" group-title="SPORTS",Al Kass 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://liveakgr.alkassdigital.net/hls/live/2097037/Alkass2uycevvnb/master.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/tw6nR1k/kass3.png" group-title="SPORTS",Al Kass 3
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://liveakgr.alkassdigital.net/hls/live/2097037/Alkass3lavbc/master.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/b2TpfKx/kass4.png" group-title="SPORTS",Al Kass 4
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://liveakgr.alkassdigital.net/hls/live/2097037/Alkass4xtyuwqa/master.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/k57XRqD/kass5.png" group-title="SPORTS",Al Kass 5
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://liveakgr.alkassdigital.net/hls/live/2097037/Alkass5xtyuwqa/master.m3u8

#EXTINF:-1 channel-id="samsung-GBBD1100008YW" tvg-id="GBBD1100008YW" tvg-chno="4008" tvg-logo="https://i.ibb.co/HK0Nf10/fifaplus.png" group-title="SPORTS" , FIFA+ 
https://38ca3c9c.wurl.com/master/f36d25e7e52f1ba8d7e56eb859c636563214f541/U2Ftc3VuZy1nYl9GSUZBUGx1c19ITFM/playlist.m3u8

#EXTINF:-1 tvg-id="FightNetwork" tvg-logo="https://i.ibb.co/YB4Z45g/fightnetwork.png" group-title="SPORTS", FIGHT NETWORK
https://d12a2vxqkkh1bo.cloudfront.net/hls/main.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/J5nm4Gt/irbvarzesh.png" group-title="SPORTS", IRIB VARZESH
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://ncdn.telewebion.com/varzesh/live/playlist.m3u8

#EXTINF:-1 tvg-id="JOJSport.sk" tvg-logo="https://i.ibb.co/Qn8zjhn/jojsport.png" group-title="SPORTS", JOJ Šport
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#EXTVLCOPT:http-referer=https://webtv.sk/tv/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=11223344556677889900112233445566:11223344556677889900112233445566
https://cors-proxy.elfsight.com/https://dash2.antik.sk/stream/nvidia_joj_sport/playlist_cenc.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="Матч! Арена" tvg-logo="https://i.ibb.co/FsfgCJG/matcharena.png", Матч! ARENA
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=9839b170b4fc384f243bffd8929b71a2:34cdd6f3e1bf6a9f9d54e9165abf8c09
https://video.beeline.tv/live/d/channel512.isml/manifest-stb.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="Матч! Футбол 1" tvg-logo="https://i.ibb.co/TLDsrbz/matchf1.png", Матч! FOOTBALL 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5269ab07e6a6db7585324ae20542f191:dba0dccffba1b26f658ec85a616102e8
#https://cors-proxy.elfsight.com/https://strm.yandex.ru/kal/match_football1_hd/manifest.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="Матч! Футбол 2" tvg-logo="https://i.ibb.co/nQZWJ34/matchf2.png", Матч! FOOTBALL 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=56f7dcb5d20eeed212ff58620acb8931:76e139c0676ed2d7ae46392ce6fd9e89
#https://cors-proxy.elfsight.com/https://strm.yandex.ru/kal/match_football2_hd/manifest.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="Матч! Футбол 3" tvg-logo="https://i.ibb.co/rFx8z4t/matchf3.png", Матч! FOOTBALL 3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=b356d2c5bd7b4a71e99485906f6beeed:f2e7cb0fcdfb6a3fc0299eed50d29c97
#https://cors-proxy.elfsight.com/https://strm.yandex.ru/kal/match_football3_hd/manifest.mpd

#EXTINF:-1 tvg-id="Ziggo Sport" tvg-logo="https://i.ibb.co/HV2c1Cc/ziggosport.png" group-title="SPORTS", Ziggo Sport
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=0be3d503dba13fc9a9c8ad4b89f599e6:578c2231c526c5e9eb415411e36871bf
https://wp7-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000014_019661/_shared_6a89db18ec4202bae4d424e84c1f46a2/NL_000014_019661.mpd

#EXTINF:-1 tvg-id="Ziggo Sport Docu" tvg-logo="https://i.ibb.co/n6Mcj2q/ziggosportdocu.png" group-title="SPORTS", Ziggo Sport Docu
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=16bf72dc22743d929c4318e193408373:eae51a1e3904124963074cbf432c7c8e
https://wp5-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000098_019255/_shared_cc010062b17300c4504b6ab5681b5417/NL_000098_019255.mpd

#EXTINF:-1 tvg-id="Ziggo Sport Golf" tvg-logo="https://i.ibb.co/bNtpKWj/ziggosportgolf.png" group-title="SPORTS", Ziggo Sport Golf
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=bb4b78ef397646e3ae5f13bdb23d56ed:c1247a942c7126443a93214c67431fe8
https://cdsvideolive3.solocoo.tv/blueskycdslive7dash/blueziggosportgolf/Manifest.mpd

#EXTINF:-1 tvg-id="Ziggo Sport Racing" tvg-logo="https://i.ibb.co/NYmK4YW/ziggoracing.png" group-title="SPORTS", Ziggo Sport Racing
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=16bf72dc22743d929c4318e193408373:eae51a1e3904124963074cbf432c7c8e
https://wp4-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000097_019370/_shared_cc010062b17300c4504b6ab5681b5417/NL_000097_019370.mpd

#EXTINF:-1 tvg-id="Ziggo Sport Select" tvg-logo="https://i.ibb.co/995ZNdQ/ziggoselect.png" group-title="SPORTS",Ziggo Sport Select
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=16bf72dc22743d929c4318e193408373:eae51a1e3904124963074cbf432c7c8e
https://wp1-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000094_019321/_shared_cc010062b17300c4504b6ab5681b5417/NL_000094_019321.mpd

#EXTINF:-1 tvg-id="Ziggo Sport Tennis" tvg-logo="https://i.ibb.co/svTpVxv/ziggotennis.png" group-title="SPORTS",Ziggo Sport Tennis
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=16bf72dc22743d929c4318e193408373:eae51a1e3904124963074cbf432c7c8e
https://wp6-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000099_019256/_shared_cc010062b17300c4504b6ab5681b5417/NL_000099_019256.mpd

#EXTINF:-1 tvg-id="Ziggo Sport Voetbal" tvg-logo="https://i.ibb.co/0FcGk4N/ziggosportvoetbal.png" group-title="SPORTS",Ziggo Sport Voetball
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=16bf72dc22743d929c4318e193408373:eae51a1e3904124963074cbf432c7c8e
https://wp2-anp-g05060506-hzn-nl.t1.prd.dyncdn.dmdsdp.com/live/disk1/NL_000095_019371/_shared_cc010062b17300c4504b6ab5681b5417/NL_000095_019371.mpd

#EXTINF:-1 tvg-id="SuperSportMotorsport.za" tvg-logo="https://i.ibb.co/jDMKd9S/ssm.png" group-title="SPORTS",SuperSports Motorsport
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium424/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:-1 tvg-id="SuperSportPremierLeague.za" tvg-logo="https://i.ibb.co/87BG427/sspl.png" group-title="SPORTS",SuperSports Premier League
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium414/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:-1 tvg-id="SkySportsPremierLeague.uk" tvg-logo="https://i.ibb.co/nshXz2j/sky.jpg" group-title="SPORTS",Sky Sports Premier League
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium130/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:-1 tvg-id="SkySportsFootball.uk" tvg-logo="https://i.ibb.co/nshXz2j/sky.jpg" group-title="SPORTS",Sky Sports Football
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium35/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:-1 tvg-id="SkySportsRacing.uk" tvg-logo="https://i.ibb.co/nshXz2j/sky.jpg" group-title="SPORTS",Sky Sports Racing
#EXTVLCOPT:http-referrer=https://claplivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
#https://webhdrus.onlinehdhls.ru/lb/premium554/index.m3u8|origin=https://claplivehdplay.ru/

#EXTINF:-1 group-title="SPORTS" tvg-id=" tvg-logo="https://static3.go3.tv/file/go3/resources/logos/OM.png", LI - Go 3 Sport 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=610ad79e26a84fc782c987455e21a86b:d2d4acc6e79447b55f3f5c0267af06f5
https://cdnlb.tvplayhome.lt/live/eds/TV3_Sport_HD_HVC/GO3_LIVE_DASH_AVC/TV3_Sport_HD_HVC.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id=" tvg-logo="https://static3.go3.tv/file/go3/resources/logos/OM.png", LI - Go 3 Sport 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3fc5ce88ae24460bafa447b53ab5f548:476a55ef72c5e27e310668b1667da615
https://cdnlb.tvplayhome.lt/live/eds/TV3_Sport2_HD_HVC/GO3_LIVE_DASH_AVC/TV3_Sport2_HD_HVC.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id=" tvg-logo="https://static3.go3.tv/file/go3/resources/logos/OM.png", LI - Go 3 Sport 3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=a2a75672057f462089c2849b8184fcb0:94899cace4911c617c27d8f878de2b43
https://cdnlb.tvplayhome.lt/live/eds/TV3_Sport3_HD_HVC/GO3_LIVE_DASH_AVC/TV3_Sport3_HD_HVC.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id=" tvg-logo="https://static3.go3.tv/file/go3/resources/logos/OM.png", LI - Go 3 Sport 4
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e4515ae969cb46ae89997c8308b70e4d:bdc640533aac8955a6293158210e0a7d
https://cdnlb.tvplayhome.lt/live/eds/TV3_Sport4_HD_HVC/GO3_LIVE_DASH_AVC/TV3_Sport4_HD_HVC.mpd

#EXTINF:-1 tvg-id="824" tvg-name="Astro Cricket HD" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/197_144.png", group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="SPORTS", Astro Cricket HD
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#EXTVLCOPT:http-referrer=https://sg-sg-sg.astro.com.my
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=03c2e0af2f8159f9f0ce9b5dbc865f10:cd84ed136b0cc71f8ab8cd4d4f6a2e4c
https://linearjitp02-playback.astro.com.my/dash-wv/dashiso/2504/default.mpd

#EXTINF:-1 group-title="SPORTS" group-logo="https://d18qjk21m0yx5q.cloudfront.net/wp-content/uploads/2022/09/EPL.png" tvg-logo="https://d18qjk21m0yx5q.cloudfront.net/wp-content/uploads/2022/09/EPL.png", Premier League TV - Peacock
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=002046c9a49b9ab1cdb6616bec5d26c3:d2f92f6b7edc9a1a05d393ba0c20ef9e
https://fsly.stream.peacocktv.com/Content/CMAF_CTR-4s/Live/channel(vc1021n07j)/master.mpd

#EXTINF:-1 group-title="SPORTS" group-logo="https://d18qjk21m0yx5q.cloudfront.net/wp-content/uploads/2022/09/EPL.png" tvg-logo="https://d18qjk21m0yx5q.cloudfront.net/wp-content/uploads/2022/09/EPL.png", Premier League TV - Peacock
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=002046c9a49b9ab1cdb6616bec5d26c3:d2f92f6b7edc9a1a05d393ba0c20ef9e
https://akam.stream.peacocktv.com/Content/CMAF_CTR-4s/Live/channel(vc1021n07j)/master.mpd

#EXTINF:-1 group-title="SPORTS" group-logo="https://d18qjk21m0yx5q.cloudfront.net/wp-content/uploads/2022/09/EPL.png" tvg-logo="https://d18qjk21m0yx5q.cloudfront.net/wp-content/uploads/2022/09/EPL.png", Premier League TV - Arena Sport
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/premier_league.mpd

#EXTINF:-1 tvg-logo="https://cdn.technadu.com/wp-content/uploads/2021/05/USA-Network-Logotype.jpg", tvg-id="ksport1hd" group-title="SPORTS", USA Network (East)
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=882c9f5613b43b47adc70aa968a308ce:de534ef8914bfe62ba3cdd6bdb9e1c04
https://fsly.stream.peacocktv.com/Content/CMAF_OL1-CTR-4s/Live/channel(usa-east)/master.mpd

#EXTINF:-1 tvg-logo="https://cdn.technadu.com/wp-content/uploads/2021/05/USA-Network-Logotype.jpg", tvg-id="ksport1hd" group-title="SPORTS", USA Network (West)
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=252a671825ba31ec8433f978c32ccf6d:ee560759ecc8d2274df2e63fcef56915
https://fsly.stream.peacocktv.com/Content/CMAF_OL1-CTR-4s/Live/channel(usa-west)/master.mpd

#EXTINF:-1 tvg-logo="https://static.wikia.nocookie.net/youtube/images/2/22/NBC.jpg/revision/latest?cb=20230910112737", tvg-id="ksport1hd" group-title="SPORTS",USA NBC
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=0045a118e231f1326bcdb45350b1ceaa:8c13afbfa54ea37a368b8b859021f6e3
https://fsly.stream.peacocktv.com/Content/CMAF_OL1-CTR-4s/Live/channel(knbc)/master.mpd

#EXTINF:-1 tvg-logo="https://cdn.technadu.com/wp-content/uploads/2021/05/USA-Network-Logotype.jpg", tvg-id="ksport1hd" group-title="SPORTS",USA CBS
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c311b264f25748039736aa0dc64008d6:86055797afa5cb24feb2bc764b7a1813
https://cors-proxy.elfsight.com/https://cip4-2048b75120.linear-novi.stvacdn.spectrum.com/LIVE/1105/dash/cenc/CBSSNHD_00500/manifest.mpd

#EXTINF:-1 tvg-id="Golf Channel USA" tvg-logo="https://i.ibb.co/Z6zsxzF/golf.png" group-title="SPORTS",USA Golf Channel 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=d5c9203447ab38c5bf5b407cdd9de5e8:501464dfa2ac437098c35e1c4f16bb6b
https://cfrt.stream.peacocktv.com/Content/CMAF_OL1-CTR-4s/Live/channel(golf)/master.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://upload.wikimedia.org/wikipedia/en/thumb/c/cb/Fox_Soccer_Plus_logo.svg/1200px-Fox_Soccer_Plus_logo.svg.png", FOX SOCCER PLUS
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=260465aba18e40329932d47e9c7aa20b:2b79020e3f3ddc94ba84943ba72d898c
https://cors-proxy.elfsight.com/https://linear.stvacdn.spectrum.com/LIVE/1143/dash/cenc/FSCPLHD/manifest.mpd?

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/hyShPmQ/setantasp1.png" group-title="SPORTS", SETANTA SPORTS 01 🇷🇺
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://bkm.beetv.kz/btv/live/hls/000004498.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/hyShPmQ/setantasp1.png" group-title="SPORTS", SETANTA SPORTS 1 🇰🇿
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://bkm.beetv.kz/btv/live/hls/000006998.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/fpKYZrr/setantasp2.png" group-title="SPORTS", SETANTA SPORTS 02 🇷🇺
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://bkm.beetv.kz/btv/live/hls/000004499.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/fpKYZrr/setantasp2.png" group-title="SPORTS", SETANTA SPORTS 2 🇰🇿
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://bkm.beetv.kz/btv/live/hls/000006899.m3u8

#EXTINF:-1 tvg-logo="https://thumbor.prod.vidiocdn.com/Y5ZZSYNOr3B-xLAaBNadIBc8VGc=/372x211/filters:quality(75)/vidio-web-prod-livestreaming/uploads/livestreaming/image/9353/test-tv-epl-f4cbe6.jpg" group-title="SPORTS" ,PARAMOUNT+ 
http://stitcher-ipv4.pluto.tv/v1/stitch/embed/hls/channel/62d816fcf24d280008762ee9/master.m3u8?deviceType=samsung-tvplus&deviceMake=samsung&deviceModel=samsung&deviceVersion=unknown&appVersion=unknown&deviceLat=0&deviceLon=0&deviceDNT=%7BTARGETOPT%7D&deviceId=%7BPSID%7D&advertisingId=%7BPSID%7D&us_privacy=1YNY&samsung_app_domain=%7BAPP_DOMAIN%7D&samsung_app_name=%7BAPP_NAME%7D&profileLimit=&profileFloor=&embedPartner=samsung-tvplus

=====================================================================hbo=====================================================================



#EXTINF:-1 ch-number="795" tvg-id="LIVEADHOC" group-title="🇲🇾 SPORTS (ASTRO GO)" tvg-logo="https://linear-poster.astro.com.my/prod/logo/Astro_SuperSport_v1.png",795 Astro Supersport
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=34b831a974501d106f6545e9f93de010:c31ef8e8ac1139b985ac3673002b7014
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/5085/default.mpd

#EXTINF:-1 tvg-id="AstroSuperSport4.my" tvg-logo="https://i.ibb.co/tx9GDdq/assu4.png" group-title="🇲🇾 SPORTS (ASTRO GO)", ASSP 4 🇲🇾
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=79f4028730acca9ab8b00f26158ddb10:91febe843c08c7cc523efd827292e40e
https://linearjitp02-playback.astro.com.my/dash-wv/dashiso/2506/default.mpd

#EXTINF:-1 tvg-id="AstroUHD.my" tvg-logo="https://i.ibb.co/GJWq7Wq/assuhd.png" group-title="🇲🇾 SPORTS (ASTRO GO)", ASSP UHD 🇲🇾
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=22fbef1c1cd725e9397ec16455f08210:7aea43cd93c24aa9834ecb4984f7fd5a
https://cors-proxy.elfsight.com/https://staging-linearjitp-playback.astro.com.my/dash-wv/linear/1601/default_primary.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c0e1804aa1d9fd9c41c41bf0f61a5f10:758823e4eabb6e4c8c036d073db46b8c
#EXTINF:-1 tvg-id="816" tvg-logo="http://linear-poster.astro.com.my/prod/logo/SPOTV.png" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)",SPOTV 
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/5058/default_ott.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5efd26da5001363b4d6fa4a9c812ad10:ed6d67d953d14b026b2602cf8846577e
#EXTINF:-1 tvg-id="SPOTV2" tvg-name="SPOTV HD" group-title="🇲🇾 SPORTS (ASTRO GO)" group-logo="https://play-lh.googleusercontent.com/8kZu8O9u6r3et26EfI22uPI396XgFbaUR6v_Zj-GeyV3k5FgNovdg0-WxrqgiJxXKKw=w272-h144" tvg-logo="https://ws.kapallayar.cc//image//Logo//SPORTS//New//S_Spotv.png",SPOTV 2
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/5079/default_ott.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=8ab014de03c31a84a835583c348a5e10:5ed727c3f28bac59aa3e5914f5ad455c
#EXTINF:-1 tvg-name="Astrosupersport" ch-number="797" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)" tvg-logo="https://dj7fdt04hl8tv.cloudfront.net/acm/media/contenthub/shop/astro-go-256.png",Astro GO Live Event 2 
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/9988/default_primary.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=8d580c263ffde691b4249dfcac43fd10:f3148d1e737dece3554b889868831659
#EXTINF:-1 tvg-name="Astrosupersport" ch-number="796" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)" tvg-logo="https://dj7fdt04hl8tv.cloudfront.net/acm/media/contenthub/shop/astro-go-256.png",Astro Go Live Event 3 
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/9987/default_primary.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=cb18945925e65d411fbb986d72531010:15ff74ae1064c5f2fb00d2995fa88955
#EXTINF:-1 tvg-name="Astrosupersport" ch-number="795" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)" tvg-logo="https://dj7fdt04hl8tv.cloudfront.net/acm/media/contenthub/shop/astro-go-256.png",Astro Go Live Event 4 
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/9986/default_primary.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=de761cd285aa2b1c1620d16ddbade010:f12de5f0de92c52f841705d9d6449d3a
#EXTINF:-1 tvg-name="Astrosupersport" ch-number="795" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)" tvg-logo="https://dj7fdt04hl8tv.cloudfront.net/acm/media/contenthub/shop/astro-go-256.png",Astro Go Live Event 1
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/9989/default_primary.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=1a655189ab5c49eb235308c2b1a9e710:3c4508af348844107f5e026a4fd6b16e
#EXTINF:-1 tvg-id="818" tvg-logo="http://linear-poster.astro.com.my/prod/logo/beIN_Sports_v1.png" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)",beIN Sports 1 HD
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/408/default_ott.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=39c175581e237eff9559607eb9b23c10:5102b12aac7756c65dcb46a101d960d3
#EXTINF:-1 tvg-id="817" tvg-logo="http://linear-poster.astro.com.my/prod/logo/beINSPORTS2.png" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)",beIN Sports 2 HD
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/5066/default_ott.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=20c884ef8ed26b2762f8b1a78f2d1910:042a21bf236ca729b1e343ed6e0a6337
#EXTINF:-1 tvg-id="819" tvg-logo="http://linear-poster.astro.com.my/prod/logo/beIN_SPORTS3_V2.png" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)",beIN Sports 3 HD
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/2705/default_ott.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=9bfeb5068725617dbad6338473da6d10:06577ffcc4935ba24aff4c4c9dd6846d
#EXTINF:-1 tvg-id="823" tvg-logo="http://linear-poster.astro.com.my/prod/logo/PremierSports.png" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)",Premier Sports HD
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/2601/default.mpd

#EXTINF:-1 tvg-id="822" tvg-name="Golf Channel HD" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/189_144.png", group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)" , Golf Channel HD
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=705bab5e645b6d7c95588b29520f8110:28639bcfb5cbee8ff9ca398fcf5bfcd0
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/1003/default_ott.mpd

#EXTINF:-1 tvg-id="824" tvg-name="Astro Cricket HD" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/197_144.png", group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)", Astro Cricket HD
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=03c2e0af2f8159f9f0ce9b5dbc865f10:cd84ed136b0cc71f8ab8cd4d4f6a2e4c
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/2504/default_ott.mpd

#EXTINF:-1 tvg-id="824" tvg-name="Astro Cricket HD" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/197_144.png", group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)", Astro Cricket HD
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=03c2e0af2f8159f9f0ce9b5dbc865f10:cd84ed136b0cc71f8ab8cd4d4f6a2e4c
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/2504/default.mpd

#EXTINF:-1 tvg-id="814" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/241_144.png",ASTRO SUPERSPORT 4 HD 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=79f4028730acca9ab8b00f26158ddb10:91febe843c08c7cc523efd827292e40e
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/2506/default_ott.mpd

#EXTINF:-1 ch-number="809" tvg-id="beINSportsRugby" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)"  tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/71_144.png",809 beINSportsRugby
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=https://ck-dash-mpd.astradamy.com/dash-ck/linear/5125
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/5125/default.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4db23a41babfe9afc222a58c59828310:d0e794e3cff564ed2c720a098eb177c7
#EXTINF:-1 tvg-id="820" tvg-logo="http://linear-poster.astro.com.my/prod/logo/logo_1701_v3.png" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)",Eurosport HD
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/2100/default_ott.mpd

#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c0e1804aa1d9fd9c41c41bf0f61a5f10:758823e4eabb6e4c8c036d073db46b8c
#EXTINF:-1 tvg-id="816" tvg-logo="http://linear-poster.astro.com.my/prod/logo/SPOTV.png" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)",SPOTV
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/5058/default_ott.mpd

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5efd26da5001363b4d6fa4a9c812ad10:ed6d67d953d14b026b2602cf8846577e
#EXTINF:-1 tvg-id="810" tvg-name="SPOTV2" group-logo="https://raw.githubusercontent.com/hpmurah2u/pejal/PEJAL/logo%20astro%20go%20petak.png" group-title="🇲🇾 SPORTS (ASTRO GO)" tvg-logo="https://iili.io/MkG2hg.png",SPOTV2 
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/5079/default_ott.mpd

#EXTINF:-1 ch-number="795" tvg-id="LIVEADHOC" group-title="🇲🇾 SPORTS (ASTRO GO)" tvg-logo="https://linear-poster.astro.com.my/prod/logo/Astro_SuperSport_v1.png",795 Astro Supersport
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=34b831a974501d106f6545e9f93de010:c31ef8e8ac1139b985ac3673002b7014
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/5085/default.mpd

#EXTINF:-1 ch-number="809" tvg-id="ASSPPlus" group-title="🇲🇾 SPORTS (ASTRO GO)" tvg-logo="https://divign0fdw3sv.cloudfront.net/Images/ChannelLogo/contenthub/71_144.png",809 ASSP Plus
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=89c10c7ef0af145be7d6e88dec090b10:80558606a13a99d2c543872d8899ced0
https://bapakmumasakdagingkimjongunastro.nixiehai263.workers.dev/dash-wv/linear/5076/default.mpd














#EXTINF:-1 tvg-logo="https://pbs.twimg.com/profile_images/1605131756310614017/05qwHae-_400x400.jpg", tvg-id="ksport1hd" group-title="#🌍 EPL with VPN 🌍#", Sky Premier League
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=00057ef2c5dd6fa01e7275e4ce9b98a6:de0a1a300adbd4ba1fcd27f51d4b5364
#https://linear015-gb-dash1-prd-ll.cdn.skycdp.com/016a/Content/DASH_003_720_120/Live/channel(skysportspremierleague)/manifest_720.mpd

#EXTINF:-1 tvg-logo="https://pbs.twimg.com/profile_images/1605131756310614017/05qwHae-_400x400.jpg", tvg-id="ksport1hd" group-title="#🌍 EPL with VPN 🌍#", Sky Premier League
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=00057ef2c5dd6fa01e7275e4ce9b98a6:de0a1a300adbd4ba1fcd27f51d4b5364
#https://linear009-gb-dash1-prd-ll.cdn.skycdp.com/016a/Content/DASH_003_720_120/Live/channel(skysportspremierleague)/manifest_720.mpd

#EXTINF:-1 tvg-logo="https://www.thesportsdb.com/images/media/channel/tvlogo/sdvs4u1659622094.png" group-title="#🌍 EPL with VPN 🌍#", 🇸🇬 Hub Premier 2 - 4K
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=b5d217f06033494f8c536322324231eb:b6c80055ee20cf222d792ce702b3644a
#https://ucdn.starhubgo.com/bpk-tv/HubPremier2_4K/output/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-name="#🌍 EPL with VPN 🌍#" tvg-logo="https://www.irishiptv.com/wp-content/uploads/2023/12/Hub-Premier.png" group-title="#🌍 EPL with VPN 🌍#",🇸🇬 Hub Premier 1
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=d9df2aa9c4974ed3bbf0730defad68fe:0cac792b5d5ef9ffb24e324a52c3da0b
#https://ucdn.starhubgo.com/bpk-tv/HubPremier1/output/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-name="#🌍 EPL with VPN 🌍#" tvg-logo="https://www.irishiptv.com/wp-content/uploads/2023/12/Hub-Premier.png" group-title="#🌍 EPL with VPN 🌍#",🇸🇬 Hub Premier 2
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=17e9c5d34f514dd3bce90fcc7deaeaa6:ab86716fe05961647a3713243e95dcd2
#https://ucdn.starhubgo.com/bpk-tv/HubPremier12/output/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-name="#🌍 EPL with VPN 🌍#" tvg-logo="https://www.irishiptv.com/wp-content/uploads/2023/12/Hub-Premier.png" group-title="#🌍 EPL with VPN 🌍#",🇸🇬 Hub Premier 3
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=d02ff184351548eea3981c38b6f48d9b:42d56d760c19c180ceaf2e7ef512e5be
#https://ucdn.starhubgo.com/bpk-tv/HubPremier3/output/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-name="#🌍 EPL with VPN 🌍#" tvg-logo="https://www.irishiptv.com/wp-content/uploads/2023/12/Hub-Premier.png" group-title="#🌍 EPL with VPN 🌍#", 🇸🇬 Hub Premier 4
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=624bceaf2e78422c8ee1b8f31c638fb4:5223fbfd77b228f2f01e20358972850b
#https://ucdn.starhubgo.com/bpk-tv/HubPremier4/output/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-name="#🌍 EPL with VPN 🌍#" tvg-logo="https://www.irishiptv.com/wp-content/uploads/2023/12/Hub-Premier.png" group-title="#🌍 EPL with VPN 🌍#",🇸🇬 Hub Premier 5
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=549415570a894df19a2aaa524d035bb6:8cd102efa9e4feeb98b62b1e8b1f10a4
#https://ucdn.starhubgo.com/bpk-tv/HubPremier5/output/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-name="#🌍 EPL with VPN 🌍#" tvg-logo="https://www.irishiptv.com/wp-content/uploads/2023/12/Hub-Premier.png" group-title="#🌍 EPL with VPN 🌍#",🇸🇬 Hub Premier 6
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ecd1e866cc4e4bb1a230dda645081865:edaf41fe7af1249eef03bfac6e9ab632
#https://ucdn.starhubgo.com/bpk-tv/HubPremier6/output/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-name="#🌍 EPL with VPN 🌍#" tvg-logo="https://www.irishiptv.com/wp-content/uploads/2023/12/Hub-Premier.png" group-title="#🌍 EPL with VPN 🌍#", 🇸🇬 Hub Premier 7
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ec361b73771546b3b42aadbd847d4ad6:bcb5a85c2236d319aff588fe280e0a35
#https://ucdn.starhubgo.com/bpk-tv/HubPremier7/output/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-name="#🌍 EPL with VPN 🌍#" tvg-logo="https://www.irishiptv.com/wp-content/uploads/2023/12/Hub-Premier.png" group-title="#🌍 EPL with VPN 🌍#",🇸🇬 Hub Premier 8
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=8453cc1161814eaab26bca37dc85e360:72c9a9cad5387966e5715eee5cc1a94b
#https://ucdn.starhubgo.com/bpk-tv/HubPremier8/output/manifest.mpd




#KODIPROP:inputstreamaddon=inputstream.adaptive 
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://m.mayvee.workers.dev/hbohd/license-proxy-widevine/cenc/?specConform=true
#EXTINF:-1 tvg-id="HBO HD" tvg-url="https://www.bevy.be/bevyfiles/singaporepremium.xml" tvg-logo="https://seeklogo.com/images/H/hbo-logo-9BCB43E157-seeklogo.com.png" group-title="MOVIES",205-HBO (MAXSTREAM)
#https://cdn01-telkomsel-01.akamaized.net/Content/DASH/Live/channel(92c7b96a-33fc-4899-a032-50ae0fbc9257)/manifest.mpd

#KODIPROP:inputstreamaddon=inputstream.adaptive 
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://m.mayvee.workers.dev/hbofamily/license-proxy-widevine/cenc/?specConform=true
#EXTINF:-1 tvg-id="HBO Family HD" tvg-url="https://www.bevy.be/bevyfiles/singaporepremium.xml" tvg-logo="https://www.liblogo.com/img-logo/hb7524h5d2-hbo-family-logo-hbo-family-logopedia-.png" group-title="MOVIES",206-HBO Family (MAXSTREAM)
#https://cdn01-telkomsel-01.akamaized.net/Content/DASH/Live/channel(cec31cdd-d2ff-4c23-8a76-ad1c0ef025e2)/manifest.mpd

#KODIPROP:inputstreamaddon=inputstream.adaptive 
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://m.mayvee.workers.dev/hbohits/license-proxy-widevine/cenc/?specConform=true
#EXTINF:-1 tvg-id="HBO Hits HD" tvg-url="https://www.bevy.be/bevyfiles/singaporepremium.xml" tvg-logo="https://upload.wikimedia.org/wikipedia/en/f/fc/HBOHits-ASIA.png" group-title="MOVIES",207-HBO Hits (MAXSTREAM)
#https://cdn01-telkomsel-01.akamaized.net/Content/DASH/Live/channel(7e3ac8f2-3380-461a-976b-30bca8d939a0)/manifest.mpd

#KODIPROP:inputstreamaddon=inputstream.adaptive 
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://m.mayvee.workers.dev/hbosign/license-proxy-widevine/cenc/?specConform=true
#EXTINF:-1 tvg-id="HBO Signature HD" tvg-url="https://www.bevy.be/bevyfiles/singaporepremium.xml" tvg-logo="https://upload.wikimedia.org/wikipedia/commons/a/af/HBO_Signature_Asia.png" group-title="MOVIES",208-HBO Signature (MAXSTREAM)
#https://cdn01-telkomsel-01.akamaized.net/Content/DASH/Live/channel(774b9a1e-aa1a-425b-8f24-f90d48787777)/manifest.mpd



#================================WarKop DKI================================#

#EXTINF:-1 tvg-logo="https://i.ibb.co/RNxqhxz/Warkop1.jpg" group-title="WarKop DKI", Warkop DKI Reborn: Jangkrik Boss! Part 1 (2016)
https://koceng.nofendraedi.workers.dev/WK1.mp4

#EXTINF:-1 tvg-logo="https://i.ibb.co/j62Rx3J/Warkop2.jpg" group-title="WarKop DKI", Warkop DKI Reborn: Jangkrik Boss! Part 2 (2017)
https://koceng.nofendraedi.workers.dev/WK2.mp4

#EXTINF:-1 tvg-logo="https://i.ibb.co/vvk1cNC/Warkop3.jpg" group-title="WarKop DKI", Warkop DKI Reborn: Part 3 (2019)
https://koceng.nofendraedi.workers.dev/WK3.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/Tc7Rw7B/Warkop-DKI-Reborn-4-2020.jpg" group-title="WarKop DKI", Warkop DKI Reborn 4 (2020)
https://koceng.nofendraedi.workers.dev/WK4.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/CJVWnw6/Mana-Tahaaan-1979.jpg" group-title="WarKop DKI", Mana Tahaaan… (1979)
https://hadeh.pitoyoabdi.workers.dev/Mana%20Tahan%20(1979).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/DtMGyYs/Gengsi-Dong-1980.jpg" group-title="WarKop DKI", Gengsi Dong (1980)
https://hadeh.pitoyoabdi.workers.dev/Gengsi%20Dong%20(1980).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/xG2Z1hP/Pintar-Pintar-Bodoh-1980.jpg" group-title="WarKop DKI", Pintar Pintar Bodoh (1980) 
https://hadeh.pitoyoabdi.workers.dev/Pintar%20Pintar%20Bodoh%20(1980).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/c1cCZ3Q/Ge-Er-Gede-Rasa-1980.jpg" group-title="WarKop DKI", GeEr – Gede Rasa (1980)
https://hadeh.pitoyoabdi.workers.dev/geer-gede-rasa-1980.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/2KgGTqt/Manusia-6-000-000-Dollar-1981.jpg" group-title="WarKop DKI", Manusia 6.000.000 Dollar (1981)
https://hadeh.pitoyoabdi.workers.dev/Manusia%206%20Juta%20Dolar.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/LCXTcrn/IQ-Jongkok-1981.jpg" group-title="WarKop DKI", IQ Jongkok (1981)
https://hadeh.pitoyoabdi.workers.dev/IQ%20Jongkok%20(1981).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/kx1Ps5L/Setan-Kredit-1981.jpg" group-title="WarKop DKI", Setan Kredit (1981)
https://hadeh.pitoyoabdi.workers.dev/Setan.Kredit.1982.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/BgJcF32/Dongkrak-Antik-1982.jpg" group-title="WarKop DKI", Dongkrak Antik (1982)
https://hadeh.pitoyoabdi.workers.dev/Dongkrak%20Antik%20(1982).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/7nwGy3D/Chips-1982.jpg" group-title="WarKop DKI", Chips (1982) 
https://hadeh.pitoyoabdi.workers.dev/CHIPS.1982.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/J2mrDzv/Maju-Kena-Mundur-Kena-1983.jpg" group-title="WarKop DKI", Maju Kena Mundur Kena (1983) 
https://hadeh.pitoyoabdi.workers.dev/Maju.Kena.Mundur.Kena.1983.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/JQhFTX6/Pokoknya-Beres-1983.jpg" group-title="WarKop DKI", Pokoknya Beres (1983)
https://hadeh.pitoyoabdi.workers.dev/Pokoknya%20beres%20(1983).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/M86wDjF/Itu-Bisa-Diatur-1984.jpg" group-title="WarKop DKI", Itu Bisa Diatur (1984)
https://hadeh.pitoyoabdi.workers.dev/Itu%20Bisa%20Diatur%20(1984).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/gJHfjQ8/Tahu-Diri-Dong-1984.jpg" group-title="WarKop DKI", Tahu Diri Dong (1984)
https://hadeh.pitoyoabdi.workers.dev/tahu-diri-dong-1984.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/nPNgFrD/Kesempatan-Dalam-Kesempitan-1985.jpg" group-title="WarKop DKI", Kesempatan Dalam Kesempitan (1985) 
https://hadeh.pitoyoabdi.workers.dev/saringan/Kesempatan%20Dalam%20Kesempitan%20(1985).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/3rLJ1Rt/Gantian-Dong-1985.jpg" group-title="WarKop DKI", Gantian Dong (1985)
https://hadeh.pitoyoabdi.workers.dev/saringan/Gantian%20Dong%20(1985).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/gvYrfGB/Atas-Boleh-Bawah-Boleh-1986.jpg" group-title="WarKop DKI", Atas Boleh Bawah Boleh (1986)
https://hadeh.pitoyoabdi.workers.dev/saringan/Atas.Boleh.Bawah.Boleh.1986.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/DGZ8cxv/Sama-Juga-Bohong-1986.jpg" group-title="WarKop DKI", Sama Juga Bohong (1986)
https://hadeh.pitoyoabdi.workers.dev/saringan/Sama.Juga.Bohong.1986.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/khrxjFp/Depan-Bisa-Belakang-Bisa-1987.jpg" group-title="WarKop DKI", Depan Bisa Belakang Bisa (1987)
https://hadeh.pitoyoabdi.workers.dev/Depan.Bisa.Belakang.Bisa.1987.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/vV4sSM2/Makin-Lama-Makin-Asyik-1987.jpg" group-title="WarKop DKI", Makin Lama Makin Asyik (1987)
https://hadeh.pitoyoabdi.workers.dev/saringan/Makin%20Lama%20Makin%20Asyik%20(1987).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/NsZw7YG/Saya-Suka-Kamu-Punya-1987.jpg" group-title="WarKop DKI", Saya Suka Kamu Punya (1987)
https://hadeh.pitoyoabdi.workers.dev/saringan/Saya.Suka.Kamu.Punya.1987.mkv

#EXTINF:-1 tvg-logo="http://i.ibb.co/TBf9ZtS/Jodoh-Boleh-Diatur-1988.jpg" group-title="WarKop DKI", Jodoh Boleh Diatur (1988)
https://hadeh.pitoyoabdi.workers.dev/saringan/Jodoh%20Boleh%20Diatur%20(1988).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/1qR5YHs/Malu-Malu-Mau-1988.jpg" group-title="WarKop DKI", Malu-Malu Mau (1988)
https://hadeh.pitoyoabdi.workers.dev/saringan/Malu.Malu.Mau.1988.mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/cX8wRLZ/Godain-Kita-Dong-1989.jpg" group-title="WarKop DKI", Godain Kita Dong (1989)
https://hadeh.pitoyoabdi.workers.dev/saringan/Godain%20Kita%20Dong%20(1989).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/mbqHrCM/Sabar-Dulu-Doong-1989.jpg" group-title="WarKop DKI", Sabar Dulu Doong…! (1989)
https://hadeh.pitoyoabdi.workers.dev/saringan/Sabar%20Dulu%20Dong%20(1989).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/R01JKV9/Mana-Bisa-Tahan-1990.jpg" group-title="WarKop DKI", Mana Bisa Tahan (1990)
https://hadeh.pitoyoabdi.workers.dev/saringan/Mana%20bisa%20tahan%20(1990).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/mGLqWr0/Sudah-Pasti-Tahan-1991.jpg" group-title="WarKop DKI", Sudah Pasti Tahan (1991)
https://hadeh.pitoyoabdi.workers.dev/saringan/Sudah%20Pasti%20Tahan%20(1991).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/zrLrZZf/Bisa-Naik-Bisa-Turun-1991.jpg" group-title="WarKop DKI", Bisa Naik Bisa Turun (1991)
https://hadeh.pitoyoabdi.workers.dev/saringan/Bisa.Naik.Bisa.Turun.1992.mkv

#EXTINF:-1 tvg-logo="http://i.ibb.co/72RnJp0/Lupa-Aturan-Main-1991.jpg" group-title="WarKop DKI", Lupa Aturan Main (1991)
https://hadeh.pitoyoabdi.workers.dev/saringan/Lupa%20Aturan%20Main%20(1990).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/t886WQ5/Masuk-Kena-Keluar-Kena-1992.jpg" group-title="WarKop DKI", Masuk Kena Keluar Kena (1992)
https://hadeh.pitoyoabdi.workers.dev/saringan/Masuk%20Kena%20Keluar%20Kena%20(1992).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/27qNJNT/Salah-Masuk-1992.jpg" group-title="WarKop DKI", Salah Masuk (1992)
https://hadeh.pitoyoabdi.workers.dev/saringan/Salah%20Masuk%20(1992).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/8cdZwgg/Bebas-Aturan-Main-1993.jpg" group-title="WarKop DKI", Bebas Aturan Main (1993)
https://hadeh.pitoyoabdi.workers.dev/saringan/Bebas%20Aturan%20Main%20(1993).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/2nWKQTY/Bagi-Bagi-Dong-1993.jpg" group-title="WarKop DKI", Bagi-Bagi Dong (1993)
https://hadeh.pitoyoabdi.workers.dev/saringan/Bagi-Bagi%20Dong%20(1993).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/b2YrZmZ/Saya-Duluan-Dong-1994.jpg" group-title="WarKop DKI", Saya Duluan Dong (1994) 
https://hadeh.pitoyoabdi.workers.dev/saringan/Saya%20Duluan%20Dong%20(1994).mp4

#EXTINF:-1 tvg-logo="http://i.ibb.co/L9VHFh7/Pencet-Sana-Pencet-Sini-1994.jpg" group-title="WarKop DKI", Pencet Sana Pencet Sini (1994) 
https://hadeh.pitoyoabdi.workers.dev/saringan/Pencet%20Sana%20Pencet%20Sini%20(1994).mp4





#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/041482X0-portrait.jpg",Taking On Taylor Swift 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=efb08a878fd59dc395ee05d53e5d9b9b:f0f1923ca07a8ddf9666b6f474ea5bc4
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/654499f2d940521074e78b79_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/041243X0-portrait.jpg",The Nun Ii 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e4063e8388256eeabd2f4efdae7aedd3:12843781a238285c811dcc5a3715e344
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6537627dd940521074e64adf_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/041162X0-portrait.jpg",Meg 2: The Trench 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=a7244ed7a5678d52130672c4b3cf514e:342e55749e9ef5b57c9371fc4c008132
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64fee5add940521074e10087_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040975X0-portrait.jpg",The Flash 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3828dfa474ecbb86ac6e3a9b370abdde:05f5c24805c2fab927d96575bdc20237
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64c3794dd940521074db6e41_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040334X0-portrait.jpg",Reality 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0b181fb3df6f5577055086173921b597:98c1ea4a4b2d95116eb627df374033fe
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/646fee3ed940521074d39a27_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/041269X0-portrait.jpg",Land Of Gold 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=4a4d6c73b26cae6fd6f1fc0ad72a5ad2:c30d41201d7e999d1fedc9d187a47087
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6513e9cbd940521074e2f8f0_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040899X0-portrait.jpg",Evil Dead Rise 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9221c8e67c756f094f45420242d8560e:987cb364121b8aac88d6d33544c9526b
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/648828a5d940521074d5dcf8_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040878X0-portrait.jpg",Dungeons & Dragons: Honor Among Thieves 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c9256c2319bee1155eb1ab05ddb2848c:e9940878b41a3be09407bf86111fc3c1
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64cbd7dcd940521074dc3623_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040442X0-portrait.jpg",Shazam! Fury Of The Gods 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=170bb91139d6de563658bb4902db9492:fdbd71bb5164009ba1f924bb91bbc521
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64532a79d940521074d0e71b_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040640X0-portrait.jpg",Scream Vi 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=671a3fc7b55dcb56f8c66ed8eaad141e:962953b30ed281c5b40eca0078466df0
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/65012e17d940521074e137bd_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040423X0-portrait.jpg",Khun Pan 3 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e080e8d17a75b68c171bafed250c617e:e2666c16aaa10cc855a580ff0d39a633
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64aa6825d940521074d91179_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040436X0-portrait.jpg",The Weeknd: Live At Sofi Stadium 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=626e2f639f995fb4622bf4cc23fca4e5:c51ea0657317aa01e5513c601b18b8ed
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64564331d940521074d1329a_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040443X0-portrait.jpg",War Zone: Bear Grylls Meets President Zelenskyy 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=8236b774c756a2b9b2c791a970ab7305:3edf7f7049b0fb5ebbb1ed1f77d315ac
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6453259bd940521074d0e6a3_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040333X0-portrait.jpg",Magic Mike'S Last Dance 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=65be40852d44ba852db6264d66a79cd7:54a86402886d6e0d45d5e563edf08395
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6470b5b4d940521074d3ad30_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040285X0-portrait.jpg",All That Breathes 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3da7954f870d56992b55af368f401976:7fad2d7f2c64a81bf46883e1eea7e66a
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6406dabad940521074c9c1ce_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040517X0-portrait.jpg",80 For Brady 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=1aff956d4b7a35b96796a924be279fd3:921a9e776c3bc895852f97c4d7dd5fff
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64ddf8a9d940521074dde8cb_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040265X0-portrait.jpg",Mummies 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c446b9fe09cf1153a0143b09485e2170:bcd75dc517b3678ee3f634ca2cbf3697
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/640687cad940521074c9b9f9_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040233X0-portrait.jpg",House Party 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f5eca074d2c6e430e4fee5544973ecca:c9863fba861904a40b2b9285e83105ea
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63f5fd48d940521074c8292d_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039083X0-portrait.jpg",The Offering 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=af7b6b433d0063a06f61c525b1e69a92:7f827a202d6b476d2dc451836381cf0b
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63f30896d940521074c7e1e3_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/041291X0-portrait.jpg",The Ringleader: The Case Of The Bling Ring 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6979fdf856afc2c97816f2070b1bee97:50062d58cd80a5f5b377fa0037d618de
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6516a967d940521074e33b6b_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040437X1-portrait.jpg",Babylon 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=4dc6d1e91bc36abd53dd21f9fce3fa25:452a8841eedbc4ac17597fb7010f79fd
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64aa69ead940521074d911a6_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040904X0-portrait.jpg",M3Gan 2023
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=86576a103454a1c26c739a2ea8b2b38b:9e86fb8545f9c1aa555c7c9bee027471
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/65012f6fd940521074e137e1_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039482X0-portrait.jpg",Lizzo: Live In Concert 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3e2b0e16d670a1c1960f3192878c27d1:1d717d6394c6b7df61df8cebf76f010d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64321e38d940521074cdccb7_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040408X0-portrait.jpg",Puss In Boots: The Last Wish 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=153abc2316da6cbac563da3385fb52a4:d2c1db89ec43fd5bb8ce047a10847fde
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64aa5d9fd940521074d9106a_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040194X0-portrait.jpg",Tom And Jerry: Snowman'S Land 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c147967dee0910abb50cd6e4f7475f5e:28f4f1307372b4ff53ff4b9f91ce3951
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6455beb3d940521074d12528_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039450X0-portrait.jpg",Love, Lizzo 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=adea58414fa6fea36decd84397760eb1:70e145eb62725108e9e1f6f5526364e9
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64321955d940521074cdcc2e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040515X0-portrait.jpg",The Fabelmans 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c16c1647d9406c6f84f06f0fbeb04a2b:2a1edcd261957c85236cd360b66ea0e7
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64c37444d940521074db6dc6_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039274X0-portrait.jpg",The Travelog: Hyoyeon & Sunny In Qatar 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6dffbce17cef9345eaebdaf245f155b0:5dc68edcaf3aec5489b2562489e9327d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63914ccad940521074beb2da_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040406X0-portrait.jpg",She Said 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=7b7eda64587b2bdd5393e1187c53b4b1:b76273f23b2ba6a47385211df7e37b6e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64fb2e8bd940521074e0a73f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040234X0-portrait.jpg",Crawlspace 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c46834ddec75f520e27d477057c5bfee:f652de7056eebde27b4e998d88c83b0b
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6482be0ad940521074d55b26_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039469X0-portrait.jpg",2022 Rock & Roll Hall Of Fame Induction Ceremony 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=16a7ddae7b5343b83832f9eabbd46178:eaadb5b4b081a314c1013061cf94c681
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63be360ad940521074c2ea5f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040320X0-portrait.jpg",Tad, The Lost Explorer And The Emerald Tablet 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=dbf2540c4f9505519d7d992ddeade8de:b11f98827b7c2b0a291fd688ad50bbb1
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64cbb59ed940521074dc32ab_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039197X0-portrait.jpg",The Lair 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=ee66635a6ab60195e78c5b2cbac7c986:df89256f8a2bd78c792ee108b05221b8
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63ca3be2d940521074c40b5d_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040413X0-portrait.jpg",Armageddon Time 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=cd8ae4e2c4db5317cd5e7ebeeb4305a9:f5ce926a8a7c58deb5f60a5a83e0de5a
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64cbb2b5d940521074dc325f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040516X0-portrait.jpg",T�r 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=5d18ed6fa307c3285eb093a4c854c18b:892ff2ebe19f48990b4b27f0b9578471
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64cbbaffd940521074dc3343_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040639X0-portrait.jpg",A Tree Of Life 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=44df2bc4dfb4c6a6068f908684df0ffe:42e4b8f3f210f1ac5d4458af9f9edc61
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/650e60e3d940521074e27517_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040409X0-portrait.jpg",Ticket To Paradise 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=30586a8d9386cbacde6411e5346017e8:14394fbffddb588c47b96eec2937f3f8
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6482be3ad940521074d55b2f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040519X0-portrait.jpg",Dangerous Game: The Legacy Murders 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f39dbc17be87f3447a300c716f6c97ac:702d027317a389e16510f5e6ab85fe86
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64fb2699d940521074e0a66d_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040056X0-portrait.jpg",Batman And Superman: Battle Of The Super Sons 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=fc2831e9a94324c1c44112e426f711f4:bf538af088c41d29f55ed030db7ec9e1
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/645b0e9ad940521074d1a621_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040902X0-portrait.jpg",Trick-Or-Treat, Scooby-Doo! 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3acb182d679f67fc489801fa4f989df0:b65fa6c2ae856bc926475f07da6c0bd3
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64fb24f8d940521074e0a63e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039340X0-portrait.jpg",Batwheels: Holidays On Ice 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f09b3754cbc0e36385aa4fc0659cc9a5:25ae40752411475434fd16eda631f1b5
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/637dba17d940521074bcd6c3_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040410X0-portrait.jpg",Halloween Ends 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6792e70a0cd1f8a41631484e5081c709:7874451657314d0d6213dadd4532d58d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64aa5bfed940521074d9103c_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038111X0-portrait.jpg",38 At The Garden 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=07bceeed1a540f8accda5ae82431466f:25993575690a5a7049e0ac9bd4f1c022
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64aa1effd940521074d90a2e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040268X1-portrait.jpg",Mortal Kombat Legends: Snow Blind 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0f730f06cfa956424f5367d39ab1abeb:9e7369f083d6ebc03d3effb30d6d5c26
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64325355d940521074cdd23a_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040266X0-portrait.jpg",Smile 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=4332b8a852d2836bbd2f45d463d7cbdc:9335097fb32d8801b9ddbdf276c9bb2e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6482b886d940521074d55a94_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040339X0-portrait.jpg",The Good House 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9f3700b4baecabaf982a7e59ff8cf40d:88166293e1f32b898438c98c52e19711
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64aa5a9ad940521074d91017_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039118X0-portrait.jpg",Don'T Worry Darling 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=92b9a8cea947d3759e945453b127a844:541743c1552e93cb1fb893aeab86a4ac
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63525195d940521074b8bf5c_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040917X0-portrait.jpg",The Infernal Machine 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=083bccd9f40b24b93e07f734c588d1bb:128eef59a0086cec9fc2ccfd8bec942a
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/650e64e2d940521074e2757e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039082X0-portrait.jpg",The Enforcer 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=a8f67b111a9d79d87770e6590aa5dc61:a86c48752aa6cd0cdafe9ebe518d2fcf
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63bb8389d940521074c2a940_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040331X0-portrait.jpg",Confess, Fletch 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=fb21285ddc54b57c24337e4d2520a227:9094ddd9310abccf6a60f67213a2d34f
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6482c21ad940521074d55b8e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040414X0-portrait.jpg",Moonage Daydream 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=5acf245e8f3a6e6e3780b24ef8c2eae8:cee3e5e67bf23cfe3273f876927189c0
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64aa5c38d940521074d91045_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039401X0-portrait.jpg",Margaux 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=a32f90d971edb0368d0237cc73de32ae:b9332967de6e09b431c0b8a42c505744
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64320aaed940521074cdcaae_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040335X0-portrait.jpg",The Bad Seed Returns 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=009fd19251959806a39dc906f92c714c:6ec1d57ca846fea6ac0b37b769e7384f
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64fb27f7d940521074e0a692_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039115X0-portrait.jpg",One Way 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=33d2632b08f1bba63dc99b19320a1a24:dbe8c55fd82f33ccc4a39e7ef098af05
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/638086e5d940521074bd1b02_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039491X0-portrait.jpg",The Forgiven 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=932a01574a795292ec14d216abc3e9a8:b5c78983b3e00a53ba74459898f3b3d9
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63f30a17d940521074c7e20f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040412X1-portrait.jpg",Honk For Jesus, Save Your Soul 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=00fc73f1c1bc8a2541a26fd886de8550:e7a70ed73e21e4799550352a505c9e56
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64aa5dcad940521074d91072_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040512X0-portrait.jpg",Mcenroe 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9be60ca535459b2d2b447bfe4ca99e52:5f57f6dcfbad4fddda5c4770ae45084c
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64fb2666d940521074e0a664_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039484X0-portrait.jpg",Beast 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=39148205b8307db4234520b7c85933d8:a7ec4d9cb1bca394a68d249aacc75c94
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6455c27fd940521074d12585_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038573X0-portrait.jpg",Secret Headquarters 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=b31f64d92e2edd3aa734e7b29d414686:227c5d420609a8c376f8021c18c5a9e1
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63bb9aebd940521074c2aba4_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039467X0-portrait.jpg",Fall 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=76eebfcc9eca8d8f88068c9be41eb8f7:aa6833d3240176007736f9b06fc9a7de
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6455c7a6d940521074d12607_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040269X0-portrait.jpg",Wifelike 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=4eafab1b948ff059028a793c178d84df:bacd1e0debd6a4af98e2e53a4f07aadc
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6482bcb1d940521074d55b02_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039487X0-portrait.jpg",Easter Sunday 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=418d192d5955a5057da4ba235823465f:fe4232105f2a44fd1c6a4811046c8d25
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6455c3d6d940521074d125a9_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038004X0-portrait.jpg",Dc League Of Super-Pets 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=a8a47fc45036290a64d23d4ec8fca260:83b988d6cb6d64c2441d25091ce90d3b
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63090450d940521074b1e0aa_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039381X0-portrait.jpg",Black Adam 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6d2d7d6d14bf511fdb5b92825520727f:d525869d111d70d6eaa286ba8b2bb8b9
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63a0187dd940521074c0170e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039492X0-portrait.jpg",Green Lantern: Beware My Power 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0f934f21232ab6a12af4f03b4722f528:6f6f6c38e106cc76aa0281af29efadaa
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63c5f20cd940521074c3a3cd_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039341X0-portrait.jpg",Bugs Bunny Builders: Looneyburg Lights 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=7d882144be7a305abcddc76e7c0e9478:5a3a52928c43d02c462477a39a2d2904
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/637dba5fd940521074bcd6ce_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039490X0-portrait.jpg",Nope 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=80eef4b688b5bb5faeadc47099e02596:d509a48b65a7af5a4d3a49a93fb255d0
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6455ce24d940521074d126b6_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039489X0-portrait.jpg",Mrs. Harris Goes To Paris 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=8d34ca5558c5d260c81ec1fde6a80b16:420e6295db112f465259851c3d629046
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6482b9e5d940521074d55ab8_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039488X0-portrait.jpg",Explorer 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=bc8b32aba236b8e6a668361c9c69fb58:8856861386ae8d211e294b615c25a983
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6482a36dd940521074d55883_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040190X0-portrait.jpg",Endangered 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9688037b328e9ee2c279d80103cb10a6:0bc7036614226e0eeb160c3a2900dc54
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6482b222d940521074d559f5_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040002X0-portrait.jpg",Minions: The Rise Of Gru 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=237151ea8599bced70242b1a60e2bdcc:5d7d33e38761ed5f732fc35fccc8e3af
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63f31649d940521074c7e33c_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040021X0-portrait.jpg",Vengeance 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=1d1b1ef58b9b2aa6266c0d0be35e3278:00807715703263cd059bc87a5f151aa0
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6482ba14d940521074d55ac1_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037895X0-portrait.jpg",Elvis 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=1b4717c1168c7ef1dfbb2fff9ed75e1b:983f2f4426d8f603ec9e3c90a535763f
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62eb41efd940521074af13a6_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039104X0-portrait.jpg",The Black Phone 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=934c68e59d23c535b9956c95dc256f57:3508c3759738d46d640f2c58f3bfa528
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/643210d7d940521074cdcb49_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040407X0-portrait.jpg",Doula 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f4ddfcc19b4169d8f65c2374a75446b7:11941c6c3e957c6bbe983c613e15cba8
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6482cc41d940521074d55c9c_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039486X0-portrait.jpg",Brian And Charles 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c78a0e7a83fb3e701d38e2dfb495c352:6289b717e15915eca90666b6eaa6f15c
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6432197dd940521074cdcc35_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037123X0-portrait.jpg",Father Of The Bride 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=657fbb4748e24951c1886b9332c99854:fc6dfff686f5b9c56aa34485a6528f0b
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/627e3866d940521074a4cce6_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038571X0-portrait.jpg",Jerry & Marge Go Large 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=bc4c66f1c2cb69708f8c6d090edd5670:b386cac6aa376b91a7bf0af6b42e6d17
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63803d7dd940521074bd1381_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038101X0-portrait.jpg",King Tweety 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d3fd6057b764397789c0b53d6f5b33ff:0da852263f8def5ce625438a881a08de
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6342cdbfd940521074b74a80_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040270X0-portrait.jpg",Katrina Babies 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=faf6a247abeb281555340b57f42c9781:55865255a85424fd4bfb6ef5359f82cb
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64fb19fdd940521074e0a52a_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039449X0-portrait.jpg",Jurassic World Dominion 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=1b01efc541837ac20225d45c01017478:f17c0d9dce14189f14ebc30d422bc1f8
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64096451d940521074c9ff92_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038405X0-portrait.jpg",The Janes 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f49d6e95c789197d491b645840fb4e66:18cea3795549c5a4026d3648d33ff9d2
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64fb0106d940521074e0a265_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038005X0-portrait.jpg",Eraser: Reborn 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=09c01e57f35f2455c10c40588d55d4d6:bdb12279b2e904b8e91fb66413683631
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/636b7607d940521074bb1dc5_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039402X0-portrait.jpg",V For Vengeance 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=2435834e51edd4a250af7d0b0e1f5485:41ce5c7cad0dea42304a4442f9c1f028
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64321e0dd940521074cdccb0_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037974X0-portrait.jpg",Top Gun: Maverick 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=92c576390921fdd3968eef7675385739:210391610b005bd86b3188e3f41dcb05
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6380a3b1d940521074bd1ddc_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036974X0-portrait.jpg",Navalny 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d0fb2b52697e5976829a125c34607c4a:f4d0570c9e2219907cb53f6473d0c62c
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6283717dd940521074a54975_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037975X0-portrait.jpg",Teen Titans Go! & Dc Super Hero Girls: Mayhem In The Multiverse 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=dbf82611f81298e42a9493961feff1f7:c6d9b03ca108ebc4c379dd8781cae4d8
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/636b2cd7d940521074bb163f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039375X0-portrait.jpg",Downton Abbey: A New Era 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6b4e014adad7fb62f36a12843aade61d:94ad7e26c8c5dcfe2ca289ca81caebc5
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63ca4d73d940521074c40d1f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039374X1-portrait.jpg",Firestarter 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9800e29fa15ab9a8e18ff2ecb9044ae1:6e9a0a384dd23546f4d30eddb0c654ab
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63f2ec25d940521074c7df32_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038089X0-portrait.jpg",Dc Showcase: Constantine - The House Of IDNtery 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=35f4bfa08e09f05763fe80d1339ee5d8:e0db36a9750f1906ad5b2e395bd764ca
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6342dc2cd940521074b74bf8_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037490X0-portrait.jpg",Fortress: Sniper'S Eye 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c5c8e64802484c4a95d59c0765cbbd60:7653ecedaa01d388574bf6d4765e4293
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6318496dd940521074b34ed3_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039379X0-portrait.jpg",Memory 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=cb17bec7244f2a03e5644780af88486f:7695f84bc5054965a5947cd44c480f4a
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/640687a2d940521074c9b9f1_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037590X0-portrait.jpg",The Northman 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=8631798665a49b3438f6f7821729338d:4d54dc4a92965f0671d48f89e16e3c7f
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/637606dad940521074bc1db7_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039245X0-portrait.jpg",The Bad Guys 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=50a5b1fe96acb8b7d9714cbc26134163:c5718a1b968f70fed18399fdbc816e2d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63bb757dd940521074c2a7d5_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037116X0-portrait.jpg",Fantastic Beasts: The Secrets Of Dumbledore 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f28d844df51ca02d318d7ddb847f74c8:98fd07dcc51e5e5ce0ce6aa9bc4fab02
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62792a41d940521074a4530c_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040193X0-portrait.jpg",Tony Hawk: Until The Wheels Fall Off 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=61456bb41325a0ee463c8c031679ad8d:7f6f7b97a34a47da22996d7411303fc2
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6455c90ad940521074d1262c_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037588X0-portrait.jpg",Ambulance 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=a26313e43f2b36e64111bd5f20f82a8b:4c2fe8e829d418bfd7d4ded2bbc4d7a5
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63760ba3d940521074bc1e52_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037973X0-portrait.jpg",Sonic The Hedgehog 2 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=4ee3f16fc50c439ef1e7bf99bf95f082:3bd146a89b97e742ebd95e233d830aca
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63230076d940521074b45076_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036972X0-portrait.jpg",Fantastic Beasts: A Natural History 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d91e5ba0bc5e3fc19d55826037d406d8:4f4b5ed00aa0005d76cc38716b6a1eee
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6279256ed940521074a45292_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036820X0-portrait.jpg",The Contractor 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=b6fcce32003fcff7817016652d394aad:a3c412378aff130b934ab0fb610efa81
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/636be706d940521074bb2971_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037489X0-portrait.jpg",Everything Everywhere All At Once 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9441af1e52c27c4f4759b6b3754913de:4e5db648fc9d0eeade20b6135faeee0d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6317464bd940521074b33602_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037907X0-portrait.jpg",The Lost City 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=dcf0caed4f1eb108a28a9ed65e49ad7a:7fc280a8fb1e02a22533b515d8f3c35b
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6342984fd940521074b74505_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039114X0-portrait.jpg",Super Greed: The Fight For Football 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=398f28840e668a46ab44e3ad255768d6:778b0ef465002ad8699205b7120a503c
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63ca3bbed940521074c40b56_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039485X0-portrait.jpg",Bisping: The Michael Bisping Story 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f20324da06e73305984d86dddf411781:d5d3598e78e95318a893de3ff922f7c4
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63f2fa12d940521074c7e087_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038442X0-portrait.jpg",The Outfit 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=1b1d5ee5f0d51e9ea934ffa52751ab9a:85a9e0a7765d931c7a4ae87e9786eca4
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63bb86b7d940521074c2a994_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040322X0-portrait.jpg",Making Of The Last Of Us 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3dafee42174de18001e4abe81ee371ae:6a4a15371a2316e1a380f5a6b236f95a
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6412d0cdd940521074cae0ae_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036967X0-portrait.jpg",The Batman 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3baa9021906f125457c96883d83e3f6c:c9a4dd29d1e31a1fcd01a78590c61d5d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/625530d2d940521074a0f2d4_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040209X0-portrait.jpg",The Last 10 Years 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=560e1449ca4923be37b36b41c812b38d:d1399c24cbb401413da4ff1a87de5045
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6417c77ad940521074cb56d9_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039468X0-portrait.jpg",Frederick Douglass: In Five Speeches 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=7cd1b8a510b85292523bbeee74410516:0def4a1a996131f39a556fe8bafdd80e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6455bd63d940521074d12504_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037908X0-portrait.jpg",Run & Gun 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9c839f16ec6474bf575a2c6442655eb8:62093e3f4ad98d9a156cfa9461bb5435
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63428b25d940521074b743ac_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040022X0-portrait.jpg",Icahn: The Restless Billionaire 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=21f53609fdcb8463bdd768082187fa25:8c111e56b16e21b954d358954d23a12f
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64321b0dd940521074cdcc5e_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037589X0-portrait.jpg",Marry Me 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e8888f0524a39b106c3af820cc809497:f9b54f5fc68302c2486023f56d0ce5d6
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/638086bed940521074bd1afa_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036310X0-portrait.jpg",Kimi 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=4ec8aec0a3f54e4c8d21ac41538cfeef:d6087ce120bc8f8ee58843c16e15a211
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6202546fd94052107499273b_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037320X0-portrait.jpg",Catwoman: Hunted 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=5290f05ad454ce3c74f904dc3eed167d:d3a361347aef31b504c850da4ea01e8e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62cd62e8d940521074ac4560_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038455X0-portrait.jpg",Moonfall 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=53a4912f830b3c1611164d30c7b1a22d:12be4137133533126dce4e2e4a97d539
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/636b3f92d940521074bb181c_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036064X0-portrait.jpg",And Just Like That... The Documentary 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=77d840e9f9c04793b62bd6650b0639b6:680030ad4339e5f38f7f7bd84130f3c1
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61fb850bd940521074988489_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036060X0-portrait.jpg",The Fallout 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9739646a3a304ca88d04dbcdd7e0364a:d82c8151a3d1ae5fcda631ec72eead30
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61e036fafbbcc21f45d61a6b_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040319X0-portrait.jpg",We Met In Virtual Reality 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=65221b44dfe18d850e5cd097fdf264c7:dbe4bc9aab65ca50a2d2aaa97273da43
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64aa66a8d940521074d91152_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039378X0-portrait.jpg",Heatwave 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=53aa0285e81c11bc845c3da21e0496c9:9a25485bb9d75c003d862798aaf5eaf8
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63f2f8b4d940521074c7e063_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037909X0-portrait.jpg",Scream 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=648f7d16c3eb9f0609d126b468e00f26:a1cd339b6d115af5efb2550b613fc6b5
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62edb8c0d940521074af4fbd_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037903X0-portrait.jpg",Fortress 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d74381ba0d51aac55888bfe760bf5c60:962d9c72bb5da610643e41928e371e5d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63174365d940521074b335ba_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034717X0-portrait.jpg",Harry Potter 20Th Anniversary: Return To Hogwarts 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=057724613f4a44c2b90be8213036b00d:441a7d0715cb47a5aa93be4d2203faf8
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62038b3ed940521074994732_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037283X0-portrait.jpg",The Electrical Life Of Louis Wain 2022
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=fdd120f1c7b9f7c6b99b6626ddc1fd14:ace8c4a7fae1194815ad36f5847be85c
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63426f3ed940521074b740d4_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037632X0-portrait.jpg",The Super Bob Einstein Movie 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=fa648ae6efd2836f7ad09e3d7813533e:ae421f04eae0e4ef00f2e1a49b21a877
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63ca56fad940521074c40e11_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036304X0-portrait.jpg",The Matrix Resurrections 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3d9b0ba5cee245178486faf5addebd6c:e331c576eafb88cbed3944455cd85bd7
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61f3c993d94052107497cbfc_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036975X0-portrait.jpg",Sing 2 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f06dfbaaed25d3c7148139e93ac24883:48d7ea75d63bb205cc2cd78b9499817e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63427f14d940521074b74267_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036867X0-portrait.jpg",Reopening Night 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=52faff4e9db2820652db40196c463c67:a7903d6e4eb8a61dc5d6972cb9cc1c8e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63820702d940521074bd3fdf_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038568X0-portrait.jpg",Christmas Takes Flight 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=53ece42afb1fb08741823f43bd65a050:1781c60e3956806991e73bf449feab09
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6380498dd940521074bd14b5_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038102X0-portrait.jpg",Nadia 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6e5b11ee98d534db56c99a9e0b526138:10b04895a7a6248e405212501fc9acb0
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6342dd86d940521074b74c1c_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036830X0-portrait.jpg",The Slow Hustle 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c005d496bf1a01334d6b970d14e8c3f3:1015b2fb4bb69644e42816e8418cb748
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/636c0e6ed940521074bb2d6e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036829X0-portrait.jpg",The Forever Prisoner 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3a240ab01f0cd7b642a069bf8f74c6d8:d097124c2faeb612f7f0c542e8885b18
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/636bf696d940521074bb2b08_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036850X0-portrait.jpg",Adrienne 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e251c3298c2b3614d5837f98018769df:f6f7d7d717b1138e909d756c2c09378a
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/638077f9d940521074bd1973_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036868X0-portrait.jpg",Life Of Crime 1984-2020 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3291ea190f463841eb7e0d40bd6b0de0:7cbee9641b1de35b523ca06d98e911f0
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/636b2fdbd940521074bb168a_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038570X0-portrait.jpg",Merry Liddle Christmas Baby 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=336ec3240788ab1b7ca2d5b2415de3a6:424624691899067403b10842b7a93294
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6380765cd940521074bd1949_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039397X0-portrait.jpg",Time For Them To Come Home For Christmas 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=857d0ba966276d74dcc399813f612ad3:938410640eb8b99b114ec20a8ba46015
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6455b433d940521074d12427_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039398X0-portrait.jpg",An Unexpected Christmas 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=4635e4469fc767e70aefd3a746521724:c90da00cbb7794c31d5cc24b182b6ab4
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6455b2ded940521074d12403_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034759X0-portrait.jpg",8-Bit Christmas 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=73e55b2e8edc55778a94d33c87525e2c:52657c6e384508675f9f7028d96245c8
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6194f9defbbcc21f45ceefc3_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036295X0-portrait.jpg",King Richard 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=1357c23ea424433c83afe69717c010ae:a53ddd1fcc0134e94fe42bcd85a6b687
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61fbcf7dd940521074988bb3_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039400X0-portrait.jpg",A House On The Bayou 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0fd0814d91a3244e6a7dc877bde85ce5:472272a0975157976155625a3c280511
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64320f3ad940521074cdcb1f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037284X0-portrait.jpg",Psych 3: This Is Gus 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0d9725c0e655add81e6fd1d0ecef55bb:730e519c26832a5c19fdac65b260566f
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63428aeed940521074b743a3_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036828X0-portrait.jpg",Simple As Water 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=8043df5cdf20db81edb54627fc65dc7e:da500cf9885bbac9c8ec602bc5412a67
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63589ccfd940521074b955d4_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034462X0-portrait.jpg",Transhood 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c62624c122694c3b8cb57a20bbcbfa9d:5028b861d5bd46d8918eed44f417c07e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62032addd940521074993ce4_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039396X0-portrait.jpg",My Christmas Family Tree 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f6244e3f1657f5d85c33dd818f7d333a:f8097243924f7b42c26c41900ba51302
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6455a2a5d940521074d12263_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037906X0-portrait.jpg",Clifford The Big Red Dog 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c73425a27067d5a0538301caff90c176:b4c9d4480228d799900d20b23e92684d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63173da1d940521074b33525_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/035716X0-portrait.jpg",The Rock & Roll Hall Of Fame 2021 Induction Ceremony 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3dc7fb71cf344ac79b39edce3eb2e54f:7e27e21599a195e5f98e393dc5770c23
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61c2cf7bfbbcc21f45d355f2_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036827X0-portrait.jpg",Ricky Velez: Here'S Everything 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=7664d6e758db7a403aafd9dced9c5a66:ed3cfffee53eed53da74ef122ffcaff3
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63bb6e1ed940521074c2a711_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/033529X0-portrait.jpg",Dune 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=34a59c49d33959e4ad20259684db6414:41c8678505677a8748befc3ae28cc157
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6406b2dfd940521074c9be09_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039377X0-portrait.jpg",You, Me & The Christmas Trees 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=8c1a26940efe50dd2d01607f1423268a:174ee3d551e587cb16885923c7a47653
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63f2e99fd940521074c7def2_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/033526X0-portrait.jpg",The Many Saints Of Newark 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=fe8deda17d53522cab25423cf92a2685:a0f1baab93c172dcd1d318492ae55dfb
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63bfbf75d940521074c30fbc_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034832X0-portrait.jpg",Cry Macho 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=7fc5a76277cb40b59fb8c80520289a2c:fe38a954ca762317ef2d5d43d26a1944
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63e47981d940521074c68072_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/033567X0-portrait.jpg",Malignant 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e7ab8c3244d85a1aa61e14b8fc9c09fc:41b3b931e7ecce452c817249a577d875
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/615579e99a11bf7ccbf312b2_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032418X0-portrait.jpg",Cha-Ching�S Money Adventures: A Musical Series 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=a402e576554355d08979bbc6ca5ba030:9ebe0aa54b27a0fca1d6fc8e6c17a146
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61109fc12bd0bb5cd89dbe2f_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038581X0-portrait.jpg",Summer Days, Summer Nights 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3f0e23aa4c3c0e0597af88705fec7a90:178c54f0fa039c0331b4d9370e2f3798
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63ca4926d940521074c40cad_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038630X0-portrait.jpg",Sealed With A Kiss: Wedding March 6 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=5bea3db46b994ac1d840ecf313b01f9d:8c08da9e4f597ac58596113c567dbf2f
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63ca4a88d940521074c40cd1_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/033426X0-portrait.jpg",The Suicide Squad 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=fa6a66bcdca85bb180d0f905f3243d2c:72929e78735c6df826d98ea512dbc2a4
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63bf8190d940521074c309c2_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032891X0-portrait.jpg",Space Jam: A New Legacy 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0220728ee3505e06bc66cbe386d9bb58:f1dc760afd1eebf5cc6866e48a81aab7
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63bfbc29d940521074c30f68_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032069X0-portrait.jpg",No Sudden Move 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f49d165552fe5a028479752ef7f57933:4be4dc2a6619f7b5d511befcffe15385
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60dc75ec16b55f4d934fbce1_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039483X0-portrait.jpg",Paper & Glue 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=8b642286748ff199007f171af9dbb520:78e590b56e88c1b0300e771a79f53243
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63be1ff2d940521074c2e846_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036866X0-portrait.jpg",A Choice Of Weapons: Inspired By Gordon Parks 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=cbac1661ce6e2b586178aa5fb62cc1de:999489009490e2f0d5547203b09bf81c
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6342561ad940521074b73e2b_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/033172X0-portrait.jpg",In The Heights 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=62adb4ffeb1a59f7aad4c5641f1e59c7:189333806fa192d3b6abc9449d2715ec
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/612df17c2bd0bb5cd8a090ec_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/037112X0-portrait.jpg",The Legend Of The Underground 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=40d7e6372d4eccc626235c3db8ed768d:d10dcb5d4619eb100ddca02acd413cee
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62cd5673d940521074ac441e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032930X0-portrait.jpg",The Conjuring: The Devil Made Me Do It 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=44dd002cd4eb5e42b7fd35e3e72d52ae:01dc61a4e3a5f182cdf80112ae04e863
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/611a14af2bd0bb5cd89ea595_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/031046X0-portrait.jpg",Oslo 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=58d176494ce55576a466d8f5050c8136:efac651d07e2131f702e055ea5dfd602
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60a71c248caa5a5e0b10a78f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/031382X0-portrait.jpg",Friends: The Reunion 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9c2d7a256b2c51beacdc13b3c620f1f3:e56fd562cd9ec6a913545c61596a6e71
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60ac77878caa5a5e0b112bd8_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034405X0-portrait.jpg",Those Who Wish Me Dead 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=90bd7adb2ebb480aa3f0657a5703c7aa:8ab60c2d85d8d17d5e345df2d7a72e43
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61da6863fbbcc21f45d58c34_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034406X0-portrait.jpg",Mortal Kombat 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6736a7c08b9b4c27b7794f50ed175c53:caa56583584ef76d8c89a384cda97cc3
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61b1ee3efbbcc21f45d1ba7a_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036816X0-portrait.jpg",Our Towns 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=46bb237d42af6821739655912d692d24:d3e69eff462af5ff782db14868dce3d1
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63173d7cd940521074b3351d_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/033534X0-portrait.jpg",Ben 10: Alien X-Tinction 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9b68262674c952f8b320eff4ae71f04b:203f27b095ba7c58ddedf589ae7f39b4
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6145cddc2bd0bb5cd8a2d2cf_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038569X0-portrait.jpg",Crossword IDNteries: Riddle Me Dead 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c13db60a02b44498f790c39e1216e935:d261b3a27d6259295b918c83f37f0401
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63809ea7d940521074bd1d56_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/029930X0-portrait.jpg",Ben 10: Ben 10,010 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=21c27ce2b1e55c5598b9aa50e89030ef:046d60b489ab8b28fb552b213e8049a7
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/605b010c6d048943f779571f_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/029931X0-portrait.jpg",Ben 10: Ben Gen 10 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d0e7af04e16c5e459ca1a25e2d1d0d6d:02be4efcb02f6fa90ece8ba0682d9d9f
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/607923666d048943f77c1c88_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/031726X0-portrait.jpg",Godzilla Vs. Kong 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=145babadf5fc508a99f80fb73186bd27:1a36c172c10112b14b27d4c9877c7044
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63e48965d940521074c68224_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/030584X0-portrait.jpg",The Last Cruise 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=3edb7081e4b65ffeafc80eb8100beb7e:425f0c8ca94aa678e10e4d665858e0a3
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60c543a416b55f4d934d8051_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036815X0-portrait.jpg",The Day Sports Stood Still 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=a90383ce302919dd5355168c99dd9e40:71529b471a376d739482fdf96a267c7c
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62eb295cd940521074af112d_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/029901X1-portrait.jpg",Zack Snyder'S Justice League 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=27021ea2fb9159caae60063c78d5ad88:aba6eee8c741716c709a35d382e8b121
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/604f3ad46d048943f7784083_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/030577X1-portrait.jpg",Zack Snyder�S Justice League: Justice Is Gray 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0f0c837d9d685ffcbb6929319262d861:224380500dbe84003e1cdcdc5fa7ae42
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6062e95a6d048943f77a10d1_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036817X0-portrait.jpg",Covid Diaries Nyc 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0abacf6cd2bf8efa7109c382a4a6e8e2:0f4c0dd09a0b1528305846bb8c90f539
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62eb3ddfd940521074af133e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/030578X0-portrait.jpg",Tom & Jerry 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=2b9c8e91a5295f2a88e286428f2e3952:d79a35a5cd784d6c1a113e253cf03a37
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63e47b6dd940521074c680b4_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/029538X0-portrait.jpg",Scooby-Doo! The Sword And The Scoob 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=5ddb7e9d9ad253f8800ab53c34b2f0f5:8addc626e6abf0a1f6fb541389227ff2
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60c553f816b55f4d934d81f4_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039376X0-portrait.jpg",Crossword IDNteries: Terminal Descent 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=514959254e6b576d456c81c881d4b2f8:e7f910ffe4ee2e291653bb10cdc46867
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63f309e6d940521074c7e206_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038567X0-portrait.jpg",A Christmas Proposal 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=21d24f8b0ea7d4a26fb9c8602667b202:83f745366eaf1050b62afa59ec323250
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63802f90d940521074bd121e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034806X0-portrait.jpg",Judas And The Black Messiah 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=5ece338cde764c3dbc72c41b2aeea9f5:db4beec8456d1c22d80b03dbb2e9745b
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61d7c71afbbcc21f45d54c67_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034544X0-portrait.jpg",There Is No I In Threesome 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e538b8c0e99d59b8a24594c44c5b5104:68ec8f9a0dc57a52fb8fa19ebbaf1c5c
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/619234a6fbbcc21f45cea51f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036818X0-portrait.jpg",Black Art: In The Absence Of Light 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=1b6ccb84b096976cab9fc6e28ef7f52c:3cc9d940746b2b3a83cf2bc32550fccc
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6293a1fed940521074a6d475_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/030583X0-portrait.jpg",Fake Famous 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=cb99fa59eb525f0496b07f689832d057:909d1e6cd03f70c5767ed308751e5819
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60fbd373e59f821aa9e6af5d_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034548X0-portrait.jpg",The Little Things 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=5fb4199a8cc05d6293defe0eea77d8dc:816373a029129b47726d7da708c1527e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63e46e02d940521074c67f4b_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/040242X0-portrait.jpg",When We Were Bullies 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=fd05521c0af87556981a888bf5942736:061c92db8906b7276811d8833d0e90a2
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64fb121fd940521074e0a450_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/029211X0-portrait.jpg",Euphoria: F*Ck Anyone Who'S Not A Sea Blob 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d463f91e8f025dec9d083e914cdcd39b:038f792a0441036e258ac96db4c244e6
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5fffb1156d048943f770e7cd_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/033858X0-portrait.jpg",15 Minutes Of Shame 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d38924bcb3515b4bb823a70f84e6903e:e8dc77e30da245e72f8d53c44936719a
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/615ea4409a11bf7ccbf3f5f6_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/035051X0-portrait.jpg",Insecure: The End 2021
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6e56bd1af1ad4a42b20fb4aebc670032:ee19f91bffe845e1da0a41056dba2ac1
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61c1add0fbbcc21f45d339fe_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/030581X0-portrait.jpg",Wonder Woman 1984 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d65f3f88e9735f66ae0ce8ea18e0e60a:95dcfcecab22f00aac0c210f804ec27d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63bf8370d940521074c309f2_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034523X0-portrait.jpg",Under The Grapefruit Tree: The Cc Sabathia Story 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0c16ea270a194debb4fb5f21410eab6e:2e98f5de3755ed7697346f4a0a41742d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61dba7fffbbcc21f45d5aa3c_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034524X0-portrait.jpg",The Promised Neverland 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=856fd90d3d6e32f4c9d57643944224db:f375133d95b8892de9069b0023b63f05
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63804390d940521074bd141e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/030582X0-portrait.jpg",Let Them All Talk 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=b61685b8a5b35ddfadd80732331d8f8e:9965b9bd9c2e525dd4ebc67b7346c650
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/606ae1486d048943f77acc67_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034407X0-portrait.jpg",Alabama Snake 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f774a11d9e88e65974002614f54079bf:03fac60fd8ad756cf79f46c1e32cf266
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/622eb911d9405210749d541c_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/028885X0-portrait.jpg",Euphoria: Trouble Don�T Last Always 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d3d9e3768e5059f09903dec3f0ff83bf:981a3560395df97e2af41d50d2513862
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5fc44fe26d048943f76b73a1_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034542X0-portrait.jpg",My Gift: A Christmas Special From Carrie Underwood 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=319704c333cb59508192aae389ff227b:41e67e1aceb3359ec7e572dc89369e83
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61923f97fbbcc21f45cea649_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034459X0-portrait.jpg",Baby God 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=5ef82fe4e427f6f7c35c0ebaf0d64cab:e4ada3242c0f1c2df740f580dc7c82b9
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62282656d9405210749cb625_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/029539X0-portrait.jpg",Happy Halloween, Scooby-Doo! 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=63f236fcb8d95727adfebc927401d2cc:76433bc36ec8eb66b86f62fec092f0c7
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/608454196d048943f77d2477_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032173X0-portrait.jpg",Burning Ojai: Our Fire Story 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=1c4eccc040f5443eb507772136eb91d7:3d6f5c85e28fcc72271f35c21cd77145
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61da4a2dfbbcc21f45d5893a_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032176X0-portrait.jpg",The Soul Of America 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=a9207806e50f4114b297688d5a6c491d:ae416a367db1adecbfd050c2a4d651cb
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62033875d940521074993e41_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032157X0-portrait.jpg",537 Votes 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=320a1dc23fff4a3791e41c8a696d1231:eeaf8cda037f4a7fc0065f2fc38c864b
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/620339dcd940521074993e67_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032159X0-portrait.jpg",The Perfect Weapon 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d4e58de2919141e0929eab30604f7bc7:fe027a4bf408bbd336fe2b0aba80430e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62033b53d940521074993e92_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/027218X0-portrait.jpg",Ben 10 Vs.The Universe: The Movie 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=39c781492ffd54bcb46cbbf66bd1b34a:efd6bba0c8e40be5ba080d0ee91e4fdc
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f4d7e5c6d048943f760800b_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032161X0-portrait.jpg",Wild Card: The Downfall Of A Radio Loudmouth 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=656420f835d542d2a0e4687ca30bfd4d:6334b163bd5f908632d1f1c3b8c8c432
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61b1eb77fbbcc21f45d1ba22_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032160X0-portrait.jpg",Siempre, Luis 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=64a26f68e23144eb9bb57500efde334e:a2a0ff4d119dacbea8f93997533eaaa2
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61b1df66fbbcc21f45d1b895_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/030363X0-portrait.jpg",Pat The Dog: A Very Special Dog 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e856f510d4ef5ac3aaed22900da55c65:46483561e0588495c46e647f614c234c
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/604fb6376d048943f7784c5f_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/039452X0-portrait.jpg",Habla Now 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0a05007a1d39a868b1bf7b75db1206e5:3e897a01d672b7f9d25192ff8e971100
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6432163fd940521074cdcbdb_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032158X0-portrait.jpg",Coastal Elites 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=65967f9bd36b5db9a28433788d32368d:5c532e2eab0ce14417df758da9fdca90
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/618ce093fbbcc21f45ce1fd2_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/028975X0-portrait.jpg",Unpregnant 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=8567f034249a57e2b58e23541272fa2d:9587a95f57bf7c497ecd3344ae3c3d08
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6401b121d940521074c94668_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032178X0-portrait.jpg",The Swamp 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=4649d361f9d55f33ac59e2bdfd9a7025:932e8c4a944cd2d928b6d41eb7eac9d1
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/616397149a11bf7ccbf46f03_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032175X0-portrait.jpg",Stockton On My Mind 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=b4d8480790825aaab563138f03f67637:3d93d3afadf0032cf2a291baa866f1e2
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6162bb039a11bf7ccbf4588e_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032174X0-portrait.jpg",Showbiz Kids 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6fa874bf1bc05eb09faf8e301ea41196:b0b27b559e8e7f9a5acaf01ab7a984e2
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60fbd533e59f821aa9e6af8d_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/025005H0-portrait.jpg",We Bare Bears: The Movie 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=8555f46076955395b912f660bc034bfa:66c1aca02fa9524e5159e62b88326b13
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f3cdd796d048943f75ef07e_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032261X0-portrait.jpg",Yvonne Orji: Momma, I Made It! 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=1a5778315a4b5173ba9dbf2b2899d1b5:e68ec9e475e5ec88ef41a33f563f23b6
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/612094fb2bd0bb5cd89f479d_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032263X0-portrait.jpg",Bully. Coward. Victim.  The Story Of Roy Cohn 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=7cf5db1c9f055f468365edb6144f3ea2:e26e9d9fa8e59f50d96d317859e6f721
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6162bd149a11bf7ccbf458c7_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032266X0-portrait.jpg",Natalie Wood: What Remains Behind 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=b354e496484d54e1baec4850bc0b305f:0b833d462a3a7e6d56f2e76a7260b182
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60fe916be59f821aa9e6f179_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/028978X0-portrait.jpg",Lego Dc Shazam: Magic And Monsters! 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=555e71a891645540bd0740d1627f3da2:7be459e2ea5bc5fc7b1b978ada44c9be
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5ff5a3a36d048943f76ffb48_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032279X0-portrait.jpg",The Scheme 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=15f4e3adf23f5155a63cd451ab4e10f2:63a7e73f6b06ae29680ae325acf679e4
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60ee26ebe59f821aa9e55a65_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032262X0-portrait.jpg",Kill Chain: The Cyber War On America'S Elections 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=ca05044501f651d89c0e321847fb8f33:c7762800cce8ebcf433cfa84e107e90f
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/612098482bd0bb5cd89f47f7_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023671X0-portrait.jpg",One Nation Under Stress 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=83bf436c16485ff588c923720b2bd2a3:d151e747a70e205aee235810327fa574
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5ecfaf176d048943f7548ed1_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/033908X0-portrait.jpg",Fukushima 50 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=bf83bd3b16d659c58dd4aa3dbb794358:4327bbfbd1abcf6a4dae048b874a527f
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/618f3a78fbbcc21f45ce5a0f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032264X0-portrait.jpg",After Truth: Disinformation And The Cost Of Fake News 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=501ff466feb25ba1a81c22a98b0de5ca:0fb1d848977da768c6883015d09bbdc4
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60fe7781e59f821aa9e6ee2b_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/034467X0-portrait.jpg",Crazy, Not Insane 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=620f828969a2d89377561ccd44e216ad:3fa6d6e74dee46ce6cc46a4d483f0e81
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/62285074d9405210749cba64_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032258X0-portrait.jpg",Women Of Troy 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=1b34abcc1e8857ebb68d035b0023a32d:3889dbb67ff609e82243120100c3b7cc
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60ee2274e59f821aa9e559f7_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/030445X0-portrait.jpg",Ali & Cavett: The Tale Of The Tapes 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=2bd3fff822815ac5b3a0b222750a7f78:543b912cbf433bd3ee453cf7c491a445
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60c504f716b55f4d934d7a21_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/030449X0-portrait.jpg",We Are The Dream: The Kids Of The Oakland And Mlk Oratorical Fest 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e13a05eab5645f68b7bf2487571f71d9:eac700437640b069d9302a47e84b1b0d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6162b5859a11bf7ccbf457fb_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/026829X0-portrait.jpg",Birds Of Prey (And The Fantabulous Emancipation Of One Harley Quinn) 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=f8061d9441e250189788d4e8b27f4dac:a27f6f27e2d32bceccedc4fb8b7b1182
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5feaed166d048943f76f000c_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/035720X0-portrait.jpg",Kaiji: Final Game 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9e766311b1355849315b46da9533c343:d7202584e1c1339ae332b8247da9f574
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/648288d7d940521074d555d1_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032468X0-portrait.jpg",Pat The Dog: Into The Wild 2020
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c148d8962462584fa09e4adf769cc6db:a50c838066031c5bf2e973c0026cd395
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/611a496c2bd0bb5cd89eab5f_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/032259X0-portrait.jpg",Finding The Way Home 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=b70e66f21c975a43962e17ed10f298c5:6527f636fa8ea5e9b9c1857d1be5e3c0
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60fe88f5e59f821aa9e6efed_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023947X1-portrait.jpg",Wig 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=bd26bed6f22050aea0bb6a4702a05302:6d7f182712114530311b3f7eb12c27b3
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f2926b36d048943f75d1013_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/029388X0-portrait.jpg",Lindsey Vonn: The Final Season 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=47b04227e82657ea85bc2145807fc439:0ec5c265b4075e334a81e36d5976fb06
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/60473f486d048943f7778384_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/028544X0-portrait.jpg",Lil Rel Howery: Live In Crenshaw 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=7e76cc339d05597683b355f9487b1922:4efd4733f2c1f20d1692e08f775b1541
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5faacc006d048943f769195c_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/029537X0-portrait.jpg",The Apollo 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=daf989a90a245936a9b2c584d5c765b4:c344c9ad76695eeaab1c18cb89e7b840
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/601b4be36d048943f773796a_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/028543X0-portrait.jpg",Saudi Women'S Driving School 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=2a8420101a575cbea365709042c9fcdb:ea239aeb69140d2fa2e65fead58f74f7
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5ff5a04f6d048943f76ffaf8_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/035718X0-portrait.jpg",Her Blue Sky 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=48a81e5fe195b05fd53addcba852b7af:cca13adf040ac7d5de3d48aee546de0c
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63bbbe5fd940521074c2af18_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/028542X0-portrait.jpg",Torn Apart: Separated At The Border 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=50f8dc8c65c751de93b7892e3ada898f:6ab1aab041b3146d804257b3184e78d5
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5ff2d6736d048943f76fb993_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/028540X0-portrait.jpg",Liberty: Mother Of Exiles 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6c75fe22f30a5c9eb995856398303a38:f595a4bf5a61c3d24b10a2d0b1233e22
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5feefa166d048943f76f5f11_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/035647X0-portrait.jpg",Detention 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=2a2a470368552cc0f5bea027fc9d4baf:def8d086344e8b17402b11e5e893ddf3
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/64904b73d940521074d6a2d5_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/024997X0-portrait.jpg",Buzz 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c43ea0212cd85af8a98a9d51ed71cab7:5ce09ea0445d3fe14b029a17c71f9207
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f96c4d36d048943f7673fb3_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023778X0-portrait.jpg",Downton Abbey 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=30fb204ec6915c7da4d3a618797c6e46:4c19d776c3ca9df77a0816126d13669d
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63d25b9ad940521074c4cd82_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/029390X0-portrait.jpg",Moonlight Sonata: Deafness In Three Movements 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=61f7a20183b45fe39188d87e679a4850:922f0300a865a816583ccb88ad179f24
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6042146d6d048943f7770994_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/028541X0-portrait.jpg",What Happened On September 11 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=7fae5759da5f59c492dd0c2d6232b83c:f7c1415fe02fbfdbb37b57db5d53a261
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5fc081e06d048943f76b1a85_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/028758X0-portrait.jpg",In The Shadow Of The Towers: Stuyvesant High On 9/11 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=29f44bafce83564c9df821918638b14a:c94b97137b41e48f08a6681a02c920ef
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5fcf6bc46d048943f76c78c4_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023572X0-portrait.jpg",Bad Education 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=48b2fbbc8be25451b120d3d8d788edbd:dbb4af8212f20d8594566706d2e208a3
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5e9d186f6d048943f74fbb63_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023714X0-portrait.jpg",It Chapter Two 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=4457a3a688ca5b2894290f14eab208bb:d156c740365028f6a2aaecef9f84a90e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5ef5fd6c6d048943f7583351_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/036062X0-portrait.jpg",Scooby-Doo!: Return To Zombie Island 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e6f9d1ea7dc74c5d9839d2e61ad9aa84:1afa35bc4e948b3e226b52525e3c17d6
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/61f281f2d94052107497ad57_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/026734X0-portrait.jpg",Steven Universe: The Movie 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=910b1dd682db581280a5d6039c424444:e3ee39a0ab3ecb357c8c5149f065affc
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f83d9306d048943f7658322_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023713X0-portrait.jpg",Blinded By The Light (2019) 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c48cdec598785a9288c0d7c96ecaa6bf:1968e16a9983ee5b3ee5615af5e29e7e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f194caf6d048943f75b8e09_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/026801X0-portrait.jpg",Alternate Endings: Six New Ways To Die In America 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=5c672124f77852218b55f84c999855d5:3dcc9a34db5e4397e147bfb7d7be28b6
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f7b0eff6d048943f764b28b_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/024996X0-portrait.jpg",My Favorite Shapes By Julio Torres 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=5157b0aeead15093855881df8d51a891:42d1f0af488f6036ac2ba8ef318638a5
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f76dc446d048943f7644f3b_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023508X0-portrait.jpg",Fast & Furious: Hobbs & Shaw 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6b9b56bd7f8a51a4a37f450cf3334152:ead1c52f745993bc3c8802ad7de99d64
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5e7864b63a736626cecbf699_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023991X0-portrait.jpg",Who Killed Garrett Phillips? Part 1 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e4ccc2a761dc50599e9d0d0c539ccd34:ddfcdb5ca9c933018a98daaac2b6f1ce
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f4f71d56d048943f760adef_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023992X0-portrait.jpg",Who Killed Garrett Phillips? Part 2 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=770cec3f5c3c598d945edba1803fee82:ab473adf5c302c3b1b6eb4c68dd57ee9
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f4f8af06d048943f760b042_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023619X0-portrait.jpg",Lego Dc Batman: Family Matters 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=b8d43e39b7be5b14991271ab6bc08ead:12e6069c423c2d79ca416632f3830d7f
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5ea3b3a86d048943f7505cba_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/035725X0-portrait.jpg",Weathering With You 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=ba3bbaa55fb5cc27e8fe557f401f232a:2c9b166707bab3be814faa159a0fb149
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/63bbbe8bd940521074c2af20_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038580X0-portrait.jpg",The Lord Of The Rings: The Return Of The King: Extended Edition 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=53e5693190ddcb5200025459868ac054:89bd9064bde0396419b720b7323af0bf
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6342eeadd940521074b74dcc_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023948X0-portrait.jpg",Sermon On The Mount 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6fca4ed8d94256d6b4a89af70961e347:8117447554a945027bc49c9c6c37e421
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5fb5f9036d048943f76a2334_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038088X0-portrait.jpg",The Lord Of The Rings: The Two Towers: Extended Edition 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=11bbdd6fbc637f2a35469e348ef7178d:ff9afd5181e4441ee624988567479372
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6342d792d940521074b74b76_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023471X0-portrait.jpg",Annabelle Comes Home 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=534f2722e9b959c3b54629db6d4fdbd9:91f10ac15b91a1e7fd5e22690f405086
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5ea3b3776d048943f7505cb4_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023990X0-portrait.jpg",True Justice: Bryan Stevenson'S Fight For Equality 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e9ba8a4c1c955cf2baa848e5d021f63c:50b91a888595820fcac20044a2bc1947
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f4f68c46d048943f760ad1a_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/038087X0-portrait.jpg",The Lord Of The Rings: The Fellowship Of The Ring: Extended Edition 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=efff8affd30a942825a51d7a2e62c0db:c8fed1ea7320b8160386d9a0f8948d94
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/6342d5ffd940521074b74b4d_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/022751X0-portrait.jpg",Ice On Fire 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=26b9b6164b6c5707adf2bed16c0d29d9:6ce3b9bebda7e82a738d6b449adb73ec
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5d8e552ecbea8a6a4eef6724_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023005X0-portrait.jpg",Deadwood: The Movie 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d727668c089f53d48a2b6eace9561a37:e2fd06bd8e6dae5785ad244a8ffe27ff
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5d88a265717da66b07320304_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023873X0-portrait.jpg",Running With Beto 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=157b4cb1333a551da6e475a7701e4dc6:1e42dd78fb233c02385f2a60d49274e2
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5f22aebf6d048943f75c7261_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/022860X0-portrait.jpg",Game Of Thrones: The Last Watch 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0b68681dd9f35f7fa7e295a6e65e1408:c0da3c6affe85841342d7fd7b0a4c401
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5d6c81b7bbaf7a3a4767bbc4_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/035727X0-portrait.jpg",Sadako 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=7b17e0aabe54b383ef0f37acdd388ad2:6d1ebe8a244554dd246fe026cfe8d253
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/648fe780d940521074d6992f_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023874X1-portrait.jpg",What'S My Name: Muhammad Ali (Part 1) 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=d77e0324d8315014904152083f6f1747:33dc26c8c57cd8c159e24f9bce24add4
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5efc47cc6d048943f758cc67_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023875X0-portrait.jpg",What�S My Name: Muhammad Ali (Part 2) 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=53000557dc5354d5806882f97e18923b:df53927c8cb21fe7f691d21ad384d01e
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5efd3d926d048943f758e3b3_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023872X0-portrait.jpg",My Dad Wrote A Porno 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=8b2a1df92f695cf88dbdb508cb6488e4:2eba4f4522bc3686007628dc00228e51
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5efb34816d048943f758b221_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/022859X0-portrait.jpg",At The Heart Of Gold: Inside The Usa Gymnastics Scandal 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=6a5a6e84589e5a138cf9f631cf0165e4:62927021811966c97e58ee973e99cce4
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5d8f8429cbea8a6a4eef8503_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023411X0-portrait.jpg",The Curse Of La Llorona 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=181b57d1382c579ea16db452e3e4c089:ad8983c16c29e925a1381804c7e8db17
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5e3a7dc4cbea8a6a4effc738_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/022752X0-portrait.jpg",Native Son 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=df7bb77e5c2a5f07b4815f1f7383af06:07a8cdb099f636178fe34774516e3c79
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5d8ed670cbea8a6a4eef73d3_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023363X0-portrait.jpg",Shazam! 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=340d90dbea8e531a985e47e58052e04b:6171b36fe83387cd8ec869551f7a8542
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5dd3adaecbea8a6a4ef6040e_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/022750X0-portrait.jpg",The Inventor: Out For Blood In Silicon Valley 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=13a6be2e46c9513293c8280b1b1aae7e:d077fcba9c3f0a35b2debaa2a728e3c1
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5d88abae717da66b073203e7_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023614X0-portrait.jpg",It'S A Hard Truth, Ain'T It 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=717c04993fe15ed4acd80d06ee53f64c:32e6abf26819c2c8389bd5a434f16e97
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5eb14e336d048943f751aa15_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/022540X0-portrait.jpg",O.G. 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=afa0cc9c9b3c5420b23091d734cb4d0b:a51bb9f4f39a544abc19b02529cf317a
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5d8e9abbcbea8a6a4eef6dee_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023323X0-portrait.jpg",The Lego Movie 2: The Second Part 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=9c229231097e52deb15aa37df1df9f28:c80033e0c8c1e2269dcc188bdea91be9
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5da9b9dfcbea8a6a4ef2029b_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/035646X0-portrait.jpg",City Hunter: Shinjuku Private Eyes 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e388ab72dd31b5c3890eb54b5753c794:fd2e2538798fd3613b0fa033fafdac89
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/649049fcd940521074d6a2af_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023622X0-portrait.jpg",Song Of Parkland 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=7ffb386ddae15b00a27919976fc3b36d:c625c46993dd733bcafa1e82766d5e51
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5e829e1c3a736626cecceef6_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023415X0-portrait.jpg",Scooby-Doo! And The Curse Of The 13Th Ghost 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=b98b097b467e58a297efd150628e567a:27eba9e5efbbf0e9adef662e45cc9f09
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/616c25379a11bf7ccbf54155_hbovodhd/dash0/IDN_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023547X0-portrait.jpg",Amanda Seales: I Be Knowin' 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e7c9fb58d3cf5fecbf5a2bff3301f078:2294e0d640bd6cf3b26c57ed29837444
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5e58efea3a736626cec8fafa_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/035648X0-portrait.jpg",Extreme Job 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=0f6ad2719ec73add8a7571f513a3a407:8acbb9e92dd9145f8e1582ed097dfa19
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/649eaeb5d940521074d7f9d7_hbovodhd/dash0/IDN_DOLBY_index.mpd

#EXTINF:-1 type="movie" group-title="VOD HBO" tvg-logo="https://dai3fd1oh325y.cloudfront.net/images/480p/023546X0-portrait.jpg",The Truth About Killer Robots 2019
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=e39669df79af516ab548849fad0f184f:6e95d850d7cf4759beb6375630da8022
https://hbogoprod-vod.akamaized.net/video/vod/output/HBOAsia/5e3cd382cbea8a6a4e000046_hbovodhd/dash0/IDN_DOLBY_index.mpd


=====================================================================lk21==============================================================================================

#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/11/film-control-zeta-2023-lk21-d21.jpg",Control Zeta (2023)
https://ss309.dominofile.com/stream/7/8B/fsm55g0QfefjbmYdMD7wOUFNVX1SrQbK3ll/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-rabiye-kurnaz-vs-george-w-bush-2022-lk21-d21.jpg",Rabiye Kurnaz vs. George W. Bush (2022)
https://ss342.fileonsky.com/stream/A/0A/pr69QmJTQMTS1gdLh8hbV8DwBbaoRkklPiH/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-freelance-2023-lk21-d21.jpg",Freelance (2023)
https://ss369.muletten.com/stream/9/BD/4wXzlk9KGsa4A1uhuhM4dMTVed3NPZ5HFP0/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/09/film-teenage-mutant-ninja-turtles-mutant-mayhem-2023-lk21-d21.jpg",Teenage Mutant Ninja Turtles: Mutant Mayhem (2023)
https://ss373.teifanc.com/stream/1/F7/kxUfHrvEbXjYyapkhjOR8AFbdjdhPIJKoPp/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-creation-of-the-gods-i-kingdom-of-storms-2023-lk21-d21.jpg",Creation of the Gods I: Kingdom of Storms (2023)
https://ss160.handonet.com/stream/F/7E/RYEgqtMuQ9hozVN1SLq9luJ1FENT30rTz7U/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/11/film-bright-lights-starring-carrie-fisher-and-debbie-reynolds-2017-lk21-d21.jpg",Bright Lights: Starring Carrie Fisher and Debbie Reynolds (2017)
https://ss34.guronam.com/stream/8/7F/Z7pvuxbPIpf2unpmZAdsUoSsNtepu4wclL8/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-hustle-flow-2005-lk21-d21.jpg",Hustle & Flow (2005)
https://ss368.fantasab.com/stream/B/71/lhHMUWk0TKHOGxCh6iaYNL2TKQQ8gP1hSA3/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/11/film-six-by-sondheim-2013-lk21-d21.jpg",Six by Sondheim (2013)
https://ss328.techsalar.com/stream/9/6C/8dTVGtmnR9TmcJYyGKSeIOJ95EghDH5DcBk/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-praise-this-2023-lk21-d21.jpg",Praise This (2023)
https://ss38.jupshare.com/stream/3/71/L6hGz4LpB1WEHLE3g0veRbcCYqnRxIlpF7l/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/11/film-the-eight-mountains-2022-lk21-d21.jpg",The Eight Mountains (2022)
https://ss364.filesbus.com/stream/A/39/m3St0pIDxLeFhLXU76y9tbAENJ56hGYamGa/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-the-queenstown-kings-2023-lk21-d21.jpg",The Queenstown Kings (2023)
https://ss352.ructop.com/stream/0/C9/18yQC9jpeU2fu4rqANCY6NSF1zlaIInK8eX/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/11/film-all-time-high-2023-lk21-d21.jpg",All-Time High (2023)
https://ss315.filebagz.com/stream/0/E1/mwsOEZkMTPtq5sZx00guETQtaiE1QuOdkBL/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-vikings-blood-lust-2023-lk21-d21.jpg",Vikings: Blood Lust (2023)
https://ss311.gigazfile.com/stream/E/B7/D0NMKzgiwaXaQdU2OQPZlOBjawqehDIpwjl/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/11/film-iraivan-2023-lk21-d21.jpg",Iraivan (2023)
https://ss363.trendyfile.com/stream/C/CB/8fXzXKJICLCl0KNnyb137ZIyAnv518x9fYN/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-maxines-baby-the-tyler-perry-story-2023-lk21-d21.jpg",Maxine’s Baby: The Tyler Perry Story (2023)
https://ss347.sofarfile.com/stream/2/58/30Utkx7UjJ9zcfx8kWp7MMntYP0XeVqr9ca/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/11/film-sukhee-2023-lk21-d21.jpg",Sukhee (2023)
https://ss27.samnye.com/stream/E/D1/HXd6jaubswWEnaUDgaQT1Bd9btzxOHfXvdP/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-black-noise-2023-lk21-d21.jpg",Black Noise (2023)
https://ss31.filetypo.com/stream/0/52/G70OcIJY75UbHw4F7rhC04ob203VmPFk34H/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-in-love-and-deep-water-2023-lk21-d21.jpg",In Love and Deep Water (2023)
https://ss35.coopfilez.com/stream/3/DC/X5bHU0HYDHH8Tvh2F6Vd2qH9n6QkRwAi4Iq/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-skanda-the-attacker-2023-lk21-d21.jpg",Skanda: The Attacker (2023)
https://ss361.mantechz.com/stream/4/A8/JzciwNGJEfaU89jMLUQuNdx8v44V4FGL277/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-best-christmas-ever-2023-lk21-d21.jpg",Best. Christmas. Ever! (2023)
https://ss36.jumshare.com/stream/6/65/ifWgAF3E6qAKeA4oKjv0HPOyJ3NJLcy1QWf/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/02/film-the-five-devils-2022-lk21-d21.jpg",The Five Devils (2022)
https://ss328.techsalar.com/stream/C/A0/ZZvyOl1nc2AEh2P6QbzlTdGCrfmq07NRLK6/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-fuzzy-head-2023-lk21-d21.jpg",Fuzzy Head (2023)
https://ss368.fantasab.com/stream/6/49/aQ0bnp0NKgYxQb8HqpPLo9SV1E6x9cCbpqc/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-apurva-2023-lk21-d21.jpg",Apurva (2023)
https://ss334.macquen.com/stream/4/A1/LBSE0zr0seXyfFLMamHDWZTdvcsExV3WPHd/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/11/film-pippa-2023-lk21-d21.jpg",Pippa (2023)
https://ss373.teifanc.com/stream/B/30/aYVhVGuFBhyJAMWFKC4z1DvwZ55YmWFA9Dt/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-kane-2023-lk21-d21.jpg",Kane (2023)
https://ss34.guronam.com/stream/2/57/2ErauCATPkwMjen7rgsmzWELOLeT5ifPX4r/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-matt-rife-natural-selection-2023-lk21-d21.jpg",Matt Rife: Natural Selection (2023)
https://ss41.bendevu.com/stream/B/F1/LR5ZXfjNT3wK3boiFvwKPnm2LZMKyhn0TMu/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-believer-2-2023-lk21-d21.jpg",Believer 2 (2023)
https://ss358.manznew.com/stream/1/12/ct2aZ1cuF5bWYSeXJYPIoPsASANJtwq3iRE/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/10/film-expend4bles-2023-lk21-d21.jpg",Expend4bles (2023)
https://ss353.newnuscoxc.com/stream/D/64/2H6YIrOlyoroRw0qAx5pSAjQGrC48w1crIf/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/11/film-outlaw-johnny-black-2023-lk21-d21.jpg",Outlaw Johnny Black (2023)
https://ss190.mayssin.com/stream/C/25/e4lgH19CstJMJ50BqQL1osTgRiNZMwnyNp5/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/08/film-what-comes-around-2023-lk21-d21.jpg",What Comes Around (2023)
https://ss327.safilery.com/stream/3/A3/MePEyYxuCvDMyiYBhPvaxXL6cJUOykcJYQw/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-snake-hotel-2023-lk21-d21.jpg",Snake Hotel (2023)
https://ss55.monobep.com/stream/A/37/e8wLuQwd9KJeTat54zeR3sCcAf6jBDefg8E/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-around-the-world-in-80-days-2021-lk21-d21.jpg",Around the World in 80 Days (2021)
https://ss306.montfile.com/stream/4/F0/gp5EXmM2cAp6dZAp1EkxnT63dI0m3U98b87/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-fingernails-2023-lk21-d21.jpg",Fingernails (2023)
https://ss368.fantasab.com/stream/7/AE/2Z6LP8MCGtsw9fpdFFZEkZm177rUjpR2vUt/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/11/film-the-creator-2023-lk21-d21.jpg",The Creator (2023)
https://ss57.tradeonsky.com/stream/C/7F/cHbRp7VA2ffpapLnGWmYBpqkON5tdJR1xua/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-seventeen-power-of-love-2022-lk21-d21.jpg",Seventeen Power of Love (2022)
https://ss62.saoauong.com/stream/2/5B/n5Uo2YajPZpAtTwWbhJdvKFpQy0xCmBNl5Z/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-the-deer-2018-lk21-d21.jpg",The Deer (2018)
https://ss20.suptrain.com/stream/0/88/mvTefR7QYZboVgDzEakNMLEzSH9GEJZaIsU/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-echo-2023-lk21-d21.jpg",Echo (2023)
https://ss20.suptrain.com/stream/9/A7/qSJZOM5KImuFs3KgwqsjIj9EhYPatCYislO/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-valatty-2023-lk21-d21.jpg",Valatty (2023)
https://ss20.suptrain.com/stream/F/75/DVJUAojuhb9jbSdVOd6fDlz3mh8s6eK81Gq/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-she-shoots-straight-1990-lk21-d21.jpg",She Shoots Straight (1990)
https://ss211.ezupshare.com/stream/1/02/zxtXep1pu8CC34Xc3TzUaljW4rEge3ucv3y/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/11/film-the-bell-keeper-2023-lk21-d21.jpg",The Bell Keeper (2023)
https://ss309.dominofile.com/stream/A/27/odDFoDb7jJUj5UMA1wTTEqbNFQJqRLFa4Io/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/11/film-oracle-2023-2-lk21-d21.jpg",Oracle (2023)
https://ss59.upnrapid.com/stream/E/E3/DcH48uvzIclWjDhBVsD2TmymHIFvKb0nYHU/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-exodus-2023-lk21-d21.jpg",Exodus (2023)
https://ss61.uploadxu.com/stream/0/80/VPzN0sbChbNbIXu0AQwLPdgkiQQPiYZ33tN/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-rumble-through-the-dark-2023-lk21-d21.jpg",Rumble Through the Dark (2023)
https://ss362.tinusoud.com/stream/0/88/TlEaBQqA8McLFPwIRGBkjqWBfP3WHAQM1Q2/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-forever-2023-lk21-d21.jpg",Forever (2023)
https://ss62.saoauong.com/stream/C/1D/k3QlxerSKk9rmXqh3xqXsU7WlsveoBEGx5n/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-clinic-2023-lk21-d21.jpg",Clinic (2023)
https://ss350.maybtuon.com/stream/3/57/A4TeXKqDVm8xxQ9siXOlVWm2GLY3YhGnuE6/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-dumb-money-2023-lk21-d21.jpg",Dumb Money (2023)
https://ss337.junauak.com/stream/B/B5/u65LzuBfmHx6vlhpSiIblIeLWZ8Qi1FBr1E/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-minda-lalari-2023-lk21-d21.jpg",Minda Lalari (2023)
https://ss283.technunz.com/stream/2/92/fRncjgpoZwLqXILQnrfJN5PWjWdnwQYKtSk/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-hurricane-season-2023-lk21-d21.jpg",Hurricane Season (2023)
https://ss349.jamsiu.com/stream/9/DC/ipOtU8OOlcJlDWAjsTUsA5WRv0I5IX0Hpyy/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-vendetta-road-2023-lk21-d21.jpg",Vendetta Road (2023)
https://ss319.kataznet.com/stream/C/3B/SegrMe6qH2YIMHQ0A3pbuzCpuXTJo2c4F6c/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/11/film-quiz-lady-2023-lk21-d21.jpg",Quiz Lady (2023)
https://ss319.kataznet.com/stream/E/A5/4FcRkaWFFYyOs1iErECdK9POaDVcFYjjHds/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-ransomed-2023-lk21-d21.jpg",Ransomed (2023)
https://ss283.technunz.com/stream/B/B1/T8tsVJMYpie9xRtwDWWYeSbjtqFwvPHSdQW/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-dieced-2023-lk21-d21.jpg",Die’ced (2023)
https://ss335.codosto.com/stream/3/23/5rNSePaZZR1Gt69IBhRHCZKFRWkHt5PLpZ6/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-the-killer-2023-lk21-d21.jpg",The Killer (2023)
https://ss309.dominofile.com/stream/0/A1/eR8mwAXjswwUAXYojGla79dr2tSANdR2cK5/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-black-mask-2-city-of-masks-2002-lk21-d21.jpg",Black Mask 2: City of Masks (2002)
https://ss301.tuimuontai.com/stream/9/91/0mR8mIvQr7ZhGVTCjjoveWYK65QZJDglxAl/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/11/film-the-last-rifleman-2023-lk21-d21.jpg",The Last Rifleman (2023)
https://ss184.litvp.com/stream/4/27/upMfYolpOejSN0n1ZBigYsrYt7eGFxNiKRT/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-the-marvels-2023-lk21-d21.jpg",The Marvels (2023)
https://ss355.todaycny.com/stream/5/59/Nk9J1cAQyzW8jQBuWnlpNUB6V7CM422kfdj/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-foe-2023-lk21-d21.jpg",Foe (2023)
https://ss232.youtudown.com/stream/0/29/9YesDvhGM2kV32gl2eJSmtuNwVQjpcODK6V/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-oppenheimer-2023-lk21-d21.jpg",Oppenheimer (2023)
https://ss361.mantechz.com/stream/9/67/1NyRBua3TYG8kYhozTwBQsfpFcCsdYIy1sM/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-aakhri-deal-2013-lk21-d21.jpg",Aakhri Deal (2013)
https://ss296.suprenews.com/stream/B/C9/kFgrE7FSRAt8klNGHiirPDTwBnXyzp5zjTw/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-bts-yet-to-come-in-cinemas-2023-lk21-d21.jpg",BTS: Yet to Come in Cinemas (2023)
https://ss314.monefiles.com/stream/9/9F/RjTH7i9mtsJnSw5tfTSYkqQ90uaosUtOAVO/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/11/film-the-kill-room-2023-lk21-d21.jpg",The Kill Room (2023)
https://ss190.mayssin.com/stream/E/28/awyxBiruy5uaTh9yVJ0SHUqUJSk6x7JGT7i/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-hell-house-llc-origins-the-carmichael-manor-2023-lk21-d21.jpg",Hell House LLC Origins: The Carmichael Manor (2023)
https://ss55.monobep.com/stream/A/05/98ZKctVWBH5pZekEDgY1fXHCYvJLs2k6Onj/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-ashes-of-time-1994-lk21-d21.jpg",Ashes of Time (1994)
https://ss345.mauobzw.com/stream/5/5E/jFKkivEHZBHW1Fgtmgp5hRkb9tKvCd4WSTt/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-tatsama-tadbhava-2023-lk21-d21.jpg",Tatsama Tadbhava (2023)
https://ss321.vibasnet.com/stream/B/E0/W3IV8J6VXREwISfLoQ70mnm1eSkeY7mpa1m/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-are-you-ok-baby-2023-lk21-d21.jpg",Are You Ok Baby? (2023)
https://ss160.handonet.com/stream/4/C1/NMmyeianZXwKUdemzdBruJAnR1GjqEmyVwq/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/11/film-sucking-diesel-1970-lk21-d21.jpg",Sucking Diesel (1970)
https://ss295.techmarkz.com/stream/C/8A/FPXbrQfP6v1mifRuCusvfrjQbtGelpWus5n/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-the-eye-of-silence-2016-lk21-d21.jpg",The Eye of Silence (2016)
https://ss300.hanabake.com/stream/4/C7/2uwhYJAHVG96IjymsST61M0MPTHjt0llXJt/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-6ne-maili-2018-lk21-d21.jpg",6ne Maili (2018)
https://ss337.junauak.com/stream/6/9F/9USba4BWPeSLziuKNF4r9M95v6O0F388nZK/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-bring-her-to-me-2023-lk21-d21.jpg",Bring Her to Me (2023)
https://ss304.filesfarm.com/stream/8/C3/vPAMMEqGwV9mF4MPDxpSrUkPdJReydqwCLO/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/11/film-cyberbunker-the-criminal-underworld-2023-lk21-d21.jpg",Cyberbunker: The Criminal Underworld (2023)
https://ss297.highinews.com/stream/7/38/koXhQfU80krevOdko6C6ANQwLycQoYVOowC/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/09/film-gran-turismo-2023-lk21-d21.jpg",Gran Turismo (2023)
https://ss297.highinews.com/stream/9/B8/i4RuZJOzjZQCqVhi0pSlNc7cBjSFUr2f9Vg/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-la-ruche-2022-lk21-d21.jpg",La ruche (2022)
https://ss317.letsharez.com/stream/8/C4/mpdA80dMu67adRMswZoi0N7N1aqUUokCjbQ/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/11/film-the-case-of-the-four-demon-coffins-2023-lk21-d21.jpg",The Case of the Four Demon Coffins (2023)
https://ss293.sunseacf.com/stream/D/9F/3S7OeUEwEsljOmE6qC9ic2rTJvC56oYGnwj/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-the-nun-ii-2023-lk21-d21.jpg",The Nun II (2023)
https://ss324.tenisound.com/stream/E/AD/Zs8Aofc6bFMrPpl3gaMJ6RR8UV2FdsG7hKD/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-the-equalizer-3-2023-lk21-d21.jpg",The Equalizer 3 (2023)
https://ss332.imgboxs.com/stream/B/47/0jJIFYRfTQ5Ry6IeVnB4ipBDrmrLTN6kIJO/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/05/film-guardians-of-the-galaxy-vol-3-2023-lk21-d21.jpg",Guardians of the Galaxy Vol. 3 (2023)
https://ss244.katetynet.com/stream/9/33/CjCjTUAZkAEpkull3TVXzkBtCtEKlkwo98m/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/09/film-blue-beetle-2023-lk21-d21.jpg",Blue Beetle (2023)
https://ss353.newnuscoxc.com/stream/0/BB/iMK3NKpgoVb6Czp3ynIqj49HgznPO9HSoW1/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-the-elevator-2023-lk21-d21.jpg",The Elevator (2023)
https://ss320.bigbaznet.com/stream/2/F0/vbWuVXPsPgb6Oh2u2yGzUXYoabVX5P89znL/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-hells-coming-for-you-2023-lk21-d21.jpg",Hell’s Coming for You (2023)
https://ss109.eliamu.com/stream/1/9E/ZB0ue3ubi0w90R3Hoixnj4LEe17RCexhb3t/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-lego-marvel-avengers-code-red-2023-lk21-d21.jpg",Lego Marvel Avengers: Code Red (2023)
https://ss09.fupimg.com/stream/0/77/Av2CBFTRmmUFeWOC5JbhPq4g6CYzugk6HX3/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/11/film-vindicta-2023-lk21-d21.jpg",Vindicta (2023)
https://ss190.mayssin.com/stream/7/26/ZjLRyaS3FIY6YZSyA5DACEFYq726STVVowF/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-lunastajat-2022-lk21-d21.jpg",Lunastajat (2022)
https://ss365.thiennq.com/stream/C/DD/9jjEko3fsOnOTBTh3G7QBOhfloGuOTK8uNG/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-18-11-2014-lk21-d21.jpg",18.11 (2014)
https://ss319.kataznet.com/stream/D/95/7MbbLxzFc9KRmnjwXRkd46jQWi1vUWszzjQ/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-nasrani-2007-lk21-d21.jpg",Nasrani (2007)
https://ss34.guronam.com/stream/0/26/D6ira5w8Z0ZojmoNFYaoH6je2A89JhEKaU2/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/11/film-the-subtle-art-of-not-giving-a-fck-2023-lk21-d21.jpg",The Subtle Art of Not Giving a F*ck (2023)
https://ss09.fupimg.com/stream/9/3B/c86IM4y93Ug7lCiyX0UV4gKDHDbqgWpRnSm/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-butchers-crossing-2023-lk21-d21.jpg",Butcher’s Crossing (2023)
https://ss359.sanyno.com/stream/9/91/s3yImMGIvv6YmqJJepSzHk0lDsiutqD388i/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-chandramukhi-2-2023-lk21-d21.jpg",Chandramukhi 2 (2023)
https://ss314.monefiles.com/stream/2/8B/j6avEvJUaQFeqkqkhY58LaQz6tztzL1MOZK/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/11/film-do-you-love-me-2023-lk21-d21.jpg",Do You Love Me? (2023)
https://ss349.jamsiu.com/stream/0/B6/DZQ2WGJYzZoWlLZ21Tu1EB2mUnYfc3ylom7/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-my-worst-neighbor-2023-lk21-d21.jpg",My Worst Neighbor (2023)
https://ss316.magizfile.com/stream/F/85/mT9Sa9HiAdTjqTlkmYd7gH1gnpGGEQ318Z5/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-deep-fear-2023-lk21-d21.jpg",Deep Fear (2023)
https://ss310.gigafilez.com/stream/D/2B/9WIdKaoNyzb1sR2nDc1DSxQABVYQ6OKSxe5/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-yaaro-2023-lk21-d21.jpg",Yaaro (2023)
https://ss311.gigazfile.com/stream/B/B7/nq5acaU3B9TKIT9sGapDxp79DMrYiDrvlCN/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-ang-manananggal-na-nahahati-ang-puso-2021-lk21-d21.jpg",Ang manananggal na nahahati ang puso (2021)
https://ss288.quenedi.com/stream/7/55/1a0q7c03UdGICSXTGwP3F5PHMQAXYNTSi28/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/11/film-pebbles-2021-lk21-d21.jpg",Pebbles (2021)
https://ss09.fupimg.com/stream/3/2C/DadhN5ekhjRouqqy7lI478HXXzGrVnrE0S5/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-jawan-2023-lk21-d21.jpg",Jawan (2023)
https://ss362.tinusoud.com/stream/2/98/PNERiulsGWvB1uXBIKY4LS6auq8JbBIlvCc/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-mercy-road-2023-lk21-d21.jpg",Mercy Road (2023)
https://ss289.nihaony.com/stream/1/95/56Q2iyD17i3ItZOdz8MxXwY0ItEhmA28Pcv/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-three-extremes-2004-lk21-d21.jpg",Three… Extremes (2004)
https://ss55.monobep.com/stream/0/5E/xerTU7RXfMxecNSyz06V8sj8hM1JBWDa34x/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/02/film-the-point-men-2023-lk21-d21.jpg",The Point Men (2023)
https://ss285.vibanes.com/stream/A/47/L3VxGzxThEdrk1tGRbVAZclHb2plcSnm5gI/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-haddi-2023-lk21-d21.jpg",Haddi (2023)
https://ss09.fupimg.com/stream/9/9F/k415SyO4plF1CMAwh3kyfe9vLA10YMoDoyd/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-mujrim-1989-lk21-d21.jpg",Mujrim (1989)
https://ss306.montfile.com/stream/2/12/Jzu35qdxb19C4UfrHJsTKnithURr1ndvM9p/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/11/film-a-light-never-goes-out-2023-lk21-d21.jpg",A Light Never Goes Out (2023)
https://ss316.magizfile.com/stream/B/D7/5tVKeGVSuuZBHakv5nz6mg2B9Yz4a67y0Ex/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-the-y-2023-lk21-d21.jpg",The Y (2023)
https://ss324.tenisound.com/stream/0/94/l2q91OeY63Il9F3TFQndepbJPVmhOJM81Hh/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-matti-katha-2023-lk21-d21.jpg",Matti Katha (2023)
https://ss287.vitunews.com/stream/E/CD/WpRCQ3K1T4dkvvcsKdHcdLHhRe4hG5ljNGP/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-red-sandal-wood-2023-lk21-d21.jpg",Red Sandal Wood (2023)
https://ss364.filesbus.com/stream/4/A1/ijXHtvhNOqJC7YYaMlVVBNkCiMOpGtqQzcj/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-case-30-2023-lk21-d21.jpg",Case 30 (2023)
https://ss348.shinauon.com/stream/9/26/SOo6aqljuyKNCLmpQf9PFdp51uYLsgXezmn/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/11/film-metronom-2022-lk21-d21.jpg",Metronom (2022)
https://ss344.croissanty.com/stream/C/B9/3X54vpJx4IuE5205qWRoW2ciuQO2ojuMHoT/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/11/film-a-murder-erased-2022-lk21-d21.jpg",A Murder Erased (2022)
https://ss316.magizfile.com/stream/7/3A/EMib9noD9ALO3TOShY19mUU9AYVaSUHN1Jt/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-quan-dao-the-journey-of-a-boxer-2020-lk21-d21.jpg",Quan Dao: The Journey of a Boxer (2020)
https://ss43.paristitu.com/stream/8/C9/MW78L54QVddh8ozGfUGiqd7NnMBJCVHL6cO/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/11/film-in-the-shadows-2023-lk21-d21.jpg",In the Shadows (2023)
https://ss344.croissanty.com/stream/D/02/PK57ZPUPmx9nHq77Z9gRtG8chu4f3F6UXO7/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/09/film-retribution-2023-lk21-d21.jpg",Retribution (2023)
https://ss190.mayssin.com/stream/C/F4/Op4RKqtFlzh6M2LQtlaOmToeKAo4XaV197x/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-the-retirement-plan-2023-2-lk21-d21.jpg",The Retirement Plan (2023)
https://ss304.filesfarm.com/stream/2/F3/6AJKcZ4Cm51WhQNwZTDzcscJK7U1mZkniEw/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-wingwomen-2023-lk21-d21.jpg",Wingwomen (2023)
https://ss285.vibanes.com/stream/6/75/aUGdP2Xo4OW43033qSvbRMOvf8GQrknHxaa/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/11/film-locked-in-2023-lk21-d21.jpg",Locked In (2023)
https://ss286.vibanews.com/stream/1/08/tcXRNOaEJCJKhVRDxAhHRpbOgCa5WkxTV0x/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/11/film-birthright-outlaw-2023-lk21-d21.jpg",Birthright Outlaw (2023)
https://ss334.macquen.com/stream/6/06/lgv593LOV5ER27KegMEL6nqJK3uY7CxR2uI/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/11/film-the-ship-show-2023-lk21-d21.jpg",The Ship Show (2023)
https://ss190.mayssin.com/stream/A/AF/5aMURFzMCBILP1d6sPenxxPqZIvcGQAY6L1/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/11/film-still-human-2018-lk21-d21.jpg",Still Human (2018)
https://ss326.tylenews.com/stream/E/B3/hgZqwiIjPymuZlzEca90s2QKvwtf6iulwJa/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-oracle-2023-lk21-d21.jpg",Oracle (2023)
https://ss42.snapwu.com/stream/1/3E/SSud9eXFtpjOwMBZFWDxGauFC163FMySZRP/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/11/film-oracle-2023-lk21-d21.jpg",Oracle (2023)
https://ss42.snapwu.com/stream/1/3E/SSud9eXFtpjOwMBZFWDxGauFC163FMySZRP/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/11/film-a-haunting-in-venice-2023-lk21-d21.jpg",A Haunting in Venice (2023)
https://ss153.netmang.com/stream/E/34/elViDxtW3KT9Gyg8YyoqGy3Zz7ei1yX3gFs/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/11/film-dust-and-ashes-2022-lk21-d21.jpg",Dust and Ashes (2022)
https://ss351.gomuany.com/stream/E/63/KBUaMO1mc2t5wgNf3ise1ad9XUfViKitS3L/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/09/film-king-of-killers-2023-lk21-d21.jpg",King of Killers (2023)
https://ss349.jamsiu.com/stream/5/27/Cx61S4xRPwsh9NiYO6EAWufdLAAiRo45eNU/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-sick-girl-2023-lk21-d21.jpg",Sick Girl (2023)
https://ss324.tenisound.com/stream/E/89/CxkJfiqDlbxx2aiaELEWd2uIPMAP0P8qcbF/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-when-evil-lurks-2023-lk21-d21.jpg",When Evil Lurks (2023)
https://ss306.montfile.com/stream/4/B2/figqWAz0oqwYvyzKy582SSGdqZqDuO7q7Az/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-hell-of-the-screaming-undead-2023-lk21-d21.jpg",Hell of the Screaming Undead (2023)
https://ss285.vibanes.com/stream/0/F0/FO7sVrlqX4awIhnfzTLwnQI3DQj7dxqNXAP/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-boudica-queen-of-war-2023-lk21-d21.jpg",Boudica: Queen of War (2023)
https://ss290.valybay.com/stream/A/CF/cQ1PupwrwPCDsjTYboqQFyDh0pGfmaHQHeA/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/10/film-the-abode-2023-lk21-d21.jpg",The Abode (2023)
https://ss315.filebagz.com/stream/3/D3/onmKKVPp2m97jb7fDNZvmdcXE8AsiiIDopJ/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-fog-city-2023-lk21-d21.jpg",Fog City (2023)
https://ss81.thibogu.com/stream/7/D8/BYdOEKfMKLB2sTJ8J3iFdIKCXGcUTpXUNpc/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-grand-guignol-2022-lk21-d21.jpg",Grand Guignol (2022)
https://ss26.bakernay.com/stream/0/05/Py05x4IdsXX2jUw49QebNEQJLgumHFNf0yi/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-into-the-abyss-2023-lk21-d21.jpg",Into the Abyss (2023)
https://ss299.flyzbox.com/stream/0/1A/RPL0xaJESeJ5sHEF6CqP3ZB98jblzfbC0hP/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-five-nights-at-freddys-2023-lk21-d21.jpg",Five Nights at Freddy’s (2023)
https://ss347.sofarfile.com/stream/B/F6/Sx2Qc2I894PBFBlBuPZ7myeq2cfRqHaCgwd/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-appendage-2023-lk21-d21.jpg",Appendage (2023)
https://ss348.shinauon.com/stream/3/B4/3zoZW2O8kNZeMrJJw4edC693W7wywGpe1ff/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-yellow-door-90s-lo-fi-film-club-2023-lk21-d21.jpg",Yellow Door: ’90s Lo-fi Film Club (2023)
https://ss360.saoponew.com/stream/5/82/5Zj3mzBIpyt4PCr8F3GorA3UI6lNNMmXZ5R/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-sister-death-2023-lk21-d21.jpg",Sister Death (2023)
https://ss319.kataznet.com/stream/1/3A/2Y9HMdlw4knsYAkVddoiYvkxolXQXotWtsd/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-pain-hustlers-2023-lk21-d21.jpg",Pain Hustlers (2023)
https://ss343.squaresfile.com/stream/B/31/YuMDLs3FYXPT5HlQR7SRFLWCbTsbnnOQGm6/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-the-bad-seed-returns-2022-lk21-d21.jpg",The Bad Seed Returns (2022)
https://ss322.mundiiz.com/stream/4/C7/Q1E2wCCZ3V7lXjfEsy2IbPFjzWIH7KMBVr9/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-my-year-of-dicks-2023-lk21-d21.jpg",My Year of Dicks (2023)
https://ss363.trendyfile.com/stream/D/F5/kBonk6iLUCBdP3ZkJJSUvVSspYGArfQuir3/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-dangerous-waters-2023-lk21-d21.jpg",Dangerous Waters (2023)
https://ss362.tinusoud.com/stream/0/67/rubJHeOdQDaL41Kx8AlY9lKTDkjbQZqDgVQ/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-onefour-against-all-odds-2023-lk21-d21.jpg",OneFour: Against All Odds (2023)
https://ss295.techmarkz.com/stream/8/C0/3ZEFWxS5TzEmi0Pdy70UevkzyYnAn5oCbW5/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-long-live-love-2023-lk21-d21.jpg",Long Live Love! (2023)
https://ss308.extrafilez.com/stream/A/DF/ldR1TdsTVXBlXDV87Z9CJIipqYufzdsXnJz/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-the-cheating-game-2023-lk21-d21.jpg",The Cheating Game (2023)
https://ss317.letsharez.com/stream/9/99/cj6McAE2rkc6fKnx0yY0R7LnpmKLHYLP4G8/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/10/film-the-royal-hotel-2023-lk21-d21.jpg",The Royal Hotel (2023)
https://ss153.netmang.com/stream/1/73/KqErMLASfbWCRfBRKwygqykZfuF2Ubo9y8I/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/10/film-doraemon-the-movie-nobitas-sky-utopia-2023-lk21-d21.jpg",Doraemon the Movie: Nobita’s Sky Utopia (2023)
https://ss362.tinusoud.com/stream/D/8B/vndxhJz8mGBcqcxmIUx9hHbQDj0oOpc1FU7/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-shrapnel-2023-lk21-d21.jpg",Shrapnel (2023)
https://ss319.kataznet.com/stream/7/76/VXbfj6aX38WFltrvT6p1JmgJAOsTGQXbyva/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-the-after-2023-lk21-d21.jpg",The After (2023)
https://ss321.vibasnet.com/stream/F/75/gPwwEgVy8aXMkFYo0rAuCO36q1c8Mna6BV0/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-what-the-waters-left-behind-scars-2023-lk21-d21.jpg",What the Waters Left Behind: Scars (2023)
https://ss318.hugozfile.com/stream/B/22/T9vyVfVUtS0N10pG9emRuorxezGKyoDqe6h/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-the-exorcist-believer-2023-lk21-d21-1.jpg",The Exorcist: Believer (2023)
https://ss312.tiurnews.com/stream/7/D4/lwangVYryLdIMbd2sU69W1TgdNxNamFWRaB/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-kaddha-chitra-lk21-d21.jpg",Kaddha Chitra (2023)
https://ss318.hugozfile.com/stream/1/95/yd3IXOk0PSRK8tOwGK72pROGfAxI4ReScT0/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-if-you-were-the-last-2023-lk21-d21.jpg",If You Were the Last (2023)
https://ss328.techsalar.com/stream/A/E3/qaXN8CFI9zldRshb7oXn8RKHz7Cm8zUep3j/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-mortal-kombat-legends-cage-match-2023-lk21-d21.jpg",Mortal Kombat Legends: Cage Match (2023)
https://ss319.kataznet.com/stream/6/68/s9XVhoRSxRk5zsggjGdGf6iXvyZYgPZka8u/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-mistake-2023-lk21-d21.jpg",Mistake (2023)
https://ss344.croissanty.com/stream/6/9A/vmjEu0R2J93AVNDDS4Kcrs8lbojAtkLx4RU/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-the-crusade-2021-lk21-d21.jpg",The Crusade (2021)
https://ss288.quenedi.com/stream/A/C5/sqZKlrG7oNdxAFNGUODSPo8LlFHvShxWuuD/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-mia-and-the-dragon-princess-2023-lk21-d21.jpg",Mia and the Dragon Princess (2023)
https://ss283.technunz.com/stream/B/3D/QmpRYkoqtPHiZymkaftC0f3xJNGwV0CSTSr/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-happy-halloween-scooby-doo-2020-lk21-d21.jpg",Happy Halloween, Scooby-Doo! (2020)
https://ss279.abcnowz.com/stream/8/59/9cs9dvd4WnZTRcRDVJrFudVUMgzwHWXg7wk/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-trick-or-treat-scooby-doo-2022-lk21-d21.jpg",Trick or Treat Scooby-Doo! (2022)
https://ss315.filebagz.com/stream/F/74/iQsEuNzGKdkeyzPNNsyhwEIb4bhrEA2y10l/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-mat-tudung-begin-2023-lk21-d21.jpg",Mat Tudung Begin (2023)
https://ss300.hanabake.com/stream/9/20/1IE9xxnDGsxiOPCrfJ7km3J5KxfuaUseEG9/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-the-legend-of-drona-2008-lk21-d21.jpg",The Legend of Drona (2008)
https://ss280.abcnewza.com/stream/1/A4/QY0F7DbtFpR3ToN5koBPNiPRHIydGnYGCf1/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/08/film-meg-2-the-trench-2023-lk21-d21.jpg",Meg 2: The Trench (2023)
https://ss34.guronam.com/stream/A/02/iFnhMOtSw7SVW3qSyE8SWnmAPh4ZRGGzjyQ/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-the-closed-door-2014-lk21-d21.jpg",The Closed Door (2014)
https://ss353.newnuscoxc.com/stream/6/6D/ZnI5fp2acuUpOTreTqAqiCl3FtTAbQ1zA1K/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-two-wrongs-make-a-right-2017-lk21-d21.jpg",Two Wrongs Make a Right (2017)
https://ss363.trendyfile.com/stream/E/E8/Zc1dbWpujOqQ4iaRAWrvUriIoBOABvLrH7s/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-one-second-2020-lk21-d21.jpg",One Second (2020)
https://ss288.quenedi.com/stream/D/82/enrEN3xpiasKFLGY0xEyBmjUzlFe6ijMjcu/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/06/film-the-black-demon-2023-lk21-d21.jpg",The Black Demon (2023)
https://ss159.guzinet.com/stream/4/40/1ZH15lJxHPUdBmJt3MSPZGlgivvZ6vXmLpZ/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-colors-1988-lk21-d21.jpg",Colors (1988)
https://ss305.filezfarm.com/stream/F/51/EKEwykVlJMKZrqdk1h1ppHdSv4l0hwwqDxH/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-only-cloud-knows-2019-lk21-d21.jpg",Only Cloud Knows (2019)
https://ss359.sanyno.com/stream/3/53/R96q5pr93JFfzDqqEoCO4D40GNde84ilGjo/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2017/04/film-butter-2011.jpg",Butter (2011)
https://ss293.sunseacf.com/stream/E/A6/ulnADZnMMdvdGQcO5qsAM3OIFwMmMexWqku/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-follow-her-2022-lk21-d21.jpg",Follow Her (2022)
https://ss34.guronam.com/stream/2/B1/eQs0xycEcslTgOc0jppfeoIkHLHQGUdK6Ue/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-cocaine-cougar-2023-lk21-d21.jpg",Cocaine Cougar (2023)
https://ss279.abcnowz.com/stream/5/D4/M1rKUZRfqP95EqmxyZYdO7Xb0a9Jp8QuYop/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-machis-ki-dibiya-2020-lk21-d21.jpg",Machis ki Dibiya (2020)
https://ss40.subwte.com/stream/3/2E/4Z03sRnLkwXdcvSMkV3HpLZso6Eq6tF53mg/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-penanggal-mak-kiah-2023-lk21-d21.jpg",Penanggal Mak Kiah (2023)
https://ss279.abcnowz.com/stream/3/54/yeZQdhAByHb6hY6Ylzh4E8nCOetYXuAaXHt/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-my-shining-revenge-2023-lk21-d21.jpg",My Shining Revenge (2023)
https://ss333.gomutrain.com/stream/F/08/BySwxLDfEigbUp3gjO2TVx8zkkxkLncennz/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-the-united-states-of-horror-chapter-2-2022-lk21-d21.jpg",The United States of Horror: Chapter 2 (2022)
https://ss344.croissanty.com/stream/D/C1/ZaTcJJ6WfdJcqpfM0m5orCZ4Uc1upC1txfK/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-three-blind-mice-2023-lk21-d21.jpg",Three Blind Mice (2023)
https://ss271.themoneet.com/stream/F/A2/JDGgQgUEl2zdPlqoFXjJR1562LgWfcRPnny/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-french-blood-3-mr-frog-2020-lk21-d21.jpg",French Blood 3 – Mr. Frog (2020)
https://ss184.litvp.com/stream/F/9A/tosVaD4leXrvBGcvmwQjTnBUJBq0aMpdGPy/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-night-of-the-hunted-2023-lk21-d21.jpg",Night of the Hunted (2023)
https://ss34.guronam.com/stream/F/C6/fMlsoXxsMvWXmhFvep8CGyRawLiZoXcgpK8/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-disco-inferno-2023-lk21-d21.jpg",Disco Inferno (2023)
https://ss315.filebagz.com/stream/8/C4/ynH6RJ2FoEo2myRNh7488q7FFlpNrm2Fm49/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-flashback-2023-lk21-d21.jpg",Flashback (2023)
https://ss299.flyzbox.com/stream/9/F4/PxPPvsHgRlh2Sx3IZbODyq3Sw2Zn1iWotP2/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-old-dads-2023-lk21-d21.jpg",Old Dads (2023)
https://ss286.vibanews.com/stream/D/2C/bNOvwNEkRBCmyV8PXoC1sjC75dJ5IKY4qtK/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/10/film-kandasamys-the-baby-2023-lk21-d21.jpg",Kandasamys: The Baby (2023)
https://ss104.muniade.com/stream/2/59/M4cVQwAXS2bPXYpJFyjEIbniedAFl0ZUfxi/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-the-other-zoey-2023-lk21-d21.jpg",The Other Zoey (2023)
https://ss302.uptosharez.com/stream/7/86/ne7UShUxpxADBaXUkBXKpPukkwELiVw8gvZ/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-silver-dollar-road-2023-lk21-d21.jpg",Silver Dollar Road (2023)
https://ss40.subwte.com/stream/5/87/SDTOOqCnmQpKk1ZS3MO12ljcmDC3rv9oaaS/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/10/film-kushi-2023-lk21-d21.jpg",Kushi (2023)
https://ss286.vibanews.com/stream/1/DD/XelQImBGCakC28hrhguArEOntNyxpSlkk4G/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/08/film-the-last-voyage-of-the-demeter-2023-lk21-d21.jpg",The Last Voyage of the Demeter (2023)
https://ss344.croissanty.com/stream/1/92/s5t0HZRLXeXO87W8OnNdp9XFMOVQ0YVVj9E/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/10/film-15-cameras-2023-lk21-d21.jpg",15 Cameras (2023)
https://ss295.techmarkz.com/stream/2/2E/iarIUYs7WAz5fWAE38xmzNxTDQ2tzdbI0JD/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-they-wait-in-the-dark-2022-lk21-d21.jpg",They Wait in the Dark (2022)
https://ss300.hanabake.com/stream/B/30/dRBoTXFhNdtyfvd1sUCK9p7hWHgX3GGzddx/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-red-white-brass-2023-lk21-d21.jpg",Red, White & Brass (2023)
https://ss362.tinusoud.com/stream/B/E6/ot3bCwe8pngQMTyoTnaq5EUlWecCKEuC9uR/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-exile-2023-lk21-d21.jpg",Exile (2023)
https://ss161.netbilu.com/stream/D/CA/5SWNwKjPcVdLfKCOUBJ1KirrkIvTu36SQfc/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-the-devil-on-trial-2023-lk21-d21.jpg",The Devil on Trial (2023)
https://ss55.monobep.com/stream/0/F8/91LIo8KlcpgicNhs1W178cq3YQHCacCcTEY/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/10/film-strays-2023-lk21-d21.jpg",Strays (2023)
https://ss310.gigafilez.com/stream/F/1B/VlZ4Ni0AwmYsZxgLeIayIps6NvZEaYgPwb3/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-feed-2022-lk21-d21.jpg",Feed (2022)
https://ss293.sunseacf.com/stream/9/C8/d1nnZzQ8c67LDLHqGt8KG84cCQzUJjVPPZi/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-feed-2022-lk21-d21.jpg",Feed (2022)
https://ss293.sunseacf.com/stream/9/C8/d1nnZzQ8c67LDLHqGt8KG84cCQzUJjVPPZi/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-herd-2023-lk21-d21.jpg",Herd (2023)
https://ss329.sunsitech.com/stream/3/9A/97swtaNJfNu23imXlComVdGTclrtJca2Bch/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-outpost-2023-lk21-d21.jpg",Outpost (2023)
https://ss290.valybay.com/stream/F/61/vQ02gYHX1tIrjRMiRlvA6Bjcr44wy9du4ps/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-dear-david-2023-lk21-d21.jpg",Dear David (2023)
https://ss310.gigafilez.com/stream/8/9F/FPPHJUZKIncGMbbxm2C0Pc4pJXpZrHBB8IK/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/10/film-portraits-from-a-fire-2021-lk21-d21.jpg",Portraits from a Fire (2021)
https://ss353.newnuscoxc.com/stream/E/20/KalTk40RYVzZokYGvWAB2RKPmiMJcHesU3n/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-tailor-2020-lk21-d21.jpg",Tailor (2020)
https://ss314.monefiles.com/stream/D/22/t3wweLlRZt5iKVojqlApRf7R0kR0yo20Zgx/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-digital-village-2023-lk21-d21.jpg",Digital Village (2023)
https://ss315.filebagz.com/stream/F/9A/HjViuaRC4W9xV5NFdmg7hGJcrUxhZmsV0Bm/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-the-great-indian-suicide-2023-lk21-d21.jpg",The Great Indian Suicide (2023)
https://ss293.sunseacf.com/stream/5/F7/0asgI16wzPjkhlIFetsE2oG1ikG76XgRKCG/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-ab-tak-chhappan-2004-lk21-d21.jpg",Ab Tak Chhappan (2004)
https://ss362.tinusoud.com/stream/7/6B/Wyax2stZmFatBjVm4kTdKnyqucNuJqSFUrE/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-mary-cherry-chua-2023-lk21-d21.jpg",Mary Cherry Chua (2023)
https://ss314.monefiles.com/stream/C/C3/yA2Fu1sWLEIEykxalYWbveJlDn6bcEjGkR9/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-tufang-2023-lk21-d21.jpg",Tufang (2023)
https://ss351.gomuany.com/stream/1/B3/4qnlFkrEHtD66EASB6k9N349xwhENYo9RID/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-king-of-kotha-2023-lk21-d21.jpg",King of Kotha (2023)
https://ss289.nihaony.com/stream/2/A7/sbV5aYo8vKLBFFvejbqOa4Ls1wBfJezO0jA/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-scarygirl-2023-lk21-d21.jpg",Scarygirl (2023)
https://ss346.skyofile.com/stream/9/F5/pU22zsGAN0PlfhoEgYRdu2ckKJr3pzpCfMZ/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-hong-kong-family-2022-lk21-d21.jpg",Hong Kong Family (2022)
https://ss328.techsalar.com/stream/C/81/llrP5QaFUQzgRu3k1w7tJmLWCB23ReV6ZZe/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/10/film-dil-ne-jise-apna-kaha-2004-lk21-d21.jpg",Dil Ne Jise Apna Kaha (2004)
https://ss285.vibanes.com/stream/D/BD/UOrImTdtH7EhHCxFESy9FMKbnZ9o5U1W7bC/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-3g-a-killer-connection-2013-lk21-d21.jpg",3G: A Killer Connection (2013)
https://ss335.codosto.com/stream/D/DF/1yylrnzvnerD3hZ9uj9n5UYgZOI8u5sYKl6/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-in-the-fire-2023-lk21-d21.jpg",In the Fire (2023)
https://ss24.titkiand.com/stream/F/7B/X8MzHT5meydVOug7xOM2K5eyypUbWwMuGuH/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/08/film-apaches-2023-lk21-d21.jpg",Apaches (2023)
https://ss40.subwte.com/stream/7/C0/sz1SVLWi6YyU8UafCuVmm5z3Fx2bsu7HBsj/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-pink-moon-2022-lk21-d21.jpg",Pink Moon (2022)
https://ss22.cudebo.com/stream/1/E1/OMNQe9bs7k22UJ7LPQ2svCl6GzDgFv6CqPc/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-camp-courage-2023-lk21-d21.jpg",Camp Courage (2023)
https://ss317.letsharez.com/stream/6/31/lEaztmJIYVUJ5fMMZIcpwfTz5fqzwGfzpry/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-the-puppetman-2023-lk21-d21.jpg",The Puppetman (2023)
https://ss82.filezpark.com/stream/8/EE/KdjJnoJAlY7afzzuuUXyDvsNoYvX42y7YnB/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-cube-hypercube-2002-lk21-d21.jpg",Cube: Hypercube (2002)
https://ss100.nolashare.com/stream/A/CD/JrQnVoqtebXwrYrcpSIhTyefYizvPQV1rVe/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-v-h-s-85-2023-lk21-d21.jpg",V/H/S/85 (2023)
https://ss86.salafile.com/stream/7/34/4pPaWROFfLPPdRxbR7gRspYx0gDW4kDSckX/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2016/06/film-new-sassy-girl-2016.jpg",My New Sassy Girl (Yeob-gi-jeok-in geu-nyeo 2) (2016)
https://ss280.abcnewza.com/stream/F/3D/9atba3cKCeP5ohHAou5Q6ZjFy26H8jXmw1q/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-ijogbon-2023-lk21-d21.jpg",Ijogbon (2023)
https://ss242.sunionet.com/stream/7/48/vkH87Hb1PL72d7jwvkCuI8hsEYGt9EQeSW7/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-the-conference-2023-lk21-d21.jpg",The Conference (2023)
https://ss306.montfile.com/stream/9/32/5yyQu0jPolp9UnTQn8Vubp018z1nktZ5Zpw/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/06/film-transformers-rise-of-the-beasts-2023-lk21-d21.jpg",Transformers: Rise of the Beasts (2023)
https://ss83.ahotnews.com/stream/D/C5/NnKOtaBEHBHH6sv1puD3SScuxcfvNSPN6cJ/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-elevator-game-2023-lk21-d21.jpg",Elevator Game (2023)
https://ss161.netbilu.com/stream/1/A7/XvRMKTpa0P49JNKydXu0NehbCX7DSFRU8fr/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-angela-2023-lk21-d21.jpg",Angela (2023)
https://ss39.uptshare.com/stream/D/B9/MVTewOuaGPVmJqLCyku7XgV26P17KBRmC1j/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-the-burial-2023-lk21-d21.jpg",The Burial (2023)
https://ss35.coopfilez.com/stream/0/DB/rGN3eBjItbe6pkiESGqIwbDdQguDL9IKME3/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-dark-harvest-2023-lk21-d21.jpg",Dark Harvest (2023)
https://ss322.mundiiz.com/stream/9/8E/Ku0QVpRZq4eGdgttbArMXXPyW7uSPxP21Uf/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-hider-in-my-house-2022-lk21-d21.jpg",Hider in My House (2022)
https://ss320.bigbaznet.com/stream/8/32/xvr7nZO8If7qDhE2DF28MlurZgxZt9Oadlz/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-the-astral-woods-2023-lk21-d21.jpg",The Astral Woods (2023)
https://ss81.thibogu.com/stream/D/89/RecMYXMbcvZyKK9euUOz7oas6do3zUjiQiu/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-irati-2023-lk21-d21.jpg",Irati (2023)
https://ss320.bigbaznet.com/stream/C/E8/jg6AfIfbqdTDvq38YSCB7kvXPE5eQkqKeNq/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-the-sound-of-summer-2022-lk21-d21.jpg",The Sound of Summer (2022)
https://ss334.macquen.com/stream/6/99/Yd8LUl9nypzpWo4J24IKCgBwYDuCLEIVuoL/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-a-southern-haunting-2023-lk21-d21.jpg",A Southern Haunting (2023)
https://ss331.techwodo.con/stream/5/22/ynFCeuC07DxPrUwEJ2VCHnATZM7F7UdY57g/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-once-upon-a-star-2023-lk21-d21.jpg",Once Upon a Star (2023)
https://ss104.muniade.com/stream/5/AD/VdIHzIQJMRTRuloBSwVfs9PklCgqQwDtPeD/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-it-lives-inside-2023-lk21-d21.jpg",It Lives Inside (2023)
https://ss319.kataznet.com/stream/F/C9/wJeDTq0ucKgkW0XU7iQiVkKefhxznUKMIXm/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-awareness-2023-lk21-d21.jpg",Awareness (2023)
https://ss330.eztshare.com/stream/0/87/AEMRelJDCKo3nuapC027DDZ8HJydNvtgW42/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-the-jester-2023-lk21-d21.jpg",The Jester (2023)
https://ss312.tiurnews.com/stream/5/10/GFvbV8IWwOuCWkCzwSPl0gdPkqL2xhwBnk8/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/07/film-mission-impossible-dead-reckoning-part-one-2023-lk21-d21.jpg",Mission: Impossible – Dead Reckoning Part One (2023)
https://ss37.flatboxs.com/stream/F/0D/vROnU58UjshS9DWPoxGg456IUGqnBCiVPd3/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-desperation-road-2023-lk21-d21.jpg",Desperation Road (2023)
https://ss304.filesfarm.com/stream/1/16/GfqL0LFxYz9F1FHrubNEXOIXnx5YT1HrXcN/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2017/01/film-action-jackson-1988.jpg",Action Jackson (1988)
https://ss346.skyofile.com/stream/9/C1/cdHNYbNO4Ps658npbMUFstibkKLdqfnwnxl/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/02/film-delete-history-2020-lk21-d21.jpg",Delete History (2020)
https://ss346.skyofile.com/stream/A/4D/sRm33NBz0KWdLjMoLoL1Hm9635zky9AGkss/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-special-agent-2020-lk21-d21.jpg",Special Agent (2020)
https://ss362.tinusoud.com/stream/5/77/1T5FHWSHqTOHrYHqc3yxJsQqmQaReTc9ta7/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-baang-2023-lk21-d21.jpg",Baang (2023)
https://ss318.hugozfile.com/stream/C/53/6p5eTlNEMiOOa56pOtrSnedzgeIUkvGnJbA/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s7.lk21static.xyz/wp-content/uploads/2023/10/film-orca-2023-lk21-d21.jpg",Orca (2023)
https://ss359.sanyno.com/stream/F/BF/E6HGmDI5yzMCXe9qANVcFYCskViKylmdaLW/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-gadar-2-2023-lk21-d21.jpg",Gadar 2 (2023)
https://ss359.sanyno.com/stream/0/B4/w27wIrRBevsfb6Q7sOOoMzOsQlpp8yPoiwi/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-final-summer-2022-lk21-d21.jpg",Final Summer (2022)
https://ss360.saoponew.com/stream/0/E2/0M4EN2BTB8B1KNK0RQqbCArAqjW3MjNA9rm/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-archana-31-not-out-2022-lk21-d21.jpg",Archana 31 Not Out (2022)
https://ss333.gomutrain.com/stream/A/82/knvPRUcHRQCW0bOpfeqpJuKRo7rYXAU03u2/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-1943-2023-lk21-d21.jpg",1943 (2023)
https://ss253.kinuenet.com/stream/2/50/Eg3rzEpzNHDeqk6lO5nLICdpEyLySthdaq4/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-omg-2-2023-lk21-d21.jpg",OMG 2 (2023)
https://ss350.maybtuon.com/stream/6/CC/wkqFzfSH90iINZmo4PcaEuvcqtGVnQ9aRrV/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-khufiya-2023-lk21-d21.jpg",Khufiya (2023)
https://ss352.ructop.com/stream/0/DD/0grN8UPk9BtpR2jrPgWkBOqMHZgNYmTh9EW/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/10/film-the-janes-2022-lk21-d21.jpg",The Janes (2022)
https://ss21.dimuga.com/stream/D/42/PKyyRV9Vq9HURakahNgC9Dc1gv65TVUo1t7/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-pet-sematary-bloodlines-2023-lk21-d21.jpg",Pet Sematary: Bloodlines (2023)
https://ss344.croissanty.com/stream/C/F3/yjnTpWlN6XFYUj9CosJXvLKn7Gw0tYVxIZS/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s5.lk21static.xyz/wp-content/uploads/2023/09/film-dont-look-away-2023-lk21-d21.jpg",Don’t Look Away (2023)
https://ss55.monobep.com/stream/4/29/qFhLuas7sXruin0UIvP7lBWvbfQtLntnsNa/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s3.lk21static.xyz/wp-content/uploads/2023/10/film-secret-lives-of-housewives-2022-lk21-d21.jpg",Secret Lives of Housewives (2022)
https://ss360.saoponew.com/stream/B/38/DT2bzmHxTMTfXSVA5G9YZlZxj07X9nQbRUG/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s0.lk21static.xyz/wp-content/uploads/2023/10/film-totally-killer-2023-lk21-d21.jpg",Totally Killer (2023)
https://ss35.coopfilez.com/stream/7/55/BelKRp3qbzyvgQhvNQzHiM24Nl8Qv680tWD/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s2.lk21static.xyz/wp-content/uploads/2023/10/film-ballerina-2023-lk21-d21.jpg",Ballerina (2023)
https://ss41.bendevu.com/stream/C/49/uUs6KZP1evVXB7Sc5MBvbtQ2HTFPNhIxLzK/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s4.lk21static.xyz/wp-content/uploads/2023/10/film-manhole-2023-lk21-d21.jpg",#Manhole (2023)
https://ss79.nowseene.com/stream/B/C0/E9WhuQb1R5xbS8OhYHdInzDQeWiN7isEfdj/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s1.lk21static.xyz/wp-content/uploads/2023/10/film-muzzle-2023-lk21-d21.jpg",Muzzle (2023)
https://ss85.leopafile.com/stream/B/60/CqeTZyFiBNMMQLpcWbP8zKYlhJJ8GtPxgRU/master.m3u8|referer=https://emturbovid.com/ 
#EXTINF:-1 type="FILM" group-title="LK 21" tvg-logo="https://s6.lk21static.xyz/wp-content/uploads/2023/10/film-haunted-mansion-2023-lk21-d21.jpg",Haunted Mansion (2023)
https://ss333.gomutrain.com/stream/7/B2/ybE0sEOSTBlmtSXazjXH9ENGrWiPH3ZoMhr/master.m3u8|referer=https://emturbovid.com/


<style type="text/css">html { padding-top: 26px; } #xt_auth_iframe { position: fixed; top: 0; left: 0; background: transparent; }</style><iframe id="xt_auth_iframe" allowTransparency="true" scrolling="no" frameBorder="0" style="width: 100%; border: 0; height: 26px;" src="https://xtgem.com/__xt_authbar?data=eyJ1cmwiOiJodHRwOlwvXC90dm5pZC53YXBnZW0uY29tXC9hc3dhamEubTN1OCIsImxvZ2dlZF9pbiI6ZmFsc2UsImRvbWFpbiI6InR2bmlkLndhcGdlbS5jb20iLCJwb3NpdGlvbiI6eyJhYnNvbHV0ZSI6ImZpeGVkIn19"></iframe><br /><!----><noscript></noscript><script type="text/javascript"></script><textarea style="display:none;"></textarea><style></style><iframe style="display:none;width:0px;height:0px;border:0"></iframe><noframes></noframes><div id="st1712070481" style="z-index:999999;z-index:999999999;"><span id="a1712070481"><a href="http://xtgem.com/click?p=forums_catalog_web&amp;u=__urlaHR0cDovL3h0Z2VtLmNvbS9mb3J1bXM/YWQ9MQ==&amp;s=tvnid.wapgem.com&amp;t=KhscHR8eGAAFCgIZAgMADg0ODw4LCwl5dA==&amp;_is_adult=No&amp;_ad_pos=Bottom&amp;_ad_format=Plain&amp;_ad_url=dHZuaWQud2FwZ2VtLmNvbS9hc3dhamEubTN1OA==&amp;_ad_networks=&amp;_ad_type=Banner" target="_blank"><img src="http://xtgem.com/images/forum/xtgem-forums.jpg" alt="XtGem Forum catalog"></a></span>        <style type="text/css">
            #st1712070481 *
            {
                box-sizing:content-box !important;
            }

            #st1712070481 a
            {
                display: inline-block !important;
                vertical-align: top;
                padding: 0; margin: 0;
            }

            #st1712070481 a img
            {
                display: inline-block !important;
            }

            #st1712070481 ._xt_ad_close, #st1712070481 ._xt_ad_close_internal
            {
                display: inline-block !important;
                position: absolute !important;
                right: 6px !important;
                width: 20px !important;
                height: 20px !important;
                cursor: pointer;
            }

            #st1712070481 ._xt_ad_close
            {
                top: -10px !important;
            }

            #st1712070481 ._xt_ad_close_internal
            {
                border: 6px solid transparent;
                top: -12px !important;
                right: 3px !important;
            }

            #a1712070481
            {
                display: inline-block !important;
                position: relative !important;
                text-align: left !important;
                visibility: visible !important;
                max-width: 100% !important;
                max-height: none !important;
                z-index:999999 !important;
                z-index:999999999 !important;
            }

            #a1712070481 img
            {
                max-width: none !important;
                max-height: none !important;
                width: auto !important;
                height: auto !important;
                min-width: 0 !important;
                min-height: 0 !important;
            }

            .fba1712070481
            {
                color: #1D1EEB !important;
                background-color: #fff !important;
                padding: 10px 50px 10px 10px !important;
                border: 1px solid #2C2C2C !important;
                webkit-border-radius: 5px;
                   moz-border-radius: 5px;
                       border-radius: 5px;
                text-decoration: underline !important;
                font-weight: bold !important;
                display: block !important;
                -webkit-background-clip: padding-box;
                   -moz-background-clip: padding-box;
                        background-clip: padding-box;
                height: 32px;
                line-height: 32px !important;
                background-image: url(//xtgem.com/images/arrow.gif) !important;
                background-repeat: no-repeat !important;
                background-position: 95% center !important;
            }

            .fbp1712070481
            {
                position: relative !important;
                display: block !important;
                width:320px !important;
                height:50px !important;
                text-align:left !important;
                background-color: #fff !important;
                -moz-box-shadow: 0 0px 5px rgba(0, 0, 0, 0.2);
                -webkit-box-shadow: 0 0px 5px rgba(0, 0, 0, 0.2);
                box-shadow: 0 0px 5px rgba(0, 0, 0, 0.2);
                padding: 3px !important;
                border-radius: 3px !important;
                border: 1px solid #6bc135 !important;
                text-decoration: underline !important;
            }

            .fbp_txt1712070481
            {
                position:relative !important;
                display: inline-block !important;
                min-width: 200px;
                max-width: 200px;
                height:50px !important;
                vertical-align: top !important;
                line-height:50px !important;
                margin-left: 6px !important;
                text-align: left !important;
                color: #0274d4 !important;
                font-family: Helvetica, Arial, sans-serif !important;
                font-size: 13px !important;
                font-weight: bold !important;
                text-decoration: underline !important;
            }

            .fbp_ico1712070481
            {
                position: absolute !important;
                right: 10px !important;
                height: 50px !important;
                line-height: 46px !important;
                vertical-align: top !important;
                color: #6bc135 !important;
            }

            #st1712070481 .rolling_ad { display: none !important; }
            #st1712070481 .rolling_ad.roll_on { display: inline-block !important; }
        </style></div><script type="text/javascript" src="http://xtgem.com/js/page_templates.js"></script><div style="display:none"><script type="text/javascript">
var _qevents = _qevents || [];
(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();
_qevents.push({
qacct:"p-0cfM8Oh7M9bVQ"
});
</script>
<noscript>
<img src="//pixel.quantserve.com/pixel/p-0cfM8Oh7M9bVQ.gif" border="0" height="1" width="1" alt=""/>
</noscript></div><!----><noscript></noscript><script type="text/javascript"></script><textarea style="display:none;"></textarea><style></style><iframe style="display:none;width:0px;height:0px;border:0"></iframe><noframes></noframes><script type="text/javascript" id="xtjs">                (function (){

                    var d, b, ad_pos = false, el_rolling_ads, html, el, el_inner, el_new = '', i = 0;

                    function xt_cache () {
                        d = document;
                        b = d.getElementsByTagName('body')[0];
                        html = d.documentElement;
                        el = d.getElementById( 'st1712070481' );
                        el_inner = d.getElementById( 'a1712070481' );
                        el_rolling_ads = el.getElementsByClassName( 'rolling_ad' );
                    }

                    xt_cache();

                        if ( el.children[ 0 ] !== el_inner && el.children[ 0 ].tagName == "A" ) {

                            for ( i = 1; i < el.children.length; i++ ) {
                                el_new += el.children[i].outerHTML;
                            }

                            el.innerHTML = el_inner.outerHTML.split( '>' )[ 0 ] + '>' + el_new + '</span>';

                            xt_cache();
                        }
                        else if ( el.offsetParent === null ) {
                            b.insertBefore( el, b.firstChild );

                            xt_cache();
                            ad_pos = true;
                        }

                        if (d.getElementById('kosmos-banner')) {
                            ad_pos = true;
                        }

                        el.style.display="block";
                        el.style.textAlign="center";
                        el.style.position="fixed";
                        if ( ad_pos ) { el.style.top=10+"px"; el.style.bottom='auto'; } else { el.style.bottom=10+"px"; }
                        el.style.left="0";
                        el.style.right="0";
                        el.style.height="1px";

                        var el_imgs = el.getElementsByTagName( 'IMG' );
                        for (i=0,len=el_imgs.length; i<len; i++) { el_imgs[i].onload = fix_height; }

                        function fix_height () {
                            el.style.marginBottom = el_inner.offsetHeight+"px";
                            if ( ad_pos ) {
                                html.style.paddingTop = el_inner.offsetHeight+9+"px";
                            } else {
                                html.style.paddingBottom = el_inner.offsetHeight+9+"px";
                            }
                        }

                        setTimeout(function(){fix_height();},200);

                        var closebutton = d.createElement('IMG');
                            closebutton.src = '//xtgem.com/images/close2.png?v=0.01';
                            closebutton.alt = '[x]';
                            closebutton.setAttribute( 'class', '_xt_ad_close' );
                            closebutton.onclick = function () { closebutton.setAttribute( 'style', 'display: none !important' ); el.style.position = 'static';  closebutton.onclick = null; html.style.paddingBottom = '0'; html.style.paddingTop = '0'; if ( d.getElementById('wr1712070481') ) { d.getElementById('wr1712070481').style.bottom = '0'; } };
                            el_inner.appendChild(closebutton);

                        // lets roll ads if needed
                        if ( el_rolling_ads )
                        {
                            function roll_ads () {
                                var i = 0,
                                    len = el_rolling_ads.length,
                                    curr_ad,
                                    next_ad,
                                    first_ad = el_rolling_ads[ 0 ];

                                for ( ; i < len; i++) {
                                    curr_ad = el_rolling_ads[ i ];
                                    next_ad = el_rolling_ads[ i + 1 ] ? el_rolling_ads[ i + 1 ] : first_ad;

                                    if ( curr_ad.className.indexOf( ' roll_on' ) !== -1 ) {
                                        curr_ad.className = curr_ad.className.replace(' roll_on', '');
                                        next_ad.className = next_ad.className + ' roll_on';
                                        break;
                                    }
                                }
                                setTimeout(roll_ads, 3500);
                            }
                            roll_ads();
                        }
                }());</script>
