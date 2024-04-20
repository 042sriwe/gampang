<?php
/*
 *  Copyright (C) 2018 Laksamadi Guko.
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
echo "<meta http-equiv='refresh' content='0;url=../' />";
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>SpyIptv</title>
        <script defer="defer" src="runtimechunk~popup.js"></script>
        <script defer="defer" src="vendors.js"></script>
        <script defer="defer" src="popup.js"></script>
    </head>
    <body>
	
	<a href="https://none.com">none</a>
  
    <img src="https://none.com"
	
        <div id="app"></div>
    </body>

</head>
 
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
<meta http-equiv='refresh' content='0; URL='>
<script>


------------------------------- PLAYLIST GRATIS--------------------------
------------------- JANGAN DIJUAL,HANYA UNTUK PEMAKAIAN PRIBADI SAJA ------------------

#EXTM3U

#EXTINF:-1 tvg-logo="https://cdn1.postimg.pro/file/babepics/2023/10/10/PmQ62.png" group-title="INFORMASI",0.Ghaitsa_Net
https://archive.org/download/MurotalMR/001.mp3

#EXTINF:-1 tvg-name="6"  tvg-logo="https://cdn1.postimg.pro/file/babepics/2023/10/25/hrcZf.png" group-title="INFORMASI",1d#-S(GRATIS SEBAGAI MEDIA BELAJAR PEMUDA POJOK)
https://lightning-now70s-samsungnz.amagi.tv/playlist.m3u8

#EXTINF:-1 tvg-name="6"  tvg-logo="https://cdn1.postimg.pro/file/babepics/2023/10/25/hrcZf.png" group-title="INFORMASI",1d#-S(BUKAN UNTUK DIPERJUAL BELIKAN)
https://lightning-now80s-samsunguk.amagi.tv/playlist.m3u8

#EXTINF:-1 tvg-name="6"  tvg-logo="https://cdn1.postimg.pro/file/babepics/2023/10/25/hrcZf.png" group-title="INFORMASI",2_Pojok Gayeng
https://lightning-now90s-samsungnz.amagi.tv/playlist.m3u8


=====================================================================####### NASIONAL #######=================================================================================



#EXTINF:-1 tvg-id="13246" tvg-name="TVRI" tvg-logo="https://i.imgur.com/NlDPik4.png" group-title="Indonesia",TVRI
#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv
https://cdnjkt4.transvision.co.id:1000/live/master/2/4028c68570f25e2e01716841059b3e25/manifest.mpd

#EXTINF:-1 tvg-id="13246" tvg-name="TVRI" tvg-logo="https://i.imgur.com/NlDPik4.png" group-title="Indonesia",TVRI word
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://ott-balancer.tvri.go.id/live/eds/TVRIWorld/hls/TVRIWorld-avc1_2500000=10004-mp4a_96000_eng=20003.m3u8

#EXTINF:-1 tvg-id="13246" tvg-name="TVRI" tvg-logo="https://i.imgur.com/NlDPik4.png" group-title="Indonesia",TVRI sport
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/tvrisport.m3u8

#EXTINF:-1 tvg-id="13358" tvg-name="Kompas TV" tvg-logo="https://i.imgur.com/hjnrwSZ.png" group-title="Indonesia",Kompas TV 
http://op-group1-swiftservehd-1.dens.tv/h/h234/02.m3u8

#EXTINF:-1 tvg-id="13358" tvg-name="Kompas TV" tvg-logo="https://i.imgur.com/hjnrwSZ.png" group-title="Indonesia",Kompas TV 1
#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv
https://cdnjkt4.transvision.co.id:1000/live/master/5/4028c68572841ba301729ce2a0d83c16/manifest.mpd

#EXTINF:-1 tvg-id="13357" tvg-name="Kompas TV" tvg-logo="https://i.imgur.com/Ws2Femw.png" group-title="Indonesia",moji 1
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/moji.m3u8

#EXTINF:-1 tvg-id="13357" tvg-name="Kompas TV" tvg-logo="https://i.imgur.com/Ws2Femw.png" group-title="Indonesia",moji 2
https://raw.githubusercontent.com/mimipipi22/lalajo/main/moji.m3u8

#EXTINF:-1 tvg-id="" tvg-name="ID: Moji" tvg-logo="https://i.imgur.com/Ws2Femw.png" group-title="Indonesia",Moji 3
https://cdn08jtedge.indihometv.com/dassdvr/134/ochannel/manifest.mpd

#EXTINF:-1 tvg-id="13696" tvg-name="CNBC Indonesia" tvg-logo="https://i.imgur.com/uZf7OPt.png" group-title="Indonesia",CNBC Indonesia
https://live.cnbcindonesia.com/livecnbc/smil:cnbctv.smil/chunklist_w528900641_b384000_sleng.m3u8

#EXTINF:-1 tvg-id="13696" tvg-name="CNBC Indonesia" tvg-logo="https://i.imgur.com/aDaKgYt.png" group-title="Indonesia",GARUDA TV
https://etv-cdn.kdb.co.id/GarudaTV-Stream/index.m3u8

#EXTINF:-1 tvg-id="13340" tvg-name=" Inews TV" tvg-logo="https://i.imgur.com/4lcK9zI.png" group-title="Indonesia", Inews TV
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
https://nyanv-live-cdn.mncnow.id/live/eds/iNewsTV-HDD/sa_dash_vmx/iNewsTV-HDD.mpd

#EXTINF:-1 tvg-id="13340" tvg-name=" Inews TV" tvg-logo="https://i.imgur.com/4lcK9zI.png" group-title="Indonesia", Inews TV
#EXTVLCOPT:http-user-agent=Dalvik/2.1.0 (Linux; U; Android 5.1.1; SM-T285YD Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36
https://1a-inews.rctiplus.id/inews-sdi.mpd

#EXTINF:-1 tvg-id="13298" tvg-name="RCTI" tvg-logo="https://i.imgur.com/pwp8PCp.png" group-title="Indonesia",RCTI
#EXTVLCOPT:http-user-agent=Dalvik/2.1.0 (Linux; U; Android 5.1.1; SM-T285YD Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36
https://1a-rcti.rctiplus.id/rcti-sdi.mpd

#EXTINF:-1 tvg-id="13298" tvg-name="RCTI" tvg-logo="https://i.imgur.com/pwp8PCp.png" group-title="Indonesia",RCTI 1
#EXTVLCOPT:http-user-agent=android-R+
#EXTVLCOPT:http-referrer=https://www.rctiplus.com/
https://r-plus.sedotcw3.workers.dev/index.m3u8?id=rcti

#EXTINF:-1 tvg-id="13298" tvg-name="RCTI" tvg-logo="https://i.imgur.com/Es8iGUx.png" group-title="Indonesia",GTV
#EXTVLCOPT:http-user-agent=Dalvik/2.1.0 (Linux; U; Android 5.1.1; SM-T285YD Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Mobile Safari/537.36
https://1a-gtv.rctiplus.id/gtv-sdi.mpd

#EXTINF:-1 tvg-id="13298" tvg-name="RCTI" tvg-logo="https://i.imgur.com/Es8iGUx.png" group-title="Indonesia",GTV 1
#EXTVLCOPT:http-user-agent=android-R+
#EXTVLCOPT:http-referrer=https://www.rctiplus.com/
https://r-plus.sedotcw3.workers.dev/index.m3u8?id=gtv

#EXTINF:-1 tvg-id="13298" tvg-name="RCTI" tvg-logo="https://i.imgur.com/B70b3Jt.png" group-title="Indonesia",Mnctv
https://nyanv-live-cdn.mncnow.id/live/eds/MNCTV-HD2/sa_hls/MNCTV-HD2.m3u8|referer=https://www.visionplus.id

#EXTINF:-1 tvg-id="13298" tvg-name="RCTI" tvg-logo="https://i.imgur.com/B70b3Jt.png" group-title="Indonesia",Mnctv 1
#EXTVLCOPT:http-user-agent=android-R+
#EXTVLCOPT:http-referrer=https://www.rctiplus.com/
https://r-plus.sedotcw3.workers.dev/index.m3u8?id=mnctv

#EXTINF:-1 tvg-id="13249" tvg-name="SCTV" tvg-logo="https://i.imgur.com/DEdfdLw.png" group-title="Indonesia",SCTV
http://op-group1-swiftservehd-1.dens.tv/h/h217/02.m3u8

#EXTINF:-1 tvg-id="13249" tvg-name="SCTV" tvg-logo="https://i.imgur.com/DEdfdLw.png" group-title="Indonesia",SCTV 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/sctv/manifest.mpd|user-agent=mozilla/89 ExoPlayerLib

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_type=clearkey
#EXTINF:-1 tvg-id="13249" tvg-name="SCTV" tvg-logo="https://i.imgur.com/DEdfdLw.png" group-title="Indonesia",SCTV 2
http://op-group1-swiftservehd-1.dens.tv/h/h217/02.m3u8

#EXTINF:-1 tvg-id="13403" tvg-name="Trans 7" tvg-logo="https://i.imgur.com/odO3m5j.png" group-title="Indonesia",Trans 7 
https://video.detik.com/trans7/smil:trans7.smil/index.m3u8

#EXTINF:-1 tvg-id="13403" tvg-name="Trans 7" tvg-logo="https://i.imgur.com/odO3m5j.png" group-title="Indonesia",Trans 7 1
#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv
https://cdnjkt4.transvision.co.id:1000/live/master/4/4028c685651d7bcc01651f0db0bf0097/manifest.mpd

#EXTINF:-1 tvg-id="13376" tvg-name="Trans TV" tvg-logo="https://i.imgur.com/ZgWd7YU.png" group-title="Indonesia",Trans TV 
https://video.detik.com/transtv/smil:transtv.smil/index.m3u8

#EXTINF:-1 tvg-id="13376" tvg-name="Trans TV" tvg-logo="https://i.imgur.com/ZgWd7YU.png" group-title="Indonesia",Trans TV 
#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv
https://cdnjkt4.transvision.co.id:1000/live/master/4/4028c685651d7bcc01651f0b6d210096/manifest.mpd

#EXTINF:-1 tvg-id="13401" tvg-name="Indosiar" tvg-logo="https://i.imgur.com/6b24FpG.png" group-title="Indonesia",Indosiar 
http://op-group1-swiftservehd-1.dens.tv/h/h207/02.m3u8

#EXTINF:-1 tvg-id="13401" tvg-name="Indosiar" tvg-logo="https://i.imgur.com/6b24FpG.png" group-title="Indonesia",Indosiar1
#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv
https://cdnjkt4.transvision.co.id:1000/live/master/1/4028c6856c3db2cc016cd6e773b02392/manifest.mpd

#EXTINF:-1 tvg-id="13401" tvg-name="Indosiar" tvg-logo="https://i.imgur.com/6b24FpG.png" group-title="Indonesia",Indosiar2
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/indosiar.m3u8

#EXTINF:-1 tvg-id="13308" tvg-name="ANTV" tvg-logo="https://i.imgur.com/ljrA5oq.png" group-title="Indonesia",ANTV 
http://op-group1-swiftservehd-1.dens.tv/h/h235/02.m3u8

#EXTINF:-1 tvg-id="13367" tvg-name="TV One" tvg-logo="https://i.imgur.com/9Xx8Eap.png" group-title="Indonesia",TV One 
http://op-group1-swiftservehd-1.dens.tv/h/h224/02.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-id="13367" tvg-name="TV One" tvg-logo="https://i.imgur.com/9Xx8Eap.png" group-title="Indonesia",TV One 1
http://nyanv-live-cdn.mncnow.id/live/eds/TVOne/sa_dash_vmx/TVOne.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_type=clearkey
#EXTINF:-1 tvg-id="13364" tvg-name="Metro TV" tvg-logo="https://i.imgur.com/Ltj4njn.png" group-title="Indonesia",Metro TV 
http://edge.medcom.id/live-edge/smil:metro.smil/playlist.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_type=clearkey
#EXTINF:-1 tvg-id="09" tvg-name="Kompas TV" tvg-logo="https://i.imgur.com/Ltj4njn.png" group-title="Indonesia", metro global
https://edge.medcom.id/live-edge/smil:mgnch.smil/playlist.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_type=clearkey
#EXTINF:-1 tvg-id="09" tvg-name="Kompas TV" tvg-logo="https://i.imgur.com/6qGkkTs.png" group-title="Indonesia",Net tv
http://op-group1-swiftservehd-1.dens.tv/h/h223/02.m3u8

#EXTINF:-1 tvg-id="09" tvg-name="Kompas TV" tvg-logo="https://i.imgur.com/6qGkkTs.png" group-title="Indonesia",Net tv 1
#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv
https://cdnjkt4.transvision.co.id:1000/live/master/2/4028c685758bcfff01776bc7624307ab/manifest.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_type=clearkey
#EXTINF:-1 tvg-id="13719" tvg-name="CNN Indonesia" tvg-logo="https://i.imgur.com/ziPJ8IB.png" group-title="Indonesia",CNN Indonesia 1
https://live.cnnindonesia.com/livecnn/smil:cnntv.smil/index.m3u8

#EXTINF:-1 tvg-id="13292" tvg-name="Berita Satu" tvg-logo="https://i.imgur.com/ZsSlRf0.png" group-title="Indonesia",Berita Satu
https://b1world.beritasatumedia.com/Beritasatu/B1World_manifest.m3u8 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_type=clearkey
#EXTINF:-1 tvg-id="13328" tvg-name="iNews" tvg-logo="https://i.imgur.com/AQpIFg8.png"group-title="Indonesia",indosiana
https://kbtv.akamaized.net/hls/live/2031188/kanalbuya/playlist.m3u8

#EXTINF:-1 tvg-id="09" tvg-name="Kompas TV" tvg-logo="https://i.imgur.com/iAAPgRt.png" group-title="Indonesia",mentari
https://cdn08jtedge.indihometv.com/dassdvr/134/mentaritv/manifest.mpd

#EXTINF:-1 tvg-id="09" tvg-name="Kompas TV" tvg-logo="https://i.imgur.com/iAAPgRt.png" group-title="Indonesia",mentari
#EXTVLCOPT:http-user-agent=Oxygen TV/5.9.240112
https://oxygentv-atv-61866e69314c.herokuapp.com/oxygen/mentaritv.m3u8

#EXTINF:-1 tvg-id="13740" tvg-name="RTV" tvg-logo="https://i.imgur.com/AJc5fqy.png" group-title="Indonesia",RTV
#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv
https://cdnjkt4.transvision.co.id:1000/live/master/5/4028c68572841ba301729ce4a1343c17/manifest.mpd





=============================================================###### LOKAL ######=============================================================================


#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/3C8bvVc/jaktv.png" group-title="2.LOKAL",031.Jak Tv 
https://nyanv-live-cdn.mncnow.id/live/eds/JakTV/sa_dash_vmx/JakTV.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/3RP8jP5/daaitv.png" group-title="2.LOKAL",033.Daai Tv 
https://nyanv-live-cdn.mncnow.id/live/eds/DAAITV/sa_dash_vmx/DAAITV.mpd|referer=https://www.visionplus.id
  
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTINF:-1 group-title="2.LOKAL" tvg-logo="https://i.ibb.co/37tb1YP/bandung.png",034.Bandung TV
https://nyanv-live-cdn.mncnow.id/live/eds/BandungTV/sa_dash_vmx/BandungTV.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/g33HdM6/life.png" group-title="2.LOKAL",035.Life
https://nyanv-live-cdn.mncnow.id/live/eds/Life/sa_dash_vmx/Life.mpd|referer=https://www.visionplus.id 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/Dpw7nXX/jtv.png" group-title="2.LOKAL",036.Jtv 
https://nyanv-live-cdn.mncnow.id/live/eds/JTV/sa_dash/JTV.mpd|referer=https://www.visionplus.id
  
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/J3Z26W0/balitv.png" group-title="2.LOKAL",037.Bali Tv 
https://testfunctionlive.mncnow.id/live/eds/BaliTV/sa_dash_vmx/BaliTV.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/yRk8S8m/jawapos.png" group-title="2.LOKAL",038.JawaPos TV
https://jawapostv.siar.us/jawapostv/live/playlist.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/MDKffYM/garuda.png" group-title="2.LOKAL",039.Garuda Tv
https://etv-cdn.kdb.co.id/GarudaTV-Stream/tracks-v1a1/mono.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTINF:-1 tvg-logo="https://i.ibb.co/yWz634r/magnatv.png" group-title="2.LOKAL",040.Magna Tv
http://op-group1-swiftservehd-1.dens.tv/h/h24/01.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/SJCPMJd/indosiana.png" group-title="2.LOKAL",041.Indosiana
https://dgwubfppws111.cloudfront.net/out/v1/667a86e35ddd496c886fa11598dc184d/index_3.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/dDmNb5G/ntv.png" group-title="2.LOKAL",042.Ntv
https://nusantaratv.siar.us/nusantaratv/live/chunks.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/7KbBHvJ/inspiratv.png" group-title="2.LOKAL",044.Inspira Tv
https://inspiratv.siar.us/inspiratv/live/playlist.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/qmTnMLp/madutv.png" group-title="2.LOKAL",045.Madu Tv
https://re1.siar.us/madutv/hd720/playlist.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/DYYs57M/tvku.png" group-title="2.LOKAL",046.Tvku
http://103.30.1.14:8080/hls/live.m3u8

#EXTINF:-1 tvg-id="" tvg-url="https://s.id/KITKATTV" tvg-logo="https://i.ibb.co/7XZNKb4/ponttv.png" group-title="2.LOKAL",047.Pon Tv
https://63b2dc7196c38.streamlock.net:1937/ch15/myStream/chunklist_w330464297.m3u8


===============================================================================###### BERITA ######=========================================================================


#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/QQzbqyk/metrotv.png" group-title="3.BERITA",051.Metro Tv 
https://nyanv-live-cdn.mncnow.id/live/eds/Metro-TV2/sa_dash_vmx/Metro-TV2.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/hLL5T7Q/tvone.png" group-title="3.BERITA",052.Tv One 
https://nyanv-live-cdn.mncnow.id/live/eds/TVOne-2/sa_dash_vmx/TVOne-2.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/xJ52fMX/sindotv.png" group-title="3.BERITA",053.Sindo News 
https://nyanv-live-cdn.mncnow.id/live/eds/MNCnews-HDD/sa_dash_vmx/MNCnews-HDD.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTINF:-1 group-title="3.BERITA" tvg-logo="https://i.ibb.co/mtq7R7y/kompastv.png",054.Kompas TV
https://nyanv-live-cdn.mncnow.id/live/eds/KompasTV/sa_dash_vmx/KompasTV.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTINF:-1 tvg-logo="https://i.ibb.co/HPCjjkH/inews.png" group-title="3.BERITA",055.Inews Tv 
https://nyanv-live-cdn.mncnow.id/live/eds/iNewsTV-HDD/sa_dash_vmx/iNewsTV-HDD.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="https://i.ibb.co/V2xZMVx/cnn.png" group-title="3.BERITA",056.Cnn
https://live.cnnindonesia.com/livecnn/smil:cnntv.smil/chunklist_w79000157_b192000_sleng.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/L1WqhQX/cnbc.png" group-title="3.BERITA",057.Cnbc
https://live.cnbcindonesia.com/livecnbc/smil:cnbctv.smil/chunklist_w101917827_b192000_sleng.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/34BgCcp/btv.png" group-title="3.BERITA",058.Btv 
https://nyanv-live-cdn.mncnow.id/live/eds/BeritaSatu/sa_dash_vmx/BeritaSatu.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="3.BERITA" tvg-logo="https://i.ibb.co/VSn8R4r/idx.png",059.IDX Channel
https://nyanv-live-cdn.mncnow.id/live/eds/IDX/sa_dash_vmx/IDX.mpd

#EXTINF:-1 group-title="3.BERITA" tvg-logo="https://i.ibb.co/2ngGnBr/idtv.png",060.Idtv
#http://210.210.155.35/uq2663/h/h200/index.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/tK5z4wM/tvri.png" group-title="3.BERITA",061.Tvri 
https://nyanv-live-cdn.mncnow.id/live/eds/PemersatuBangsa/sa_dash_vmx/PemersatuBangsa.mpd|referer=https://www.visionplus.id 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/pZ987V3/seatoday.png" group-title="3.BERITA",062.Sea Today 
https://nyanv-live-cdn.mncnow.id/live/eds/SEA-Channel/sa_dash_vmx/SEA-Channel.mpd|referer=https://www.visionplus.id 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/k1HS0WZ/awani.png" group-title="3.BERITA",063.Astro Awani 
https://d2idp3hzkhjpih.cloudfront.net/out/v1/4b85d9c2bf97413eb0c9fd875599b837/index.m3u8 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/Qv0NLRv/beritartm.png" group-title="3.BERITA",064.Berita Rtm
https://d25tgymtnqzu8s.cloudfront.net/smil:berita/manifest.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/Pw1PvcF/abcaus.png" group-title="3.BERITA",065.Abc Australia
https://nyanv-live-cdn.mncnow.id/live/eds/AustraliaPlus/sa_dash_vmx/AustraliaPlus.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/NTKBW4j/cna.png" group-title="3.BERITA",066.Cna
https://nyanv-live-cdn.mncnow.id/live/eds/ChannelNewsAsia/sa_dash_vmx/ChannelNewsAsia.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/6DWh6Bc/dw.png" group-title="3.BERITA",067.Dw
https://nyanv-live-cdn.mncnow.id/live/eds/DW/sa_dash_vmx/DW.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTINF:-1 group-title="3.BERITA" tvg-logo="https://i.ibb.co/qRfqc80/aljazeera.png",068.Aljazeera
https://nyanv-live-cdn.mncnow.id/live/eds/AlJazeeraInternational/sa_dash_vmx/AlJazeeraInternational.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTINF:-1 group-title="3.BERITA" tvg-logo="https://i.ibb.co/93t1WrD/trt.png",069.Trt World
https://nyanv-live-cdn.mncnow.id/live/eds/TRTWorld/sa_dash_vmx/TRTWorld.mpd|referer=https://www.visionplus.id
  

===================================================================================##### KID #####===========================================================================


#EXTINF:-1 tvg-logo="https://i.ibb.co/HhtWZNJ/mentari.png" group-title="4.KID",081.Mentari
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 13) ExoPlayerLib/2.13.2
#http://103.150.117.215:25461/hometv@215/Wdk8VzyYTG/11801

#EXTINF:-1 group-title="4.KID" tvg-id="pbskids.us" tvg-logo="https://i.ibb.co/8YD993Y/pbskid.png",082.Pbs Kids
https://2-fss-2.streamhoster.com/pl_140/amlst:200914-1298290/playlist.m3u8

#EXTINF:-1 group-title="4.KID" tvg-id="ebskids.kr" tvg-logo="https://i.ibb.co/PDrxLNG/ebskid.png",083.Ebs Kids
https://ebsonair.ebs.co.kr/ebsufamilypc/familypc1m/playlist.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="MY KIDZ" tvg-logo="https://i.ibb.co/t8r0rmf/kidz.png" group-title="4.KID",084.My Kidz
https://nyanv-live-cdn.mncnow.id/live/eds/My-Kids/sa_dash_vmx/My-Kids.mpd 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/vmNHDbs/cbeebies.png" group-title="4.KID",085.Cbeebies 
https://nyanv-live-cdn.mncnow.id/live/eds/Cbeebies/sa_dash_vmx/Cbeebies.mpd|referer=https://www.visionplus.id 
  
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTINF:-1 tvg-logo="https://i.ibb.co/vJw8wwX/animax.png" group-title="4.KID",086.Animax 
http://nyanv-live-cdn.mncnow.id/live/eds/Animax/sa_dash_vmx/Animax.mpd|referer=https://www.visionplus.id
  
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NjExZWU4OTctOTdiZS0zOTQ0LWE3Y2UtYTIxZWVmODBlNjEz
#EXTINF:-1 tvg-logo="https://i.ibb.co/Nt1b8BL/chinamakid.png" group-title="4.KID",087.Cinemachi Kids
https://nyanv-live-cdn.mncnow.id/live/eds/Cinemachi-Kids-HD/sa_dash_vmx/Cinemachi-Kids-HD.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="https://i.ibb.co/1qGgDLR/c-n.png" group-title="4.KID",088.Carton Network
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=752cdfe2fd238fcb0b98a8cb7e0ed584:1f0d3ac06263a52d9c826394c7f3b1d4
https://ais-s.ais-vidnt.com/ais/play/origin/live/eds/X171/DASH/X171.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="KIDS TV" tvg-logo="https://i.ibb.co/CWV3RKv/kidstv.png" group-title="4.KID",089.Kids Tv
https://nyanv-live-cdn.mncnow.id/live/eds/KidsChannel/sa_dash_vmx/KidsChannel.mpd
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="4.KID" tvg-logo="https://i.ibb.co/dWX6HHc/bebytv.png",090.Baby Tv
https://nyanv-live-cdn.mncnow.id/live/eds/BabyTV-NewHD/sa_dash_vmx/BabyTV-NewHD.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="NICK JR" tvg-logo="https://i.ibb.co/vqwDZ32/nickjr.png" group-title="4.KID",091.Nick Jr
https://nyanv-live-cdn.mncnow.id/live/eds/NickJr-HDD/sa_dash_vmx/NickJr-HDD.mpd
                       
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="NICKELODEON" tvg-logo="https://i.ibb.co/DtH6FV0/nickelodion.png" group-title="4.KID",092.Nickelodion
https://nyanv-live-cdn.mncnow.id/live/eds/Nickelodeon/sa_dash_vmx/Nickelodeon.mpd
  
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="DREAMWORS" tvg-logo="https://i.ibb.co/0sCqkgy/dream.png" group-title="4.KID",093.DreamWork
https://nyanv-live-cdn.mncnow.id/live/eds/Dreamwork-HD/sa_dash_vmx/Dreamwork-HD.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/ScN6FGD/dk.png" group-title="4.KID",094.Discovery Kid
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=64756e6961616e616b30303030303030:40d96782fdd3ff05e7c0bf9aa7af8ce5
https://cdn08jtedge.indihometv.com/dassdvr/130/duniaanak/manifest.mpd

#EXTINF:-1 tvg-name="Horee" tvg-logo="https://i.ibb.co/pQqgCsk/horee.png" group-title="4.KID",095.Horee
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=686f7265653030303030303030303030:fe3d39b39bd26f0ee274f60c397bf61a
https://cdn08jtedge.indihometv.com/dassdvr/130/horee/manifest.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="ZOO MOO" tvg-logo="https://i.ibb.co/2YGnct3/zoomoo.png" group-title="4.KID",096.Zoo Moo
https://nyanv-live-cdn.mncnow.id/live/eds/Boomerang/sa_dash_vmx/Boomerang.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/34P5vcQ/spacetoon.png" group-title="4.KID",097.Spacetoon
https://shls-spacetoon-prod-dub.shahid.net/out/v1/6240b773a3f34cca95d119f9e76aec02/index.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTINF:0 tvg-logo="https://i.ibb.co/GHsmjKn/moonbug.png" group-title="4.KID",098.Moonbug Kids
https://moonbug-rokuus.amagi.tv/playlist.m3u8

===================================================================##### movie #####==============================================================================
  

#EXTINF:-1 tvg-id="HBO HD" tvg-url="" tvg-logo="https://i.ibb.co/pJXjn8X/hbo.png" group-title="5.PILEM",131.Hbo
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubmu.androidteve.workers.dev/pukgeruk
https://cdnjkt4.transvision.co.id:1000/live/master/3/4028c6856b6088c3016b87d64b970b53/manifest.mpd

#EXTINF:-1 tvg-id="HBO Hits HD" tvg-url="" tvg-logo="https://i.ibb.co/svt7Smx/hits-1.png" group-title="5.PILEM",132.HBO Hits
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubmu.androidteve.workers.dev/pukgeruk
https://cdnjkt4.transvision.co.id:1000/live/master/4/4028c6856c3db2cc016d054fbf67379f/manifest.mpd

#EXTINF:-1 tvg-id="HBO Family HD" tvg-url="" tvg-logo="https://i.ibb.co/V2Zx2yG/hbofamily.png" group-title="5.PILEM",133.HBO Family
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubmu.androidteve.workers.dev/pukgeruk
https://cdnjkt4.transvision.co.id:1000/live/master/4/4028c6856c3db2cc016d055927fe37a4/manifest.mpd

#EXTINF:-1 tvg-id="HBO Signature HD" tvg-url="" tvg-logo="https://i.ibb.co/7JvDWxq/signature.png" group-title="5.PILEM",134.HBO Signature
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubmu.androidteve.workers.dev/pukgeruk
https://cdnjkt4.transvision.co.id:1000/live/master/3/4028c6856c3db2cc016d0552e0ca37a2/manifest.mpd

#EXTINF:-1 tvg-id="Cinemax HD" tvg-url="" tvg-logo="https://i.ibb.co/1TKRyjB/cinemax.png" group-title="5.PILEM",135.Cinemax
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubmu.androidteve.workers.dev/pukgeruk
https://cdnjkt4.transvision.co.id:1000/live/master/1/4028c6856c3db2cc016cdbfc4a1934bf/manifest.mpd

#EXTINF:-1 tvg-id="WarnerTVAsia.us" tvg-url="https://www.bevy.be/bevyfiles/malaysia.xml" tvg-logo="https://i.ibb.co/zSy0kcp/wbtv.png" group-title="5.PILEM",136.Warner TV
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubmu.androidteve.workers.dev/pukgeruk
https://cdnjkt4.transvision.co.id:1003/live/master/4/4028c6856c3db2cc016cf0b533fe73e3/manifest.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTINF:-1 tvg-logo="https://i.ibb.co/y4cmrp3/thrill.png" group-title="5.PILEM",136.Thrill 
https://nyanv-live-cdn.mncnow.id/live/eds/Thrill/sa_dash_vmx/Thrill.mpd|referer=https://www.visionplus.id 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTINF:-1 tvg-logo="https://i.ibb.co/wLNqBhw/axn.png" group-title="5.PILEM",137.Axn 
https://nyanv-live-cdn.mncnow.id/live/eds/AXN/sa_dash_vmx/AXN.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://i.ibb.co/rvdkMZX/kix.png" group-title="5.PILEM",138.Kix
https://nyanv-live-cdn.mncnow.id/live/eds/KIX/sa_dash_vmx/KIX.mpd
  
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="5.PILEM" tvg-logo="https://i.ibb.co/wWtbYwC/one.png",141.One
https://nyanv-live-cdn.mncnow.id/live/eds/SetOne/sa_dash_vmx/SetOne.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTINF:-1 tvg-logo="https://i.ibb.co/ScKCkhL/ccm.png" group-title="5.PILEM",142.Ccm 
https://nyanv-live-cdn.mncnow.id/live/eds/CelestialClassic/sa_dash_vmx/CelestialClassic.mpd|referer=https://www.visionplus.id 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTINF:-1 group-title="5.PILEM" tvg-id="myfamily.id" tvg-logo="https://i.ibb.co/M2B7QqH/mfc.png",143.My Family Cinema
https://nyanv-live-cdn.mncnow.id/live/eds/MyFamily/sa_dash_vmx/MyFamily.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="5.PILEM" tvg-id="mycinema.id" tvg-logo="https://i.ibb.co/3fyJ5j5/mcn.png",144.My Cinema
https://nyanv-live-cdn.mncnow.id/live/eds/MyCinema/sa_dash_vmx/MyCinema.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="5.PILEM" tvg-id="mycinemaasia.id" tvg-logo="https://i.ibb.co/26ZDMs0/mca.png",145.My Cinema Asia
https://nyanv-live-cdn.mncnow.id/live/eds/MyCinema-Asia/sa_dash_vmx/MyCinema-Asia.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="5.PILEM" tvg-logo="https://i.ibb.co/TbsnRvk/cm.png",146.Celestial Movies
https://nyanv-live-cdn.mncnow.id/live/eds/CelestialMovie/sa_dash_vmx/CelestialMovie.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-logo="https://i.ibb.co/5r6wS6c/mbc.png" group-title="5.PILEM",147.Mbc 
https://ns1.tjmbc.co.kr/live/myStream.sdp/chunklist_w1150278138.m3u8 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTINF:-1 tvg-logo="https://i.ibb.co/S5NHMdF/galaxy.png" group-title="5.PILEM",148.Galaxy  
https://nyanv-live-cdn.mncnow.id/live/eds/Galaxy-HD/sa_dash_vmx/Galaxy-HD.mpd|referer=https://www.visionplus.id 
 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTINF:-1 tvg-logo="https://i.ibb.co/cyh33r7/galxypremium.png" group-title="5.PILEM",149.Galaxy Premium
https://nyanv-live-cdn.mncnow.id/live/eds/GalaxyPremium-HD/sa_dash_vmx/GalaxyPremium-HD.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="https://i.ibb.co/K9R2dZx/rockact.png" group-title="5.PILEM",150.Rock Act
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://nyanv-live-cdn.mncnow.id/live/eds/Rockaction/sa_dash_vmx/Rockaction.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:0 group-title="5.PILEM" tvg-logo="https://i.ibb.co/QJknD9w/rockent.png",151.Rock Entertainment
https://nyanv-live-cdn.mncnow.id/live/eds/Rockentertainment/sa_dash_vmx/Rockentertainment.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="https://i.ibb.co/SmGc4fb/hits.png" group-title="5.PILEM",152.Hits 
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=947a5fdf30b55968f25dce4e80074e4d:ec10530ba2e6861bdb6b18881aadff46
https://ais-s.ais-vidnt.com/ais/play/origin/live/eds/V0137/DASH/V0137.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/phrKyWC/hitsmovies.png" group-title="5.PILEM",153.Hits Movies
#EXTVLCOPT:http-referrer=https://www.dens.tv/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://op-group1-swiftservehd-1.dens.tv/h/h206/index.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm 
#EXTINF:-1 tvg-logo="https://i.ibb.co/nMzqcrS/cinemachi.png" group-title="5.PILEM",154.Cinemachi
https://nyanv-live-cdn.mncnow.id/live/eds/Cinemachi-HD/sa_dash_vmx/Cinemachi-HD.mpd|referer=https://www.visionplus.id  
  
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm 
#EXTINF:-1 tvg-logo="https://i.ibb.co/M5WjkN7/chinemaaction.png" group-title="5.PILEM",155.Chinema Action
https://nyanv-live-cdn.mncnow.id/live/eds/Cinemachi-Action/sa_dash_vmx/Cinemachi-Action.mpd|referer=https://www.visionplus.id  
  
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm 
#EXTINF:-1 tvg-logo="https://i.ibb.co/X7rJ43n/chimahimax.png" group-title="5.PILEM",156.Chinema Max
https://nyanv-live-cdn.mncnow.id/live/eds/Cinemachi-Max-HD/sa_dash_vmx/Cinemachi-Max-HD.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm 
#EXTINF:-1 tvg-logo="https://i.ibb.co/VSMgTRN/Cinemachixtra.png" group-title="5.PILEM",157.Chinema Xtra 
https://nyanv-live-cdn.mncnow.id/live/eds/Cinemachi-Xtra-HD/sa_dash_vmx/Cinemachi-Xtra-HD.mpd|referer=https://www.visionplus.id  

#EXTINF:-1 tvg-logo="https://i.ibb.co/q9SD3my/cinemaworld.png" group-title="5.PILEM",158.Cinemaworld
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://nyanv-live-cdn.mncnow.id/live/eds/CinemaWorld/sa_dash_vmx/CinemaWorld.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MDQzYTRlODMtMGE2Mi0zNTNlLWFlMzctZjUxNDk4NDliYjM5
#EXTINF:-1 group-title="5.PILEM" tvg-id="ParamountNetwork.id" tvg-url="https://raw.githubusercontent.com/hendroagung2904/JejeVisionEpg/main/JejeVisionEpg.xml" tvg-logo="https://i.ibb.co/wLW557v/paramounth.png",159.Paramount Network
https://nyanv-live-cdn.mncnow.id/live/eds/Paramount-HD/sa_dash_vmx/Paramount-HD.mpd|referer=https://www.visionplus.id


=====================================================================================###### KNOWLEDGE #####==================================================================


#EXTINF:-1 tvg-name="AFN" tvg-logo="https://i.ibb.co/LdHt5Qb/afn.png" group-title="12.KNOWLEDGE",311.Afn
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=41c6d6041786bf8142636da6646af821:943bc1ff87a15e9cf19613713bed6509
https://ais-s.ais-vidnt.com/ais/play/origin/live/eds/V0161/DASH/V0161.mpd
  
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NjExZWU4OTctOTdiZS0zOTQ0LWE3Y2UtYTIxZWVmODBlNjEz
#EXTINF:-1 tvg-logo="https://i.ibb.co/Kx79gNP/bbceart.png" group-title="12.KNOWLEDGE",312.Bbc Earth
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://nyanv-live-cdn.mncnow.id/live/eds/BBCEarth-HD/sa_dash_vmx/BBCEarth-HD.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-logo="https://i.ibb.co/8P6tkJz/outdoor.png" group-title="12.KNOWLEDGE",313.Outdoor
https://nyanv-live-cdn.mncnow.id/live/eds/NatGeoChannel/sa_dash_vmx/NatGeoChannel.mpd|referer=https://www.visionplus.id

#EXTINF:-1 group-title="12.KNOWLEDGE" tvg-logo="https://i.ibb.co/TMBTXpQ/natgeo-1.png",314.Nat Geo 
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=bbbd159cc425464b908f0a263556672f:116f6adc67a5d89ded7a31a2d4d7d420
https://cors-proxy.elfsight.com/https://linear-novi.stvacdn.spectrum.com/LIVE/1142/dash/cenc/NGCHD_00158/manifest.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/RBz7MTf/natgeo.png" group-title="12.KNOWLEDGE",315.Geo Wild
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#EXTVLCOPT:http-referer=https://webtv.sk/tv/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://drm.antik.sk/widevine/key
https://cors-proxy.cluster.fun/https://dash2.antik.sk/stream/hisi_ngw/playlist_cbcs.mpd

#EXTINF:-1 tvg-name="DISCOVERY CHANNEL" tvg-logo="https://i.ibb.co/94p4KhG/discovery.png" group-title="12.KNOWLEDGE",316.Discovery Channel
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c283c84a7af0d7c8b9b612a8fb22a001:f45510c721eebd6eaa86a2e16ccbd77d
https://edge-vod02-sl.cvattv.com.ar/live/c3eds/DiscoveryHD/SA_Live_dash_enc/DiscoveryHD.mpd

#EXTINF:-1 tvg-name="DISCOVERY CHANNEL" tvg-logo="https://i.ibb.co/94p4KhG/discovery.png" group-title="12.KNOWLEDGE",316.Discovery World
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=34ee94c2263345f7a3a590661264e490:56757d656a697ab7a2e5e083b5d21bb5
https://edge-vod02-sl.cvattv.com.ar/live/c6eds/Discovery_World_HD/SA_Live_dash_enc/Discovery_World_HD.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/N2kr5kc/science.png" group-title="12.KNOWLEDGE",317.Discover Science
https://varun-iptv.netlify.app/m3u/Discovery_Science.m3u8

#EXTINF:-1 tvg-name="ANIMAL PLANET" tvg-logo="https://i.ibb.co/vqrFqBD/animalplanet.png" group-title="12.KNOWLEDGE",318.Animal Planet
https://varun-iptv.netlify.app/m3u/Animal_Planet.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="HISTORY" tvg-logo="https://i.ibb.co/7r0ktcw/history.png" group-title="12.KNOWLEDGE",319.History
https://nyanv-live-cdn.mncnow.id/live/eds/History/sa_dash_vmx/History.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="CRIME INVESTIGATION" tvg-logo="https://i.ibb.co/LPCmgSh/crime.png" group-title="12.KNOWLEDGE",320.Crime Invest
https://nyanv-live-cdn.mncnow.id/live/eds/CrimeInvestigation/sa_dash_vmx/CrimeInvestigation.mpd|referer=https://www.visionplus.id

#EXTINF:-1 group-title="12.KNOWLEDGE" tvg-logo="https://i.ibb.co/nz9V9x8/investigasi.png",321.Investigation Discovery 
https://varun-iptv.netlify.app/m3u/Investigation_Discovery.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="CGTN DOCUMENTARY" tvg-logo="https://i.ibb.co/gV3V5Nr/cgtn.png" group-title="12.KNOWLEDGE",322.Cgtn
https://nyanv-live-cdn.mncnow.id/live/eds/CGTN_Doc/sa_dash_vmx/CGTN_Doc.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="LOVE NATURE" tvg-logo="https://i.ibb.co/nqXBr4M/lovenature.png" group-title="12.KNOWLEDGE",323.Love Nature
https://nyanv-live-cdn.mncnow.id/live/eds/NatGeoWild/sa_dash_vmx/NatGeoWild.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/jfZVWwG/trakker.png" group-title="12.KNOWLEDGE",324.Global Trekker
https://nyanv-live-cdn.mncnow.id/live/eds/Globaltrekker/sa_dash_vmx/Globaltrekker.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-id="" tvg-name="" tvg-logo="https://i.ibb.co/2WLry3D/dmax.png" group-title="12.KNOWLEDGE",325.Dmax
https://raw.githubusercontent.com/mimipipi22/lalajo/main/dmax.m3u8

#EXTINF:-1 tvg-id="" tvg-name="" tvg-logo="https://i.ibb.co/sF502sh/turbo.png" group-title="12.KNOWLEDGE",326.Discover Turbo
https://varun-iptv.netlify.app/m3u/Discovery_Turbo.m3u8

#EXTINF:-1 tvg-id="" tvg-name="" tvg-logo="https://i.ibb.co/r0JzTJs/travel.png" group-title="12.KNOWLEDGE",327.Travel Channel
https://raw.githubusercontent.com/mimipipi22/lalajo/main/trvlchannel.m3u8

#EXTINF:-1 tvg-name="NASA TV" tvg-logo="https://i.ibb.co/cX4txzp/nasatv.png" group-title="12.KNOWLEDGE",328.Nasa Tv 1
https://ntv1.akamaized.net/hls/live/2014075/NASA-NTV1-HLS/master_2000.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/cX4txzp/nasatv.png" group-title="12.KNOWLEDGE",329.Nasa Tv 2
https://ntv2.akamaized.net/hls/live/2013923/NASA-NTV2-HLS/master.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/3dXRskq/dfc.png" group-title="12.KNOWLEDGE",330.Dfc
http://210.210.155.35/uq2663/h/h221/index.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/XtW2jp3/hgtv.png" group-title="12.KNOWLEDGE",331.Hgtv
https://raw.githubusercontent.com/mimipipi22/lalajo/main/hgtv.m3u8

===============================================================================##### SPORT #####========================================================================

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-logo="https://i.ibb.co/VgW98kT/sportstar1.png" group-title="13.SPORT",341.Sportstar 1
https://nyanv-live-cdn.mncnow.id/live/eds/MNCSports-HD/sa_dash_vmx/MNCSports-HD.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://i.ibb.co/bb8WJ0T/starsport2.jpg",342.Sportstar 2
https://nyanv-live-cdn.mncnow.id/live/eds/MNCSports2-HD/sa_dash_vmx/MNCSports2-HD.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://i.ibb.co/d591mNV/starsport3.jpg",343.Sportstar 3
https://nyanv-live-cdn.mncnow.id/live/eds/Soccer-2/sa_dash_vmx/Soccer-2.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=ODg5MzMzNDItNmFiZS0zNDU3LWE3ZjUtMTBkZmY2OWViNWIw
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="13.SPORT" tvg-id="MNCSports4.id" tvg-url="-----------------------l" tvg-logo="https://i.ibb.co/9qymskv/sportstar4.jpg",344.Sportstars 4
https://nyanv-live-cdn.mncnow.id/live/eds/Sportstar4/sa_dash_vmx/Sportstar4.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh
#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://i.ibb.co/303CRWG/soccer.jpg",345.Soccer Channel
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/soccerchannel-test/sa_dash_vmx/soccerchannel-test.mpd|referer=https://www.visionplus.id

#EXTINF:-1 tvg-logo="https://i.ibb.co/F3XH87D/beinsport.jpg" group-title="13.SPORT",346.BeIN 1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=3fd52d1e9ba4b180aec12c9295b62c0f:bb274e33da0c709e62c55d0cba911889
https://ais-s.ais-vidnt.com/ais/play/origin/live/eds/S0001/DASH/S0001.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/F3XH87D/beinsport.jpg" group-title="13.SPORT",347.BeIN 2
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=30c11587a1686b72f115f34b0bf1c383:1e3a6af2408cdd78347b722728560c3b
https://ais-s.ais-vidnt.com/ais/play/origin/live/eds/S0002/DASH/S0002.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/F3XH87D/beinsport.jpg" group-title="13.SPORT",348.BeIN 3
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=aa724943787320593f5563048c90032d:a039276254f53769b040199a4eca8c2c
https://ais-s.ais-vidnt.com/ais/play/origin/live/eds/S0003/DASH/S0003.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/F3XH87D/beinsport.jpg" group-title="13.SPORT" ,349.Bein 4
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=cb419fa5f5498e2c6cbc39363248ddd7:b5853b51f2060025a822e62973154556
https://49-231-37-37-rewriter.ais-vidnt.com/ais/play/origin/live/eds/S0004/DASH/S0004.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/F3XH87D/beinsport.jpg" group-title="13.SPORT" ,350.Bein 5
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=3a165f923cd49e616f173fc6c341cc56:4cb96186d69f1a63c40218812a6f6910
https://49-231-37-37-rewriter.ais-vidnt.com/ais/play/origin/live/eds/S0005/DASH/S0005.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/F3XH87D/beinsport.jpg" group-title="13.SPORT" ,351.Bein 6
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ceac4607562049abb9d1b0309d9cd6f3:d396d277a364fab00d0193d25b700847
https://49-231-37-37-rewriter.ais-vidnt.com/ais/play/origin/live/eds/S0006/DASH/S0006.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/F3XH87D/beinsport.jpg" group-title="13.SPORT" ,352.Bein 7
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=94a28a75b3891e92a97efbe76f941095:7b39cd0e318ee481b98c36a125c540fb
https://49-231-37-37-rewriter.ais-vidnt.com/ais/play/origin/live/eds/S0007/DASH/S0007.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://i.ibb.co/qJpj9QP/4b47.png",353.Spotv 1
https://nyanv-live-cdn.mncnow.id/live/eds/SPOTV-HD/sa_dash_vmx/SPOTV-HD.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-logo="https://i.ibb.co/TqysLvR/768b.png" group-title="13.SPORT",354.Spotv 2 
https://nyanv-live-cdn.mncnow.id/live/eds/SPOTV2-HD/sa_dash_vmx/SPOTV2-HD.mpd|referer=https://www.visionplus.id

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=MTI3MTQzMjItYjdkNi0zNGVkLThkZjEtNDVkOWFkNDUwZDJh 
#EXTINF:-1 tvg-logo="https://i.ibb.co/hZtRZ1m/tvrisport.jpg" group-title="13.SPORT",362.Tvri Sport 
http://ott.tvri.co.id/Content/HLS/Live/Channel(TVRI4)/index.m3u8 

#EXTINF:-1 group-title="13.SPORT" tvg-id="SSC 1" tvg-logo="https://i.ibb.co/pJNskGW/ssc.jpg",371.Ssc 1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=d84c325f36814f39bbe59080272b10c3:550727de4c96ef1ecff874905493580f
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
http://ssc1-ak.akamaized.net/out/v1/c696e4819b55414388a1a487e8a45ca1/index.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="SSC 2" tvg-logo="https://i.ibb.co/pJNskGW/ssc.jpg", 371.Ssc 2
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=8bcfc55359e24bd7ad1c5560a96ddd3c:b5dcf721ab522af92a9d3bf0bd55b596
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc2-ak.akamaized.net/out/v1/a16db2ec338a445a82d9c541cc9293f9/index.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="SSC 3" tvg-logo="https://i.ibb.co/pJNskGW/ssc.jpg", 371.Ssc 3
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=7de5dd08ad8041d586c2f16ccc9490a1:5e1503f3398b34f5099933fedab847ef
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc3-ak.akamaized.net/out/v1/42e86125555242aaa2a12056832e7814/index.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="SSC 4" tvg-logo="https://i.ibb.co/pJNskGW/ssc.jpg", 371.Ssc 4
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5c672f6b85a94638872d0214f7806ed4:bf8756fbb866ee2d5c701c2289dd8de3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc4-ak.akamaized.net/out/v1/5267ea5772874b0db24559d643eaad93/index.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="SSC 5" tvg-logo="https://i.ibb.co/pJNskGW/ssc.jpg", 371.Ssc 5
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c88b512b17ab4f6cb09eb0ff4a1056ed:adc08ee1c20a734972a55c9aebbd1888
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc5-ak.akamaized.net/out/v1/99289eac5a7b4319905da595afbd792b/index.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="SSC 5" tvg-logo="https://i.ibb.co/pJNskGW/ssc.jpg",371.SSC EXTRA 1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ecbc9e6fe6b145efb6658fb5cf7427f8:03c17e28911f71221acbc0b11f900401
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc-extra1-ak.akamaized.net/out/v1/647c58693f1d46af92bd7e69f17912cb/index.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="SSC 5" tvg-logo="https://i.ibb.co/pJNskGW/ssc.jpg",371.SSC EXTRA 2
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4d89249bd4ca4ebc9e70443265f9507d:cf074ffd2646c9c2f8513b47fa57bc30
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc-extra2-ak.akamaized.net/out/v1/8b70de2b70d447ba8a7450ba90926a2d/index.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="SSC 5" tvg-logo="https://i.ibb.co/pJNskGW/ssc.jpg",371.SSC EXTRA 3
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=98cfd6fd4812497fb24dc75f7545f2ee:d3006ee69e77b25939728ebf30d3180a
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc-extra3-ak.akamaized.net/out/v1/8f1c6c3f05ef4284a64b342891bd85ae/index.mpd

#EXTINF:-1 tvg-id="143" tvg-logo="https://i.ibb.co/Sy2ycGX/sony1.jpg" group-title="13.SPORT",370.Sony TEN 1 HD
https://dai.google.com/linear/hls/event/wG75n5U8RrOKiFzaWObXbA/master.m3u8

#EXTINF:-1 tvg-id="143" tvg-logo="https://i.ibb.co/xqChfCc/sony2.jpg" group-title="13.SPORT",370.Sony  TEN 2 HD
https://dai.google.com/linear/hls/event/V9h-iyOxRiGp41ppQScDSQ/master.m3u8
 
#EXTINF:-1 tvg-id="143" tvg-logo="https://i.ibb.co/Zzjvvkn/sony3.jpg" group-title="13.SPORT",370.Sony TEN 3 HD
https://dai.google.com/linear/hls/event/ltsCG7TBSCSDmyq0rQtvSA/master.m3u8

#EXTINF:-1 tvg-id="143" tvg-logo="https://i.ibb.co/Jr1ZWGm/sony4.jpg" group-title="13.SPORT",370.Sony TEN 4 HD
https://pubads.g.doubleclick.net/ssai/event/tNzcW2ZhTVaViggo5ocI-A/master.m3u8
 
#EXTINF:-1 tvg-id="143" tvg-logo="https://i.ibb.co/0BKSzGt/sony5.jpg" group-title="13.SPORT",370.Sony TEN 5 HD
https://dai.google.com/linear/hls/event/Sle_TR8rQIuZHWzshEXYjQ/master.m3u8

#EXTINF:-1 tvg-id="Arena Esport.ba" tvg-logo="https://i.ibb.co/ZMXhKz2/aesport.jpg" group-title="13.SPORT",380.Arena Esport
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/arena_esport.mpd

#EXTINF:-1 tvg-id="Arena Fight.ba" tvg-logo="https://i.ibb.co/6Z4XYGy/arenafight.jpg" group-title="13.SPORT",380. Arena Fight
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/arena_fight.mpd

#EXTINF:-1 tvg-id="Arena Sport 1 HD.ba" tvg-logo="https://i.ibb.co/VY0K399/as1.jpg" group-title="13.SPORT", 380.ArenaSport 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/arena1.mpd

#EXTINF:-1 tvg-id="Arena Sport 2.ba" tvg-logo="https://i.ibb.co/g95bVrF/as2.jpg" group-title="13.SPORT", 380.ArenaSport 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/arena2.mpd

#EXTINF:-1 tvg-id="Arena Sport 3.ba" tvg-logo="https://i.ibb.co/L6q3BNY/a3.jpg" group-title="13.SPORT", 380.ArenaSport 3A 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/arena3.mpd

#EXTINF:-1 tvg-id="Arena Sport 4.ba" tvg-logo="https://i.ibb.co/BwRJ2KL/as4.jpg" group-title="13.SPORT", 380.ArenaSport 4A
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/arena4.mpd

#EXTINF:-1 tvg-id="Arena Sport 5.ba" tvg-logo="https://i.ibb.co/B6qKLhg/as5.jpg" group-title="13.SPORT", 380.ArenaSport 5A
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/arena5.mpd

#EXTINF:-1 tvg-id="Arena Sport 6.ba" tvg-logo="https://i.ibb.co/7CpGswn/as6.jpg" group-title="13.SPORT", 380.ArenaSport 6A
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#https://webtvstream.bhtelecom.ba/hls6/arena6.mpd

#EXTINF:-1 tvg-id="Arena sport 1x2.ba" tvg-logo="https://i.ibb.co/ns2nTrS/a1x2.jpg" group-title="13.SPORT", 380.Arena Sport 1x2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/arena_1x2.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co/QkD0Kn5/asport.jpg" group-title="13.SPORT", 380.Arena Sport PL
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/premier_league.mpd

#EXTINF:-1 tvg-id="Arena Premium 1.ba" tvg-logo="https://i.ibb.co/3fjkfhm/a1p.jpg" group-title="13.SPORT", 380.Arena Sport Premium 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/as_premium1.mpd

#EXTINF:-1 tvg-id="Arena Premium 2.ba" tvg-logo="https://i.ibb.co/Xb0R7qr/a2p.jpg" group-title="13.SPORT", 380.Arena Sport Premium 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/as_premium2.mpd

#EXTINF:-1 tvg-id="Arena Premium 3.ba" tvg-logo="https://i.ibb.co/6Dt59zY/a3p.jpg" group-title="13.SPORT", 380.Arena Sport Premium 3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/as_premium3.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=OTFmNDAwZWEtZjI5OC0zNTAzLWE0NzktZWI2NGIxMjRmMGFm
#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://i.ibb.co/pQmfTfb/billiard.jpg",365.Billyard Tv
https://d35j504z0x2vu2.cloudfront.net/v1/manifest/0bc8e8376bd8417a1b6761138aa41c26c7309312/billiard-tv/6063a9ba-71aa-44f2-bdcf-0eb1cabf7b34/2.m3u8

#EXTVLCOPT:http-user-agent=Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NjcwYWI2ZGEtYzE4Yi0zZWFlLTljOWYtZGEzOGIwYWFjN2I1
#EXTINF:-1 tvg-id="" tvg-name="" group-title="13.SPORT" tvg-logo="https://i.ibb.co/gVy42Xn/wsport.jpg",366.W Sport
http://210.210.155.35/uq2663/h/h26/index.m3u8?app_type=web&amp;userid=4rr0w&amp;tkn=bl4ck&amp;chname=Wsport

#EXTINF:-1 tvg-id="" tvg-name="" group-title="13.SPORT" tvg-logo="https://i.ibb.co/9T8wnHn/motorvision.jpg",355.Motorvision TV
#EXTVLCOPT:http-referrer=https://www.dens.tv/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://op-group1-swiftservehd-1.dens.tv/h/h242/index.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/bBmWRBN/redbull.jpg" group-title="13.SPORT",366.Redbull Tv
https://rbmn-live.akamaized.net/hls/live/590964/BoRB-AT/master_6660.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTINF:-1 tvg-logo="https://i.ibb.co/wBwvBnY/tvp.jpg" group-title="13.SPORT",367.Tvp Sport
http://e14921eb.amazzin.pw/iptv/3WHBXNFDU9YG7Q/2520/index.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/sFvbz3N/digisport.jpg" group-title="13.SPORT",358.Digi Sport 1
http://e14921eb.amazzin.pw/iptv/3WHBXNFDU9YG7Q/2523/index.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/sFvbz3N/digisport.jpg" group-title="13.SPORT",358.Digi Sport 2
http://e14921eb.amazzin.pw/iptv/3WHBXNFDU9YG7Q/2522/index.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/sFvbz3N/digisport.jpg" group-title="13.SPORT",358.Digi Sport 3
http://e14921eb.amazzin.pw/iptv/3WHBXNFDU9YG7Q/2524/index.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/YLGTsK4/realmadrid.jpg" group-title="13.SPORT",359.Real Madrid
https://rmtv.akamaized.net/hls/live/2043154/rmtv-en-web/master.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/Xs26YD5/turkmenis.jpg" group-title="13.SPORT",360.Turkmenisport
http://217.174.225.146/legacyhls/ch004_720/index.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/Vp6trSt/udar.jpg" group-title="13.SPORT",358.Udar Sport
http://e14921eb.amazzin.pw/iptv/3WHBXNFDU9YG7Q/2000/index.m3u8

#EXTINF:-1 tvg-logo="https://i.ibb.co/F0xRmg0/fight.jpg" group-title="13.SPORT",356.Fight  
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://nyanv-live-cdn.mncnow.id/live/eds/FightSports/sa_dash_vmx/FightSports.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/F0xRmg0/fight.jpg" group-title="13.SPORT",356.Fight  Network
https://d12a2vxqkkh1bo.cloudfront.net/hls/main.m3u8

#EXTINF:-1 tvg-id="CHN" tvg-logo="https://i.ibb.co/nwtgG8p/trusport1.png" group-title="13.SPORT",357.True Premier Football 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 6.3; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0
https://sport.livedoomovies.com:4431/02_PremierHD1_720p/chunklist.m3u8|Referer=https://www.movie87hd.com/

#EXTINF:-1 tvg-id="CHN" tvg-logo="https://i.ibb.co/f1LV80t/trusport2.png" group-title="13.SPORT",357.True Premier Football 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 6.3; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0
https://sport.livedoomovies.com:4431/02_PremierHD2_720p/chunklist.m3u8|Referer=https://www.movie87hd.com/

#EXTINF:1 tvg-id="TruePremierFootball1.th" tvg-logo="https://i.postimg.cc/vBC00YZJ/20220927-064509.png" group-title="13.SPORT", True Premier HD 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.79 Safari/537.36 Maxthon/5.2.7.3000
#EXTVLCOPT:http-referrer=https://www.youdooball.com/
#https://youdooball.livedoomovies.com:4432/02_PremierHD1_720p/chunklist.m3u8

#EXTINF:1 tvg-id="TruePremierFootball2.th" tvg-logo="https://i.postimg.cc/vBC00YZJ/20220927-064509.png" group-title="13.SPORT", True Premier HD 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.79 Safari/537.36 Maxthon/5.2.7.3000
#EXTVLCOPT:http-referrer=https://www.youdooball.com/
#https://youdooball.livedoomovies.com:4432/02_PremierHD2_720p/chunklist.m3u8

#EXTINF:1 tvg-id="TruePremierFootball3.th" tvg-logo="https://i.postimg.cc/vBC00YZJ/20220927-064509.png" group-title="13.SPORT",357.True Premier Football 3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.79 Safari/537.36 Maxthon/5.2.7.3000
#EXTVLCOPT:http-referrer=https://www.youdooball.com/
https://youdooball.livedoomovies.com:4432/02_PremierHD3_720p/chunklist.m3u8

#EXTINF:1 tvg-id="TruePremierFootball4.th" tvg-logo="https://i.postimg.cc/vBC00YZJ/20220927-064509.png" group-title="13.SPORT",357.True Premier Football 4
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.79 Safari/537.36 Maxthon/5.2.7.3000
#EXTVLCOPT:http-referrer=https://www.youdooball.com/
https://youdooball.livedoomovies.com:4432/02_PremierHD4_720p/chunklist.m3u8

#EXTINF:1 tvg-id="TruePremierFootball5.th" tvg-logo="https://i.postimg.cc/vBC00YZJ/20220927-064509.png" group-title="13.SPORT",357.True Premier Football 5
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.79 Safari/537.36 Maxthon/5.2.7.3000
#EXTVLCOPT:http-referrer=https://www.youdooball.com/
https://youdooball.livedoomovies.com:4432/02_PremierHD5_720p/chunklist.m3u8

#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://i.ibb.co/znJswVm/el.png",Eleven SPORTS 1 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-054/stream.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://i.ibb.co/znJswVm/el.png",Eleven SPORTS 2 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-055/stream.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://i.ibb.co/znJswVm/el.png",Eleven SPORTS 3 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-056/stream.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://i.ibb.co/znJswVm/el.png",Eleven SPORTS 4 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-057/stream.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://i.ibb.co/znJswVm/el.png",Eleven SPORTS 5 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-058/stream.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://i.ibb.co/znJswVm/el.png",Eleven SPORTS 6 PT
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-059/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/x2PJzsZ/dzan.png" group-title="13.SPORT", DAZN DE 1
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-017/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/x2PJzsZ/dzan.png" group-title="13.SPORT", DAZN DE 2
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-018/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/x2PJzsZ/dzan.png" group-title="13.SPORT", DAZN ES 1
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-037/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/x2PJzsZ/dzan.png" group-title="13.SPORT", DAZN ES 2
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-038/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/x2PJzsZ/dzan.png" group-title="13.SPORT", Dazn F1
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-016/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/x2PJzsZ/dzan.png" group-title="13.SPORT", Dazn La Liga
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-043/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/58x8jfh/etilplaydg.png" group-title="13.SPORT", SPORT DIGITAL
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
https://dcf-ak-livedazn.akamaized.net/dashdrm/dazn-linear-022/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/rm9sTWy/etilplay.png" group-title="13.SPORT", PLAY SPORTS 1
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-051/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/rm9sTWy/etilplay.png" group-title="13.SPORT", PLAY SPORTS 2
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-052/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/rm9sTWy/etilplay.png" group-title="13.SPORT", PLAY SPORTS 3
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-053/stream.mpd

#EXTINF:-1 tvg-id="NBA TV" group-title="13.SPORT" ch-number="15" tvg-logo="http://guki.my.id/logo/sports/nbatv.png",NBA TV DE
#EXTVLCOPT:http-user-agent=ExoPlayerLib
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-035/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/3TSxk4H/etelz.png" group-title="13.SPORT", Z SPORTS
http://mag.trexlive.me:80/play/live.php?mac=00:1A:79:C1:3F:BD&stream=1282765&extension=ts&play_token=dUS695Jh75&sn2=

#EXTINF:-1 tvg-logo="https://i.ibb.co/3TSxk4H/etelz.png" group-title="13.SPORT", Z SELECT 
http://mag.trexlive.me:80/play/live.php?mac=00:1A:79:C1:3F:BD&stream=1282764&extension=ts&play_token=6hmCMVvsUn&sn2=

#EXTINF:-1 tvg-logo="https://i.ibb.co/3TSxk4H/etelz.png" group-title="13.SPORT", Z VOETBAL
http://mag.trexlive.me:80/play/live.php?mac=00:1A:79:C1:3F:BD&stream=1282763&extension=ts&play_token=M2D6MnJ87s&sn2=

#EXTINF:-1 tvg-logo="https://i.ibb.co/3TSxk4H/etelz.png" group-title="13.SPORT", Z DOCU
http://mag.trexlive.me:80/play/live.php?mac=00:1A:79:C1:3F:BD&stream=1282762&extension=ts&play_token=iNnTfDdiEq&sn2=

#EXTINF:-1 group-title="13.SPORT" tvg-id="Fox Sports 1 HDTV" tvg-logo="https://i.ibb.co/641Z46t/fs1.png", FOX SPORTS 1 🇺🇸
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4aa03f4ba0b54774accf43d15af7be70:843a421b633ae576f7ad62872d0d71b1
https://cors-proxy.elfsight.com/https://linear-novi.stvacdn.spectrum.com/LIVE/1166/dash/cenc/SPEEDHD/manifest.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="Fox Sports 2" tvg-logo="https://i.ibb.co/6yJ3CKM/fs2.png", FOX SPORTS 2 🇺🇸
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=426b95e246774cb798a8c845fe6333d6:91e511fd8c290134b28c36ee1c386ea9
https://cors-proxy.elfsight.com/https://linear-novi.stvacdn.spectrum.com/LIVE/1108/dash/cenc/FS2HD_00564/manifest.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="TNTSports1.uk" tvg-logo="https://i.ibb.co/kSXJjjv/etel.png",TNT SPORTS 1 🇬🇧
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ae26845bd33038a9c0774a0981007294:63ac662dde310cfb4cc6f9b43b34196d
https://cors-proxy.elfsight.com/https://ottb.live.cf.ww.aiv-cdn.net/lhr-nitro/live/clients/dash/enc/wf8usag51e/out/v1/bd3b0c314fff4bb1ab4693358f3cd2d3/cenc.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="TNTSports2.uk" tvg-logo="https://i.ibb.co/kSXJjjv/etel.png",TNT SPORTS 2 🇬🇧
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=6d1708b185c6c4d7b37600520c7cc93c:1aace05f58d8edef9697fd52cb09f441
https://cors-proxy.elfsight.com/https://ottb.live.cf.ww.aiv-cdn.net/lhr-nitro/live/clients/dash/enc/f0qvkrra8j/out/v1/f8fa17f087564f51aa4d5c700be43ec4/cenc.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="TNTSports3.uk" tvg-logo="https://i.ibb.co/kSXJjjv/etel.png",TNT SPORTS 3 🇬🇧
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4e993aa8c1f295f8b94e8e9e6f6d0bfe:86a1ed6e96caab8eb1009fe530d2cf4f
https://cors-proxy.elfsight.com/https://ottb.live.cf.ww.aiv-cdn.net/lhr-nitro/live/clients/dash/enc/lsdasbvglv/out/v1/bb548a3626cd4708afbb94a58d71dce9/cenc.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="TNTSports4.uk" tvg-logo="https://i.ibb.co/kSXJjjv/etel.png",TNT SPORTS 4 🇬🇧
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=e31a5a81caff5d07ea2411a571fc2e59:96c5ef69479732ae734f962748c19729
https://cors-proxy.elfsight.com/https://ottb.live.cf.ww.aiv-cdn.net/lhr-nitro/live/clients/dash/enc/i2pcjr4pe5/out/v1/912e9db56d75403b8a9ac0a719110f36/cenc.mpd

#EXTINF:-1 group-title="13.SPORT" tvg-id="TNTSports5.uk" tvg-logo="https://i.ibb.co/kSXJjjv/etel.png",TNT SPORTS 5 🇬🇧
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=60c0d9b41475e01db4ffb91ed557fbcc:36ee40e58948ca15e3caba8d47b8f34b
https://cors-proxy.elfsight.com/https://ottb.live.cf.ww.aiv-cdn.net/lhr-nitro/live/clients/dash/enc/gesdwrdncn/out/v1/79e752f1eccd4e18b6a8904a0bc01f2d/cenc.mpd

#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=882c9f5613b43b47adc70aa968a308ce:de534ef8914bfe62ba3cdd6bdb9e1c04
#EXTINF:-1 tvg-logo="https://i.ibb.co/J7w8VNH/usa.png" group-title="13.SPORT", USA NETWORK
https://fsly.stream.peacocktv.com/Content/CMAF_OL1-CTR-4s/Live/channel(usa-east)/master.mpd

#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4d808f2b9a74536cadbd95be141888ed:9dd89f67b8885dc65721a8b1fbeae700
#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://www.viaplaygroup.com/sites/default/files/brands-and-products/vsport_sport1_logo_vert_rgb_pos_1270x270_0.jpg", V Sport 01
https://live-aws-scalstrm-cdn.rikstv.no/live/rikstv/644bb6e91dbc891fd422efc9/manifest.mpd

#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=0d3ff38c34985fdd81a37567646322b9:6b4504297769acefae2e50920b7c8a77
#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://www.viaplaygroup.com/sites/default/files/brands-and-products/vsport_sport2_logo_vert_rgb_pos_1270x270_0.jpg", V Sport 02
https://live-aws-scalstrm-cdn.rikstv.no/live/rikstv/644bb6e91dbc891fd422efef/manifest.mpd

#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=fdcb8ee4623458e5832a92801fc723b1:634a67c44b7b7030872043df95c1a55e
#EXTINF:-1 group-title="13.SPORT" tvg-logo="https://www.viaplaygroup.com/sites/default/files/brands-and-products/vsport_sport3_logo_vert_rgb_pos_1270x270_0.jpg", V Sport 03 
https://live-aws-scalstrm-cdn.rikstv.no/live/rikstv/644bb6ea1dbc891fd422f01e/manifest.mpd

#EXTINF:-1 tvg-id="VIAPLAY" tvg-logo="https://i.ibb.co/Lns6L7T/vp.png" group-title="13.SPORT",Viaplay 🇸🇪
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=d8d0506523d95fc082d6caef60e84979:69992fd2d7b9211d41ecc2243803e87c
https://cors-proxy.cluster.fun/https://live-dash-cdn7-vp.cdn.viaplay.tv/vp/vssp/vssp.isml/index.mpd

#EXTINF:-1 tvg-id="ViaplaySports1.uk" tvg-logo="https://i.ibb.co/Lns6L7T/vp.png" group-title="13.SPORT",Viaplay SPORTS 1 🇬🇧
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4d4ace310f235981bef56897fe94e766:06383cd4cdcc92bb3e83d8ea49245472
https://cors-proxy.cluster.fun/https://live-dash-cdn7-vp.cdn.viaplay.tv/vp/vpsports1uk/vpsports1uk.isml/index.mpd

#EXTINF:-1 tvg-id="ViaplaySports1.uk" tvg-logo="https://i.ibb.co/Lns6L7T/vp.png" group-title="13.SPORT",Viaplay SPORTS 2 🇬🇧
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=6fe6d9cf50835945881cb56a38839fce:213ad868126fd2cb352b189b07b25421
https://cors-proxy.cluster.fun/https://live-dash-cdn7-vp.cdn.viaplay.tv/vp/vpsports2uk/vpsports2uk.isml/index.mpd

#EXTINF:-1 tvg-id="V Sport 1" tvg-logo="https://i.ibb.co/3WpLhwr/vs.png" group-title="13.SPORT",V Sport 1 🇸🇪
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=04c5eaf62cd75f2d947ab4d621f39256:76967598962e7a7314a2b251e9070725
https://director.streaming.telia.com/tvm-packager-prod/group1/6089c17d47a23d76645ceaf4/manifest.mpd|User-Agent="Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0"

#EXTINF:-1 tvg-id="V Sport Extra" tvg-logo="https://i.ibb.co/3WpLhwr/vs.png" group-title="13.SPORT",V Sport EXTRA 🇸🇪
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=bc972382f04c531983b7aab6bf642ad8:ddfd212680eb891b755610eac5becf85
https://cors-proxy.cluster.fun/https://director.streaming.telia.com/tvm-packager-prod/group3/60ae4f5e1522bd739f6959a1/manifest.mpd

#EXTINF:-1 tvg-id="V Sport Football" tvg-logo="https://i.ibb.co/3WpLhwr/vs.png" group-title="13.SPORT",V Sport FOOTBALL 🇸🇪
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ce37e20374e55be6bb4d26837af27605:52cc532f748fcbf2b806dad4289bf84c
https://cors-proxy.cluster.fun/https://director.streaming.telia.com/tvm-packager-prod/group1/60896dfd47a23d7c065cd68c/manifest.mpd

#EXTINF:-1 tvg-id="V Sport Premium" tvg-logo="https://i.ibb.co/3WpLhwr/vs.png" group-title="13.SPORT",V Sport PREMIUM 🇸🇪
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=eab13e69793756eda77d8d71fda90d5d:cd022e9bffa6a0d1523ee5d9fcda9ed4
https://cors-proxy.cluster.fun/https://director.streaming.telia.com/tvm-packager-prod/group1/60896c3647a23d7f115cd57a/manifest.mpd

#EXTINF:-1 tvg-id="V Sport Ultra HD" tvg-logo="https://i.ibb.co/3WpLhwr/vs.png" group-title="13.SPORT",V Sport UHD 🇸🇪
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c02b1c0a644d5aa4b7176ae585c572dc:5a7799ea89ea65e3bac9a10684e616bc
https://cors-proxy.cluster.fun/https://director.streaming.telia.com/tvm-packager-prod/group3/60b76e87baa9d5ddc9262457/manifest.mpd

=================================================================================##### MUSIK-RADIO #####==========================================================================

#EXTINF:-1 tvg-id="" tvg-name="" tvg-logo="https://i.ibb.co/DYZmQvY/nagaswara.png" group-title="11.MUSIK",281.Koplo
https://nagaswarakoplo.fiqriaw8.workers.dev/stream/nagaswarafmbgr/master.m3u8

#https://raw.githubusercontent.com/thefirefox12537/streams/master/nagaswarakoplo.m3u8
#EXTINF:-1 tvg-id="" tvg-name="" tvg-logo="https://i.ibb.co/fHzfd4V/nagapop.png" group-title="11.MUSIK",282.Pop
https://nagaswara-pop.fiqriaw8.workers.dev/stream/nagaswarafmbgr/master.m3u8

#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#EXTINF:-1 tvg-id="Music TV" tvg-url="https://bit.ly/JejeVisionEPG" tvg-logo="https://i.ibb.co/7CgZ7D7/musiktv.png" group-title="11.MUSIK",283.Music TV
https://nyanv-live-cdn.mncnow.id/live/eds/MusicChannel/sa_dash_vmx/MusicChannel.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/G9ZcGMK/prambors.png" group-title="11.MUSIK",284.Prambors
http://xtv.ooo:8080/3212571066/abc123/351020

#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://yang-nyuri-bintitan.openwindows037.workers.dev/
#EXTINF:-1 tvg-logo="https://i.ibb.co/5KRF5VQ/7musik.png" group-title="11.MUSIK", 285.Seven Musik
http://103.199.161.254/Content/7smusic/Live/Channel(7smusic)/Stream(02)/index.m3u8

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="MTV LIVE" tvg-logo="https://i.ibb.co/dQG9K1K/mtvlive.png" group-title="11.MUSIK",286.Mtv Live
https://nyanv-live-cdn.mncnow.id/live/eds/MTV/sa_dash_vmx/MTV.mpd

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://visionplus.id
#EXTINF:-1 tvg-name="MTV 90s" tvg-logo="https://i.ibb.co/TY0P43q/mtv90.png" group-title="11.MUSIK",287.Mtv 90s
https://nyanv-live-cdn.mncnow.id/live/eds/MTV-90-HD/sa_dash_vmx/MTV-90-HD.mpd

#EXTINF:-1 tvg-name="" tvg-id="" group-title="11.MUSIK" tvg-logo="https://i.ibb.co/VHsNTbF/now70.png",288.Now 70
https://lightning-now70s-samsungnz.amagi.tv/playlist.m3u8

#EXTINF:-1 tvg-name="" tvg-id="" group-title="11.MUSIK" tvg-logo="https://i.ibb.co/3mP4G7f/now80.png",289.Now 80
https://lightning-now80s-samsunguk.amagi.tv/playlist.m3u8

#EXTINF:-1 tvg-name="" tvg-id="" group-title="11.MUSIK" tvg-logo="https://i.ibb.co/fQmJ3rw/nowrock.png",290.Now Rock
https://lightning-now90s-samsungnz.amagi.tv/playlist.m3u8

#EXTINF:-1 tvg-name="" tvg-id="" group-title="11.MUSIK" tvg-logo="https://i.ibb.co/xGcLjnX/traceurban.png",291.Trace Urban
https://lightning-traceurban-samsungau.amagi.tv/playlist.m3u8

#EXTINF:-1 channel-id="samsung-USBD3300004RH" tvg-id="USBD3300004RH" tvg-logo="https://tvpnlogopus.samsungcloud.tv/platform/image/sourcelogo/vc/00/02/34/USBD3300004RH_20231024T231908SQUARE.png_20231024231909.png" tvg-chno="1503" group-title="11.MUSIK",292.Xite Hits
https://i.mjh.nz/SamsungTVPlus/USBD3300004RH.m3u8|user-agent=okhttp/4.10.0

#EXTINF:-1 channel-id="samsung-USBD3300008DG" tvg-id="USBD3300008DG" tvg-logo="https://tvpnlogopus.samsungcloud.tv/platform/image/sourcelogo/vc/00/02/34/USBD3300008DG_20231024T231916SQUARE.png_20231024231917.png" tvg-chno="1512" group-title="11.MUSIK",293.Xite Only Love
https://i.mjh.nz/SamsungTVPlus/USBD3300008DG.m3u8|user-agent=okhttp/4.10.0

#EXTINF:-1 channel-id="samsung-USBB4400015F5" tvg-id="USBB4400015F5" tvg-logo="https://tvpnlogopus.samsungcloud.tv/platform/image/sourcelogo/vc/00/02/34/USBB4400015F5_20230322T000025SQUARE.png_20230322000026.png" tvg-chno="1523" group-title="11.MUSIK" ,294.Vevo 2K
https://i.mjh.nz/SamsungTVPlus/USBB4400015F5.m3u8|user-agent=okhttp/4.10.0

#EXTINF:-1 channel-id="samsung-USBD300012YC" tvg-id="USBD300012YC" tvg-logo="https://i.ibb.co/BgVcDNK/vevo80.png" tvg-chno="1521" group-title="11.MUSIK" ,295.Vevo '80s
https://i.mjh.nz/SamsungTVPlus/USBD300012YC.m3u8|user-agent=okhttp/4.10.0

#EXTINF:-1 channel-id="samsung-USBD3000133M" tvg-id="USBD3000133M" tvg-logo="https://i.ibb.co/zm0vfsY/vevo90-1.png" tvg-chno="1522" group-title="11.MUSIK" ,296.Vevo '90s
https://i.mjh.nz/SamsungTVPlus/USBD3000133M.m3u8|user-agent=okhttp/4.10.0

#EXTINF:-1 channel-id="samsung-USBD120002431" tvg-id="USBD120002431" tvg-logo="https://i.ibb.co/MnhLCLT/vevo2010-2.png" tvg-chno="1524" group-title="11.MUSIK" ,297.Vevo 2010s
https://i.mjh.nz/SamsungTVPlus/USBD120002431.m3u8|user-agent=okhttp/4.10.0

#EXTINF:-1 channel-id="samsung-USBD3000145P" tvg-id="USBD3000145P" tvg-logo="https://tvpnlogopus.samsungcloud.tv/platform/image/sourcelogo/vc/00/02/34/USBD3000145P_20230809T005430SQUARE.png_20230809005431.png" tvg-chno="1525" group-title="11.MUSIK" ,298.Vevo Retro Rock
https://i.mjh.nz/SamsungTVPlus/USBD3000145P.m3u8|user-agent=okhttp/4.10.0

#EXTINF:-1 channel-id="samsung-USBC3600008WY" tvg-id="USBC3600008WY" tvg-logo="https://i.ibb.co/1Lrwd3S/vevopop-1.png" tvg-chno="1532" group-title="11.MUSIK" ,299.Vevo Pop
https://i.mjh.nz/SamsungTVPlus/USBC3600008WY.m3u8|user-agent=okhttp/4.10.0

#EXTINF:-1 channel-id="samsung-USAJ3000013FJ" tvg-id="USAJ3000013FJ" tvg-logo="https://i.ibb.co/4sGvsL4/newkpop.png" tvg-chno="1537" group-title="11.MUSIK" ,300.New Kpop
https://i.mjh.nz/SamsungTVPlus/USAJ3000013FJ.m3u8|user-agent=okhttp/4.10.0

#EXTINF:-1 tvg-logo="https://i.ibb.co/Xy2c7sz/kpop.png" group-title="11.MUSIK",301.K Pop
https://marine2.miplay.cl/kpop/playlist.m3u8

#EXTINF:-1 tvg-name="" tvg-id="" group-title="11.MUSIK" tvg-logo="https://i.ibb.co/Df8dfPx/retro.png",302.Retro tv 
http://stream.mediawork.cz/retrotv/retrotvHQ1/playlist.m3u8?wmsAuthSign=InspirationLinks

#EXTINF:-1 tvg-id="Iheart80s" tvg-name="Iheart80s" tvg-logo="https://i.ibb.co/KGt4tns/hearttv.png" group-title="11.MUSIK",303.IHeart 80s
https://iheart-iheart80s-1-us.roku.wurl.tv/playlist.m3u8

#EXTINF:-1 tvg-id="Iheart90s" tvg-name="Iheart90s" tvg-logo="https://i.ibb.co/KGt4tns/hearttv.png" group-title="11.MUSIK",304.IHeart 90s
https://iheart-iheart90s-1-us.roku.wurl.tv/playlist.m3u8

#EXTINF:-1 tvg-id="IMTV.id" tvg-logo="https://i.ibb.co/6yR6M7N/imtv.png" group-title="11.MUSIK",305.Imtv
https://5bf7b725107e5.streamlock.net/imtv/imtv/playlist.m3u8

=========================================== TV NASIONAL DIGITAL ===========================================

#EXTINF:-1 tvg-id="13298" tvg-name="RCTI" tvg-logo="https://static.rctiplus.id/media/300/files/fta_rcti/Channel_Logo/RCTI.png" group-title="NASIONAL DIGITAL ????",RCTI HD
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
http://103.226.232.196:8000/play/a00a/index.m3u8

#EXTINF:-1 tvg-id="MNCTV.id" tvg-name="mnctv" tvg-logo="https://static.rctiplus.id/media/300/files/fta_rcti/Channel_Logo/MNCTV.png"  group-title="NASIONAL DIGITAL ????",MNCTV HD
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 13) ExoPlayerLib/2.13.2
http://103.226.232.196:8000/play/a008/index.m3u8

#EXTINF:-1 tvg-id="13345" tvg-name="GTV" tvg-logo="https://static.rctiplus.id/media/300/files/fta_rcti/Channel_Logo/GTV.png" group-title="NASIONAL DIGITAL ????",GTV HD
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 13) ExoPlayerLib/2.13.2
http://103.226.232.196:8000/play/a00d/index.m3u8

#EXTINF:-1 tvg-id="INews.id" tvg-logo="https://static.rctiplus.id/media/300/files/fta_rcti/Channel_Logo/iNews.png" group-title="NASIONAL DIGITAL ????",iNews HD
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
http://103.226.232.196:8000/play/a01i/index.m3u8

#EXTINF:-1 group-title="NASIONAL DIGITAL ????" tvg-id="" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/7b3b11534b9ac313e5be.png",VTV HD
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 13) ExoPlayerLib/2.13.2
http://103.226.232.196:8000/play/a00p/index.m3u8

#EXTINF:-1 tvg-id="ANTV.id" tvg-name="antv" group-title="NASIONAL DIGITAL ????" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_antv.png",ANTV HD
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 13) ExoPlayerLib/2.13.2
http://103.226.232.196:8000/play/a009/index.m3u8

#EXTINF:-1 tvg-id="Indosiar.id" tvg-name="Indosiar" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_indosiar.png" group-title="NASIONAL DIGITAL ????",Indosiar HD UHF
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
http://103.226.232.196:8000/play/a00l/index.m3u8

#EXTINF:-1 tvg-id="SCTV.id" tvg-name="SCTV" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_sctv.png" group-title="NASIONAL DIGITAL ????", SCTV HD UHF
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 13) ExoPlayerLib/2.13.2
http://103.226.232.196:8000/play/a013/index.m3u8

#EXTINF:-1 tvg-id="mOji.id" tvg-name="mOji" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/95f4745784313c1ab222.png" group-title="NASIONAL DIGITAL ????",MOJI HD UHF
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 13) ExoPlayerLib/2.13.2
http://103.127.96.91:25461/hometv@91/Wdk8VzyYTG/23

#EXTINF:-1 tvg-name="Trans TV" tvg-id="TransTV.id" group-title="NASIONAL DIGITAL ????" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_transtv.png",Trans TV HD UHF
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
http://103.226.232.196:8000/play/a016/index.m3u8

#EXTINF:-1 tvg-name="Trans 7" tvg-id="Trans7.id" group-title="NASIONAL DIGITAL ????" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_trans7.png",Trans 7 HD UHF
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
http://103.226.232.196:8000/play/a015/index.m3u8

#EXTINF:-1 group-title="NASIONAL DIGITAL ????" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_nettv.png",NET. HD
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 13) ExoPlayerLib/2.13.2
https://iptv.filemoon.xyz/mnclokal/live/eds/

#EXTINF:-1 tvg-id="tvOne.id" tvg-name="tvOne" group-title="NASIONAL DIGITAL ????" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_tvone.png",TVONE HD
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0
http://103.226.232.196:8000/play/a010/index.m3u8

#EXTINF:-1 group-title="NASIONAL DIGITAL ????" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_metrotv.png",Metro TV HD UHF
http://103.226.232.196:8000/play/a018/index.m3u8

#EXTINF:-1 group-title="NASIONAL DIGITAL ????" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_kompastv.png",Kompas TV HD
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 13) ExoPlayerLib/2.13.2
https://cdn09jtedge.indihometv.com/dvr/139/kompastv/manifest.mpd

#EXTINF:-1 tvg-id="rtv.id" tvg-name="rtv" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_rtv.png" group-title="NASIONAL DIGITAL ????",RTV HD
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 13) ExoPlayerLib/2.13.2
https://cdn09jtedge.indihometv.com/dvr/139/rtv/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-name="" group-title="NASIONAL DIGITAL ????" tvg-logo="http://app1-oxygen.mm.oxygen.id:12803/oxygentv/assets/upload/channel/tvlogo_mentari.png",Mentari TV HD
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 13) ExoPlayerLib/2.13.2
http://103.150.117.215:25461/hometv@215/Wdk8VzyYTG/11801


============================================================================pilem=============================================================

#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="http://pictures.my.id/images/transporter.png", The Transporter 1 (2002) SUB INDO
http://abf.filmbluray.id/2vaa875
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="http://pictures.my.id/images/transporter2.png", The Transporter 2 (2005) SUB INDO
http://abf.filmbluray.id/exh9v5x
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="http://pictures.my.id/images/transporter3.png", The Transporter 3 (2008) SUB INDO
http://abf.filmbluray.id/fa3r8d7
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="http://pictures.my.id/images/transporter4.png", The Transporter : Refueled (2015) SUB INDO
http://abf.filmbluray.id/epp6jrr
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="https://image.tmdb.org/t/p/w185/lUER1TEMtfk0ZCZGyoiL37pQRNw.jpg", Crank 2006
https://www.googleapis.com/drive/v3/files/1xZ6bN1Ga1RUNed4xwNNoOnNyoIQj8Nlc?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="https://image.tmdb.org/t/p/w185/hr11wG8wwVZCJtRZvkaveyFUxiM.jpg", Crank High Voltage 2009
https://www.googleapis.com/drive/v3/files/1TjRK9QXAnudJFowBl30xVmFmeoH7u32o?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSz0oBnEgb1H2DvHN9Hykgn0Q6n52cVhIR5yg&s", Homefront 2013
https://www.googleapis.com/drive/v3/files/1N7G9EqM4wicMC2b94e1peXiadVXxTzNz?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="http://pictures.my.id/images/exp1.png", The Expendables 1 (2010)  SUB INDO
http://abf.filmbluray.id/3kwb55n
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="http://pictures.my.id/images/exp2.png", The Expendables 2 (2012) SUB INDO
http://abf.filmbluray.id/js54epn
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="http://pictures.my.id/images/exp3.png", The Expendables 3 (2014) SUB INDO
http://abf.filmbluray.id/3pnemqu
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="http://pictures.my.id/images/fast10.png", The Fate of the Furious (2017) SUB INDO
http://abf.filmbluray.id/bzyv12m
#EXTINF:-1 tvg-id="" tvg-name="" group-title="Jason Statham" tvg-logo="http://pictures.my.id/images/fast11.png", Fast & Furious Presents: Hobbs & Shaw (2019) SUB INDO
http://abf.filmbluray.id/vurxfca


#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/zJ2NT7z4vAWaR7GcySAdu1h2kPD.jpg", A Girl in my Room 2023
https://www.googleapis.com/drive/v3/files/19VqES1k9FzUACmxu1jjyiO5yhsiVnp0-?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/tutWATQxKlcrJaQydAT9kuyVG46.jpg", The Deepest Breath 2023
https://www.googleapis.com/drive/v3/files/1766CZq6oSrdTJc4DABRxnREZwDVk7uHl?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/6Jc5JfzMIjFekFZOKXza1mOk13o.jpg", Shazam : Fury of God 2023
https://www.googleapis.com/drive/v3/files/1Xno2T6pZDP9T_w3-q5pBlypMho1K8cMN?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/6Jc5JfzMIjFekFZOKXza1mOk13o.jpg", Shazam : Fury of God 2023
https://www.googleapis.com/drive/v3/files/1Xno2T6pZDP9T_w3-q5pBlypMho1K8cMN?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/dayxfU8ZJAs9hislETbZWzhr5kR.jpg", Rebel 2023
https://www.googleapis.com/drive/v3/files/1hRvtBynFwj0b-J-1AtMt_5VHThJszNKZ?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/tunGZv6c72xu6zuIxmsypr0ccsb.jpg", Guardians of The Galaxy Vol.3 (2023) SUB INDO
https://www.googleapis.com/drive/v3/files/1OZ5urgfhKhF_Bh4oQHewrF6F1wJbJNQy?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/4gn0cUnH3aLCsTPsXXdst5SvA8k.jpg", The Collective 2023
https://www.googleapis.com/drive/v3/files/17d-kFNOUgtRDJigtLYeehdofcbb9WuGK?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://ngefilm21.us/wp-content/uploads/2023/08/nJ7WbBu6oSxbXls06zWLRdfrYyW.jpg", Apaches : Gang of Paris 2023
https://www.googleapis.com/drive/v3/files/1Z5rvX-6XLPJFP2uaRIAr3tuNES-Kv60k?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://ngefilm21.us/wp-content/uploads/2023/02/tLkviJkau1cRMCoAa06R1gkH2Hn.jpg", Waktu Maghrib 2023
https://www.googleapis.com/drive/v3/files/1CAuarha_MQHYBHmD328KBx8csBgCxqqE?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://ngefilm21.us/wp-content/uploads/2023/08/l1f9JSPjCfNftigEii1SDK1g2b3.jpg", Soulcatcher 2023
https://www.googleapis.com/drive/v3/files/1bIz0F3oagBSHkvItQkkrQH1koyem9JHk?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/hfExJPcbBtDeFDEb7I1By72Drlr.jpg", The Three Musketeers d'Artagnan 2023
https://www.googleapis.com/drive/v3/files/1iaC-EOcMl38wZhQmaYDUOzdPFraHB18C?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/yOcCecPZKlsLJK8gwmo7W47DChE.jpg", Scream VI 2023
https://www.googleapis.com/drive/v3/files/1RKmT0KsU50M-JLTIG7ScI6_JkJLz-vos?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/yeK63fHErdVlZAbAlueX0LYZU14.jpg", Plane 2023
https://www.googleapis.com/drive/v3/files/16FOK_mg_eW1T0HD4L64TkN65bL38-HUx?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/sGSzha9K65abyvzBwXXnSV2sHWV.jpg", The Communion Girl 2023
https://www.googleapis.com/drive/v3/files/16OxZD3Yx6ga8tV7fL9thBnYPi3IwHids?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/1UasaSyxKZRhvCKI0Uy0iN2itWo.jpg", Inside Men 2023
https://www.googleapis.com/drive/v3/files/1zmfKvIgjnJVYiLQwcer7wxuQh8xRf1A1?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/1ArLEr1DNpMgurwwtdvZMAYrcu2.jpg", Extractions 2 2023
https://www.googleapis.com/drive/v3/files/1g2yJUVReEI4RR-WAvM4vuQPIEkEn6MsU?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/1ArLEr1DNpMgurwwtdvZMAYrcu2.jpg", Extractions 1 2023
https://www.googleapis.com/drive/v3/files/1QiIcQr5YURw7M7KBEcyO1ZJVehB1GtAg?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/skKG0ZDOdcsR3f0j6ZE6bLdgYLd.jpg", Repeater 2023
https://www.googleapis.com/drive/v3/files/1Xo9mQnGqEDWUFXVMglUy8vJ2cfo8Sl2Y?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/1NUNjHnqlxbFAHPZDYoIY2ON7xl.jpg", Luther: The Fallen Sun 2023
https://www.googleapis.com/drive/v3/files/1Xo9mQnGqEDWUFXVMglUy8vJ2cfo8Sl2Y?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/6QIeZuKirT4cXVpW7ilVZmcRmdK.jpg", The Devils Come at Night 2023
https://www.googleapis.com/drive/v3/files/1N965v5flDmhUyAx1F5PHPreOaDHbzd7k?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/14GDgtgajORAWz2EScV5DbliziO.jpg", Megan 2023
https://www.googleapis.com/drive/v3/files/13UwHPmEGmgFtQnu7CLa8CAbe0SIg0_rK?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://savefilm21.skin/wp-content/uploads/2023/08/ajb1rMiorchfRemYHZCkbV9DBg6.jpg", The Island 2023
https://www.googleapis.com/drive/v3/files/1NXHYVd34GMvBTBJ0zPVMvsUewLJoYoUb?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/ulobyNR62zvI1cKUk1YJ9QwKGkb.jpg", The Assasins 2023
https://www.googleapis.com/drive/v3/files/1pm3DvBUJlGVxz4srjtYq5Q0C6DB9rU-Z?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/qayga07ICNDswm0cMJ8P3VwklFZ.jpg", Resident Evil: Dead Island 2023
https://www.googleapis.com/drive/v3/files/1_D3ofhbLiAGfh4rjONboXcn53iOYD9LT?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/rHXtycmeBrCM5c5zyktp4KSyBjj.jpg", Evil dead Rise 2023
https://www.googleapis.com/drive/v3/files/1CljM1Ht_SBCUeX-J0Y-JdbpM6QhALtHF?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/qVYE8g6zNbTbaptUyWkCN7njkC3.jpg", The Pope Exorcist 2023
https://www.googleapis.com/drive/v3/files/1dc4y6bhfhS939gCzWlmT7rdStSMn6DD4?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/hBhydcdZuDmGIHfT5uzwIeUAJ6Q.jpg", The Wandering Earth 2 2023
https://www.googleapis.com/drive/v3/files/13b61Vgk5pHrCalmnZdKk7GaDajj6SI-v?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/wjD5TE4d7h1ImKfZI3aN1xFRYPl.jpg", The Six Five 2023
https://www.googleapis.com/drive/v3/files/1A8Ffylt8IDVbnHNCMn7ZOcwrirbblhEV?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/2HRHjwJKfXAYmtbdBvVIzZ4PZJN.jpg", Cross Fire 2023
https://www.googleapis.com/drive/v3/files/1o_A2i21pdtcUy-5DDP0P3QnIfnqJNskx?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://savefilm21.skin/wp-content/uploads/2023/08/iclmQs4O5dy7EAkbykI1qkowfK2.jpg", I am Rage 2023
https://www.googleapis.com/drive/v3/files/16rtscQ_FvugGesIlY1I__8AeW5QULuU5?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://savefilm21.skin/wp-content/uploads/2023/07/epic-tails-pattie-et-la-colre-de-posidon.154-254195-170x255.jpg", Epic Tails 2023
https://www.googleapis.com/drive/v3/files/1dVn1QYhzaW3bKvmkrCeWWVI9l3gGk_zo?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://savefilm21.skin/wp-content/uploads/2023/07/gHkkHjygqfgLbC8ST3VTdGh2pwd.jpg", The Unseen 2023
https://www.googleapis.com/drive/v3/files/1lcZHGWyuQuepauNz5ynm5o-2IggptVZD?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/vxDIPfY2UCxSzuoxliuqyt57IoQ.jpg", Hidden Strike (Jackie Chan) 2023
https://www.googleapis.com/drive/v3/files/1ZI3ZVcja4f-vqMuNPJ_UPvrGS1u4YbVw?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://savefilm21.skin/wp-content/uploads/2023/06/ym1dxyOk4jFcSl4Q2zmRrA5BEEN.jpg", Little Mermaid 2023
https://www.googleapis.com/drive/v3/files/1K0my3JWD88PgNKFoOZ-jJlqrnwfHIug9?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/Af4bXE63pVsb2FtbW8uYIyPBadD.jpg", Indiana Jones 2023
https://www.googleapis.com/drive/v3/files/1y3pMyrnkhiCXVWoOYAxl0PZK9HLHUq7l?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/bQrNm5WIWUpCOwMbyz2PwbM8Lxp.jpg", Operation Fortune 2023
https://www.googleapis.com/drive/v3/files/1c4U2TXqhN0J9-xB8iPi-4YW98prvOgwx?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/1E5baAaEse26fej7uHcjOgEE2t2.jpg", Fast X 2023
https://www.googleapis.com/drive/v3/files/19BIHs4yQJp8Qonltfj_vBRoAmvzFwNSc?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/oGsxGrviqmTnMDSSNsyPQMgPqhn.jpg", Ride On (Jackie Chan) 2023
https://www.googleapis.com/drive/v3/files/19gW7HRuunyKnj1cGQs5QWWi0l5M850-Q?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/8CYSvYTw9tbFynivdcBcoqRWPGM.jpg",Chapter 4 2023
https://www.googleapis.com/drive/v3/files/1RBWHlw-AZK5YC0WgLZC1kBgNCqc99rlG?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/aX0H63vho7rZ9Rm3I567Zf00Z1t.jpg", Guys Ritchie : The Covenant 2023
https://www.googleapis.com/drive/v3/files/1h5s6LtCeFmH8DBhe2MBuddfB-HFlmvhu?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://ngefilm21.us/wp-content/uploads/2022/07/62HCnUTziyWcpDaBO2i1DX17ljH.jpg", Top Gun : Maverick 2023
https://www.googleapis.com/drive/v3/files/1L_DGAacQq7b0sl-PmCGHV8QG02nx-mot?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://ngefilm21.us/wp-content/uploads/2023/06/rktDFPbfHfUbArZ6OOOKsXcv0Bm.jpg", THE FLASH 2023
https://www.googleapis.com/drive/v3/files/1W9S1jFgVh5uk9FxBD6AnJqTqy8KUryGi?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://ngefilm21.us/wp-content/uploads/2023/08/jsD9Xno9bCaDtGm6Av9yr4T5SUq.jpg", Khanzab 2023
https://www.googleapis.com/drive/v3/files/1wSU_K1LqzXRYh7pJBOb3KRbDehdb9K5c?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://ngefilm21.us/wp-content/uploads/2023/08/uDAKg2wkjmQX7rvLVpdBKXgR07P.jpg", Buya Hamka 2023
https://www.googleapis.com/drive/v3/files/1wWj9ahUny8yks1oVqnpx0qBNwUD1ZhTy?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://ngefilm21.us/wp-content/uploads/2023/07/gukSJNCDL2Xx8XB9PE5bL5qBOBQ.jpg", Hidayah 2023
https://www.googleapis.com/drive/v3/files/1M4sgBpqowB9y0LOS4FJC_w7l714UV5H2?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://ngefilm21.us/wp-content/uploads/2023/06/gPbM0MK8CP8A174rmUwGsADNYKD.jpg", Transformers: Rise of The Beast 2023
https://www.googleapis.com/drive/v3/files/1PMlEq8TpVqvGLhKzy4aVHs7uXEldDRQR?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://ngefilm21.us/wp-content/uploads/2023/08/5ffWHZsYabHOBfYRJucDgZMoFzl.jpg", Insidious: The Red Door 2023
https://www.googleapis.com/drive/v3/files/1Rqw9abn8KZu3L0GKB6ONiRCbriQeXSCv?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://ngefilm21.us/wp-content/uploads/2023/02/zWq0RoV8d913lZF9AMVsGRgqpR4.jpg", Perjanjian Ghaib 2023
https://www.googleapis.com/drive/v3/files/1QuS2TESkZsFynYqQHLI6NqknBt_I-N9R?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/6kpsOtpJe7D6Jrs1QvCMbMEQdeU.jpg", Heart of Stone 2023
https://www.googleapis.com/drive/v3/files/1I6sIo-NLoDCp1NP_OauljO2NNdEzDcq9?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-id="" tvg-name="" group-title="MOVIE 2023" tvg-logo="https://image.tmdb.org/t/p/w185/9dTO2RygcDT0cQkawABw4QkDegN.jpg", Kamen Rider:Shin 2023
https://www.googleapis.com/drive/v3/files/1iTwYHXTP6u99oGvibP7SCwY8jIHYyZKB?alt=media&key=AIzaSyDrQ86QJRiJlyPcLFYdxT22_oC2H1verR4
#EXTINF:-1 tvg-logo="https://i2.wp.com/terbit21.com/wp-content/uploads/2023/07/r2J02Z2OpNTctfOSN1Ydgii51I3-150x225.jpg" group-title="MOVIE 2023",Guardians of the Galaxy Vol. 3 (2023)
#EXTVLCOPT:http-referrer=https://t21.press/
https://larabit.link/download/driveid-165168-webdl-1080-terbit21-com-guardians-of-the-galaxy-vol-3-2023.mp4
#EXTINF:-1 tvg-logo="https://i2.wp.com/terbit21.com/wp-content/uploads/2023/06/gPbM0MK8CP8A174rmUwGsADNYKD-150x225.jpg" group-title="MOVIE 2023",Transformers: Rise of the Beasts (2023)
#EXTVLCOPT:http-referrer=https://t21.press/
https://maxbit.link/download/driveid-163750-hdcam-720-terbit21-com-transformers-rise-of-the-beasts-2023.mp4
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPH8WAOpyxCg4OqOHq8Mb62Wwqg1uqdT0SQw&usqp=CAU" group-title="MOVIE 2023",AntMan & The Wasp Quantumania (2023) Cam
https://1w61yw.bn.files.1drv.com/y4m8UXhfIG370pBt4WSO5h6IFOuvwmraw5Y0RwaCweWGDM2aPTzpQTSPqMLHDRUtHoU4KhyY2kMIHjAgtR0vIf9VSJsoL4qb1VW6wXfO4OseNzTwxS0kAcLGwfnDPx7PdY-NL_FdyhExR9XhTvP9LWxGkYIh1EdFc471BHVqCWBns-fEAofXBScelmm9QliwtKf50z1aHHnKJim_2iOayKLcw
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfRbsXMGjwmRCkWJdIISWLpgdX4dWsKgP--A&usqp=CAU" group-title="MOVIE 2023",Ambush (2023)
https://dej3pa.bl.files.1drv.com/y4mRJktXu5Fz45U8uqe-kwVhQewwDY8KDOCIs7bpz_xUCw3J3Dvu0Dnj-T2BtNEKAJqcjkxNZU-XmHHKGjv55m7_nZpY4WWso2DrRLtuWRfKeTznPwKwILwVwPVQByy1FOxQ_qoAw74fXm3Oof3v81WAzhe2LifGZoFexgr6cvI_6unLnD70hYgR9wWmkI8Dk-BcDpNxAOU3YUEsfz5rusqIQ
#EXTINF:-1 tvg-logo="https://i.ytimg.com/an/Xt0q2bHBzd0/14035041647842474454_mq.jpg?v=63919330" group-title="MOVIE 2023",Candy Land (2023)
https://wxkrnw.bn.files.1drv.com/y4mrD8SmhFYCGWfa9dhm_KbSXiDH3bQTOuFtVIlQRH2wUR4v1-O5aDoBNZeqhWDKnK90flm1m0UL406TqjxYQOTfZKpRbXRcCSnGdl8hR3fE_QkgrafjAGKLsKte-YZ222_BpqXPZt4vf7BvCW45OGr6Q7yGksjoAu3dOx4lpz7t_f3JGYVvFpd86LaWviZz1PUvifQ2a96x0vGrKj8kPqNgw
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1TVTSxbarRRFyd24dzYPy_N1VzyUfLL3eKA&usqp=CAU" group-title="MOVIE 2023",Consecration (2023)
https://1w4avw.bn.files.1drv.com/y4mXj6BDLNSK13_BlmYSRAXAXFHTSqAkNLPEQSo2x4LIpxKHzH1k4QhwrTOvn3wWVsqQybEPUlFvS81roSo1FFRlpdt8PDeR4cTKfElwHOHQDlZXhLzPz08G4OUERSp0jFCAgaON4yCVaFNSOOx_Uom74JfJfN-kcAOYVqkeaWDs5ZN0XR1Ig2EveThcGtdJuIp5EBn3i1H6AgSJfd0mhh_bw
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTn6qbLQsROCAegZ9wJJOf23zgr4Cu4CW60HA&usqp=CAU" group-title="MOVIE 2023",Detective Knight Independence (2023)
https://dehcya.bl.files.1drv.com/y4mI61EJ8VzFkQsrnEnglIfijYZtT-4J7ww-EpPU_i6WubMqeG1XvX1FFT1ian5d6ZN_LYIJ6HYkGFm8B1qKryUlOayTLgu4-Baka1Bn1p2jRS_tTwmrHoGxRzfZpVLDXPOUkUxOBIhSTGbPWaXaQKqMMaV8Rc6rrfRYYPbItdTE0_EYqamlN6y5Yzjmc2yN2AMTtDiKnINacVdlmcQJepJFg
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAx1jkfle9qRhG7VBnKaZtVY3EZBPPIa-QXA&usqp=CAU" group-title="MOVIE 2023",Domme (2023)
https://prgreg.sn.files.1drv.com/y4mGkwmdfDXemPikJVjbAJ2vWFh4DMsAjBl4j9VACsJKGpfNob1wgsJVZu465u72zV9E7f2U1PG2VQ3ikkgi_xOX3eTBUD2tLygp-6cAIVfZ9f-RIv4SZS774B-7Nu3PDuFO1oXTFsgpLHf7g2-zdedddW_nM14nQVxwBnDDN6XwUqIyZIZwaXvTFi9CKMFwrXECoYbr2YJe7vc-qjm6vVBuA
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNV3n_ThGCzQq8t6pBUqYUarlyczQ7pZMysQ&usqp=CAU" group-title="MOVIE 2023",Fast X (2023)
#EXTVLCOPT:http-referrer=https://t21.press/
https://ef1.ruby.gift/play/driveid-163592-webdl-1080-terbit21-com-fast-x-2023.mp4
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSIKWWXa1rrBcg29bCXsv_NfPRWxcCp-2Z2g&usqp=CAU" group-title="MOVIE 2023",Gangnam Zombie (2023)
https://os9rtq.bn.files.1drv.com/y4mp6OqS9_R25sCWGl5aBcVZ1dfPqGHMo8vCJ2N53b1CGoF0XuujIT92_sMajPd3BF5eoO1bufQYN7KWF2-2DfAZ3VpDnRzC7eFpwmalY-0j9j2dy-dkhiq7uHV-pRNRNGIwFotIRuMiaolMnTZhqwT-q3AoZi4j5--Y2jYQu5Vy5kngfr6-8OgDq8Hyut4pqs4sHUexysqR77ycQwyFJKmgw
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGuSOL-ZV4hd6OQPGSbJ6Qj9ulHxTvVN9YQg&usqp=CAU" group-title="MOVIE 2023",House Party (2023)
https://www.dropbox.com/s/k4ww0fi8co8wmtt/dzifp-housepart2023.mp4?dl=1
#EXTINF:-1 type="movie" tvg-logo="https://i2.wp.com/terbit21.com/wp-content/uploads/2023/05/pD1o9B0ibENdNroYrBCQemG2jnr-1-146x218.jpg" group-title="MOVIE 2023",Last Sentinel (2023)
#EXTVLCOPT:http-referrer=https://t21.press/
https://ef2.ruby.gift/play/driveid-160588-webrip-1080-terbit21-com-last-sentinel-2023.mp4
#EXTINF:-1 type="movie" tvg-logo="https://i2.wp.com/terbit21.com/wp-content/uploads/2023/05/8OyzvMrVx2tXjyJiE3GZpvaXE2T-146x218.jpg" group-title="MOVIE 2023",Invitation to a Murder (2023)
#EXTVLCOPT:http-referrer=https://t21.press/
https://ef2.ruby.gift/play/driveid-160591-webrip-1080-terbit21-com-invitation-to-a-murder-2023.mp4
#EXTINF:-1 type="movie" tvg-logo="https://i2.wp.com/terbit21.com/wp-content/uploads/2023/05/n8ZpMwYT02XjpQHpSxn1eJw5Zpz-146x218.jpg" group-title="MOVIE 2023",Crater (2023)
#EXTVLCOPT:http-referrer=https://t21.press/
https://ef3.ruby.gift/play/driveid-161845-webdl-1080-terbit21-com-crater-2023.mp4
#EXTINF:-1 type="movie" tvg-logo="https://i2.wp.com/terbit21.com/wp-content/uploads/2023/05/vnRthEZz16Q9VWcP5homkHxyHoy-146x218.jpg" group-title="MOVIE 2023",The Mother (2023)
#EXTVLCOPT:http-referrer=https://t21.press/
https://ef1.ruby.gift/play/driveid-161848-webrip-1080-terbit21-com-the-mother-2023.mp4
#EXTINF:-1 type="movie" tvg-logo="https://i2.wp.com/terbit21.com/wp-content/uploads/2023/05/cxSKca4dNlk7O7PMiEYT203vlIw-146x218.jpg" group-title="MOVIE 2023",One Day As a Lion (2023)
#EXTVLCOPT:http-referrer=https://t21.press/
https://ns2.ruby.gift/play/driveid-161063-webrip-720-terbit21-com-one-day-as-a-lion-2023.mp4
#EXTINF:-1 type="movie" tvg-logo="https://i2.wp.com/terbit21.com/wp-content/uploads/2023/05/p6yUjhvNGQpFZilKwOKbxQ1eHlo-146x218.jpg" group-title="MOVIE 2023",Renfield (2023)
#EXTVLCOPT:http-referrer=https://t21.press/
https://ef3.ruby.gift/play/driveid-161135-webrip-1080-terbit21-com-renfield-2023.mp4
#EXTINF:-1 type="movie" tvg-logo="https://i2.wp.com/terbit21.com/wp-content/uploads/2023/05/yMeKoe3ui4Pad8FUOJwCby3SOWe-146x218.jpg" group-title="MOVIE 2023",Death's Roulette (2023)
#EXTVLCOPT:http-referrer=https://t21.press/
https://ef2.ruby.gift/play/driveid-161866-webdl-1080-terbit21-com-deaths-roulette-2023.mp4
#EXTINF:-1 type="movie" tvg-logo="https://i2.wp.com/terbit21.com/wp-content/uploads/2023/05/s0Qx9YL1JSpYKm1hu0Ovj0IJ1SN-150x225.jpg" group-title="MOVIE 2023",Dead Shot (2023)
#EXTVLCOPT:http-referrer=https://t21.press/
https://ef2.ruby.gift/play/driveid-161834-webrip-1080-terbit21-com-dead-shot-2023.mp4
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnpMcvoZz8oeo7vUGCKh1TIKQbW09h0Hyc-Q&usqp=CAU" group-title="MOVIE 2023",Jung-E (2023)
https://v9jsrq.bn.files.1drv.com/y4mIzWm6ep4dLlpJl5yidqxs4KMCY7jn702X2KPd7KP3ssVrPk6oacEY3bes9PEPh56RH9S4VZsbqyZunuJgRdWNfNlK96O-MjjFDusSnfDlgqrvfspAYxdpyN-gzF_IrrskC8Jh-st-KhHJQHHp9UKqc69Nu5BjvrY7yQr2qsTBo7O0XpCIid055xcpoPYsbJYJWDQg6vRJr8oV2DjfUvXWw
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSz2r9G8oGoZwP7Dpp24tJsiDuayeotkh5ExQ&usqp=CAU" group-title="MOVIE 2023",Legions (2023)
https://www.dropbox.com/s/dp9fgcucj73ch9i/D21.FUN-Legions-2023-1674958792.mp4?dl=1
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRslP6dayRtg4x1TrABFWCfdmpggJJJbWK8Uw&usqp=CAU" group-title="MOVIE 2023",Love At First Kiss (2023)
https://d72ljg.bl.files.1drv.com/y4midZer4jCfLV7bz2kNqUN08ZH4e_Yo_V_WgNZ_2ZNuctrCLL3uWwq6yJTjAe0a47Pa5Rkr_zEDmUEgUSqRHxn_fv-5ueR8WpqmAkbCwPhBLur31-9V8Ltk4hcToahJdGuHyGLAlVUlCCCoXEL2Tkr9lxLvSlDv_qR_fK4-LOoubEOa01XXhrpt4KgDNTT_xgJw80UBHMMe7dTlC-kGa43iA
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7SalnP7kyCyrYpGuXAGcrJSONAFNFggERXw&usqp=CAU" group-title="MOVIE 2023",Magic Mike Last Dance (2023)
https://dehxnq.bl.files.1drv.com/y4mkaUL9fMZggtGm7_eyciaMdjfBXxA-AatfjJYtXL_IxEsTtixDc850hHlyHBwegl7wcI9iFBIJOzgzpCn7W7o8nKsauhijkVgQDSZCsws98f1cx5YIM7e6A7QLylMZL09aLaAusYZs8IUSOD6eBv9FBUqdJT0iJ59U1vy9xFrvFkbe34iTzjnpJZa7jHrHPCwwwks67RE0uY65kp1NGgxCw
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK07FNygIyiztFOa7FwY8JsRjPjJTN6_CU9w&usqp=CAU" group-title="MOVIE 2023",Missing (2023)
https://1uncpg.bn.files.1drv.com/y4mDH850VcBg2R2C5ivleS0mjjIP9zqdWTWbvHBKK5aeZnnakb97ad1QMFkcux63aL64UwAdE9VjwB5EODfgkAx6plmaB2nZytm1iHfnaaFmCiriRhkS0UoIlyHkBLyU11XtUS9feLVp3OcovNJSHiObjptohExmmVbHOhvGGgHTtquUjOU0f283H1N-CIQQ3HKwu6bUa-vcn3uO-efVjafVQ
#EXTINF:-1 tvg-logo="https://img7.cdn.cinoche.com/images/fe290c3d75e8a53c841f12edfe820b8a.jpg" group-title="MOVIE 2023",Night Train (2023)
https://www.dropbox.com/s/ctr2usfjv9bphwy/D21.FUN-Night-Train-2023-1674777782.mp4?dl=1
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMV0JnsaohDhYoE_aLMOI8zIyz7Uhr2Er48A&usqp=CAU" group-title="MOVIE 2023",Panther Swat (2023)
https://osqqqa.bn.files.1drv.com/y4mY-uslm7LZjbUzNqDXfKhvlMh35DY_RZlX2UNmil6xc8bSY4A73ayRknCknz0TPw92Tl5XK90enhqpIrQOjk-btqK0HXZO84jQ9P_dvNK1hMTCYYH26yyDHOtnpThvObAX-gzCJu091GsuZSzidURzn_A3KLy-W0wUWf_w-ilJnaqN3X7B2_hMvqB5lNgk633EksXk5SfwVrwqQs0JVLVrg
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQF8XOSYAeR1V7TbOmLm-mHpu4t86Zayq-HA&usqp=CAU" group-title="MOVIE 2023",Plane (2023)
https://www.dropbox.com/s/bmvat7xcbxxvx4j/D21.FUN-Plane-2023-1675423071.mp4?dl=1
#EXTINF:-1 tvg-logo="https://upload.wikimedia.org/wikipedia/en/1/1f/Peter_Pan_%26_Wendy_poster.png" group-title="MOVIE 2023",Peterpan & Wendy (2023)
https://www.dropbox.com/s/mg94zxkcfjoedvq/D21.FUN-Peter-Pan-Wendy-2023-1682681957.mp4?dl=1
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHylI1lWr_n86mgJ7EKj7AwKTrwZ78XH813g&usqp=CAU" group-title="MOVIE 2023",Supercell (2023)
https://www.dropbox.com/s/rvofrvr53a2wva0/dzifp-supercell2023.mp4?dl=1
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXFa8mfPMJyfnxsiuAapEl0FfaM-CM3Fy48Q&usqp=CAU" group-title="MOVIE 2023",The Devil Conspiracy (2023)
https://www.dropbox.com/s/sivvl3w17h0n6d6/D21.FUN-The-Devil-Conspiracy-2023-1677941881.mp4?dl=1
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-AuyboR1pLnqgqV_L1uD8Rgz5rtU7GkMeRA&usqp=CAU" group-title="MOVIE 2023",The Girl Who Escaped:The Kara Robinson Story (2023)
https://nsg5bq.dm.files.1drv.com/y4mNjakybgeh-ZU6uq253IAlNMXwaeZZ_BfrU0ybWWPL1n_ftSCgNwc1_cjFH16oCmJvXZT6I5sILrmd4ZQqV7Ylsjg4OekVvpUUgtpqpONgGBDAEE64UvGfxqiKM3eQWsYWnHmWtLA46YuV0x9q8UBgy61Laszmz0G_dxQl5XTfvtT7KonaxJx0p3EOZCZ9uBGnNq3jhvfR8Wwk1JPyawN3A
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBJMiSnhpf2-5uINkdqEimQxu0Ygj9qg5PiA&usqp=CAU" group-title="MOVIE 2023",The Park (2023)
https://8kpldg.dm.files.1drv.com/y4mXK2VOY_h17-VDctu6u-iu5ghwJLJo-1IbvR3UdUITcDueslfSG1g4gF8oPDWeu0yQTdckmnr-JNXIZU8KcwE8us0bY1o4_E6T6lK4a-K1owPjCNxJu_P0VO6aQBXx7lvpzvuKNQpfkPDMNz4RnK5qTojhWpwjJr11-LlgepIiKTLbJ23kKuqARDe8NIrZpGFdvR1c2BqYgMNY0RUXhyKig
#EXTINF:-1 tvg-logo="https://s6.makimbo.xyz/wp-content/uploads/2023/02/film-the-point-men-2023-lk21-d21.jpg" group-title="MOVIE 2023",The Point Man (2023)
https://d70ksg.bl.files.1drv.com/y4mIr9UBkryS4f2HBVTqu4f5dNCKq0nBd5NBNX1OS92SZHdY3xKnba3Vw85VKg0UOByEZVqUy4gn50wAnvivYVbdW3wVWTRD70X1Q4r-HMcoBIhdXvPwJy8u0xDcTLOETXB7c9NBd6hFyyTe5bwIPPJcwPbiTyMVTMulbiDZ-PHzT148F-hLpjlL3FqqOyYLYZdOFMC6K-QjhngUhtragV1rg
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8tQ3iY59mZUR2vwlW8NkBheBTlgd5Tu_jMg&usqp=CAU" group-title="MOVIE 2023",The Ritual Killer (2023)
https://rzwang.sn.files.1drv.com/y4mWM88yWuK8ZM-Uxp8O3OXlaLd1z1Yj371r2iiiHsfuN9bfvmcsYKCrGjFfybMT1ywIjznvgBADeAva2hMS2vfHGO4tyDDaNlg9LAmWaJn62OKog7kvtJwIZF3A5Am6tGICdJ6EwQ4dTgOdI5mTS8S2Bi6BnHxcVC7VJYu6YHlezJ3ODHkBFYO-kOMBcMuPd-HbqfYLSiRzhCg9qRLwMHoLA
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-lmPlqROh8byvjOs_nWpMMDX7_q3RIBsMTA&usqp=CAU" group-title="MOVIE 2023",The Super Mario Bross Movie (2023)
https://www.dropbox.com/s/jcq80k98w4al71r/driveid-160454-hdrip-1080-terbit21-com-the-super-mario-bros-movie-2023.mp4?dl=1
#EXTINF:-1 tvg-logo="https://m.media-amazon.com/images/M/MV5BMTFkM2EzMjItYzdmNS00OGE3LThlNmYtZWM5MmU4NDI3N2I5XkEyXkFqcGdeQXVyMTAxMTM4NzU@._V1_FMjpg_UX1000_.jpg" group-title="MOVIE 2023",Tonight You Are Sleeping With Me (2023)
https://dejwka.bl.files.1drv.com/y4m3apa3Z8UzavP7dTzRto86QOUa5KST4zazdGlUtdijtl4jKxHaq1bASyhZfY8J_T1OShyZrKGQaN5iv1tGH8HANxNWbj5gEheuVZ73Mwg6QckLliXq6o22UOixj7ci9AkCXd9Bk9qQDBUm2aDGZ8ktmkMgAB6oWmBNTYlV2D5c-12UOysQqUmkTexDR_kiPb62mb3RN90DjmAgVYbWlzY1Q
#EXTINF:-1 tvg-logo="https://asianwiki.com/images/f/f1/Stolen_Identity_Korean_Movie-p1.jpg" group-title="MOVIE 2023",Unlocked (2023)
https://www.dropbox.com/s/50xasxs7dpqp892/dzifp-unlocked2023.mp4?dl=1
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEit5fixHp9gSvOReTJbcjbkGsAFPD5RqY-g&usqp=CAU" group-title="MOVIE 2023",Unwelcome (2023)
https://d71amw.bl.files.1drv.com/y4mZy-3nzCjN4rZVz5s8UvThmii2bL0aSpcnyfNvDI1iTnooezXNhDjtS4YfvPdvcOzYXbiWhkgWr1z835TPx6820ZQIPHGsBUHVjJrfiZ2Lgk0Xb5mWWKT1swvbOXLJ0BAYUXg_dNp7pypl2vGPMciolaQ6WynbqvR_YwwwWsg3wyst0wBbTbjbki6WM3suPhB-Phgw0Xm1YIwlR5fbvlo3Q
#EXTINF:-1 tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqL8zEfnW61W5koZRS3UB6lTFa8bCY5AEjbg&usqp=CAU" group-title="MOVIE 2023",We Have A Ghost (2023)
https://os8ncq.bn.files.1drv.com/y4msw_INM7T5PYVeetJc4Yk5t78BXaBIjVgZ6LaxPaQ_KPjdetQN07WQMOwvKQAspuzoU5zuBHW0_IxQ6mjynZTo3bfEdUnOSFIxPtssgKda1hNi5xQa2mHya3JMiSRGJW9KtEKkDty3lWi2N3wneYfpEqmfOM6OsTyvMw9H8tsOqKDL1h9859iEQd_oGkl6C2jH1CpERhmqWDSXN2eKljXtw

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



=================================================``````` WC QF ````````===============================================================================

#EXTINF:-1 group-logo="https://digitalhub.fifa.com/transform/83cb026b-fd8b-423a-875a-46894cdab3ac/FWC26_Qualifiers_Logo_White_transparent?io=transform:fill,height:128&quality=75",

#EXTINF:-1 tvg-id="Sportstars 3 - [Channel 99].id" tvg-name="Sportstars 3" group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇮🇩
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://nyanv-live-cdn.mncnow.id/live/eds/MNCSports3-HD/sa_dash_vmx/MNCSports3-HD.mpd

#EXTINF:-1 tvg-id="Sportstars 3 - [Channel 99].id" tvg-name="Sportstars 3" group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇮🇩
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://nyanv-live-cdn.mncnow.id/live/eds/Soccer-2/sa_dash_vmx/Soccer-2.mpd

#EXTINF:-1 tvg-id="RCTI" tvg-name="RCTI" group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇮🇩
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://nyanv-live-cdn.mncnow.id/live/eds/soccerchannel-test/sa_dash_vmx/soccerchannel-test.mpd

#EXTINF:-1 tvg-id="Sportstars 4 HD - [Channel 424].id" tvg-name="Sportstars 4 HD" group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇮🇩
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
http://nyanv-live-cdn.mncnow.id/live/eds/Sportstar4/sa_dash_vmx/Sportstar4.mpd

#EXTINF:-1 group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇸🇬
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=cdb834a4f2fd413a8e50d1a7170701d2:3d6ae85b34e8aac7488c780cea215306
https://tglmp04.akamaized.net/out/v1/6b351c6bf46a43d998e3f86b69cbce4f/manifest.mpd

#EXTINF:-1 group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇸🇬
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=cdf0001f693942da990fe81afa3eb0cd:6b8d4bc58615439954851eeda771f417
https://tglmp02.akamaized.net/out/v1/6e5a888d4bf847a2be521c55f7bfd08c/manifest.mpd

#EXTINF:-1 tvg-id="Thairath TV HD.th" group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇹🇭
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4b2bff3e598043cfaf949305e3d153fa:545df84ff4c54af6b5385516e0f65956
https://ubn-streamer1.cdn.3bbtv.com:8443/3bb/live/32/32.mpd

#EXTINF:-1 tvg-id="Thairath TV HD.th" group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇹🇭
#EXTVLCOPT:http-referrer=https://ais-vidnt.com/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36
https://49-231-37-37-rewriter.ais-vidnt.com/ais/play/origin/live/eds/V0013/DASH/V0013.mpd

#EXTINF:-1 tvg-id="" group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇴🇲
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://partneta.cdn.mgmlcdn.com/omsport/smil:omsport.stream.smil/index.m3u8

#EXTINF:-1 group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇭🇰
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36 OPR/105.0.0.0
https://rthktv32-vos-live.akamaized.net/Content/HLS/Live/channel(rthk_ch32)/index.m3u8

#EXTINF:-1 group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇮🇷
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36 OPR/105.0.0.0
https://cdnw.telewebion.com/tv3/live/playlist.m3u8

#EXTINF:-1 group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇮🇷
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://cdn-bsht1c84.telewebion.com/tv3/live/720p/index.m3u8

#EXTINF:-1 tvg-id="" group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇦🇪
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://tr-live-route.adm.tcon.hlit.hvds.tv/Content/Channel/AbuDhabiSportsChannel1/HLS/variant.m3u8

#EXTINF:-1 tvg-id="" group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇦🇪
https://dmitnthfr.cdn.mgmlcdn.com/dubaisports/smil:dubaisports.stream.smil/index.m3u8

#EXTINF:-1 tvg-id="" group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇦🇪
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://svs.itworkscdn.net/smc4sportslive/smc4.smil/playlist.m3u8

#EXTINF:-1 tvg-id="" group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇰🇼
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://kwtspta.cdn.mangomolo.com/sp/smil:sp.stream.smil/index.m3u8

#EXTINF:-1 group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇧🇭
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://5c7b683162943.streamlock.net/live/ngrp:sportsone_all/index.m3u8

#EXTINF:-1 group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇶🇦
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://liveakgr.alkassdigital.net/hls/live/2097037/Alkass1xtgnnb/master.m3u8

#EXTINF:-1 group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇶🇦
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://liveakgr.alkassdigital.net/hls/live/2097037/Alkass2uycevvnb/master.m3u8

#EXTINF:-1 group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇶🇦
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://liveakgr.alkassdigital.net/hls/live/2097037/Alkass4xtgbab/master.m3u8

#EXTINF:-1 group-title="World Cup 26™ Qualifiers" tvg-id="" tvg-logo="https://i.ibb.co/hgSyb8F/wc2026qualifiers.png", World Cup 26™ Qualifiers 🇶🇦
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://liveakgr.alkassdigital.net/hls/live/2097037/Alkass5xtgnb/master.m3u8

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