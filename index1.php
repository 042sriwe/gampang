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

#EXTINF:-1 tvg-logo="https://i.ibb.co.com/YQV6sfZ/sukis3.png"" group-title="INFORMASI", Gratis...tis...tis
#KODIPROP:inputstreamaddon=inputstream.adaptive 
#EXTHTTP:{"dt-custom-data":"eyJ1c2VySWQiOiJyZWFjdC1qdy1wbGF5ZXIiLCJzZXNzaW9uSWQiOiIxMjM0NTY3ODkiLCJtZXJjaGFudCI6ImdpaXRkX3RyYW5zdmlzaW9uIn0="}
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://cdnjkt4.transvision.co.id:1000/live/master/2/4028c68582449a2e01825972ddc221f2/manifest.mpd

==================================================================itil==================================================================

#EXTINF: -1 tvg-logo="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p2/71/2024/06/05/Conmebol_copa_america_2024-3659485275.jpg" group-title="Copa America",Piala Amerika ch1
https://linear-360.frequency.stream/mt/studio/360/hls/master/playlist.m3u8
#EXTINF: -1 tvg-logo="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p2/71/2024/06/05/Conmebol_copa_america_2024-3659485275.jpg" group-title="Copa America",Piala Amerika ch2
https://bcovlive-a.akamaihd.net/74f665e9ff8447639d4de4b8b458d8ae/us-east-1/6058004209001/playlist_dvr.m3u8
#EXTINF: -1 tvg-logo="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p2/71/2024/06/05/Conmebol_copa_america_2024-3659485275.jpg" group-title="Copa America",Piala Amerika ch3
https://alba-cr-repretel-c6.stream.mediatiquestream.com/index.m3u8
#EXTINF: -1 tvg-logo="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p2/71/2024/06/05/Conmebol_copa_america_2024-3659485275.jpg" group-title="Copa America",Piala Amerika ch4
https://telecorporacion-es.cdn.vustreams.com/live/65b52a0a-415d-4686-8ef5-7a0b07b83992/live.isml/.m3u8
#EXTINF: -1 tvg-logo="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p2/71/2024/06/05/Conmebol_copa_america_2024-3659485275.jpg" group-title="Copa America",Piala Amerika
#EXTVLCOPT:http-user-agent=Televizo (Linux; Android 11)
https://tevi.my.id/insiar.m3u8|referer=https://anarchy-stream.com/

#EXTINF:-1 tvg-id="RAI1" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇮🇹
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=d79467df269743b3aca99a9171c54878:a7d3bc19bd09db6b581833e4a6176c8f
https://da-d436236920010b8800010303000000000000000b.id.cdn.upcbroadband.com/wp/wp1-obc1112-live-ch-prod.prod.cdn.dmdsdp.com/dash/SV09101/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇧🇪
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=2f794d3c19854f4fa6f0183b993b86fa:37077d010758ce2cb85ca46720884b01
https://daiconnect.com/live/dash/rtbf/tipik-premium-drm-2/.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇧🇪
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=1a8315e4b64c4e638dc24d93134b9b2d:2821b54058fb3adc9c6252c631aef9e5
https://daiconnect.com/live/dash/rtbf/laune-premium-drm-2/.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇩🇪
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=667f821486adfa6df62b53e41fe60c65:be65cc2c378180153cbac97bc6ab8625
https://p7s1-live-001-prod.akamaized.net/28df258a/t_009/daserste-de-hd/cenc-default.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇩🇪
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=7757d3fa8cdab673a2dd9f3ed7b41360:96e498b70eeecfc0164ed4e0a78e36f3
https://p7s1-live-001-prod.akamaized.net/45371d5a/t_009/zdf-de-hd/cenc-default.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇸🇰
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#EXTVLCOPT:http-referer=https://webtv.sk/tv/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=11223344556677889900112233445566:11223344556677889900112233445566
https://dash2.antik.sk/stream/nvidia_ct_sport/playlist_cenc.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇸🇰
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#EXTVLCOPT:http-referer=https://webtv.sk/tv/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=11223344556677889900112233445566:11223344556677889900112233445566
https://cors-proxy.elfsight.com/https://dash2.antik.sk/stream/nvidia_ct_sport/playlist_cenc.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇸🇰
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#EXTVLCOPT:http-referer=https://webtv.sk/tv/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=11223344556677889900112233445566:11223344556677889900112233445566
https://dash2.antik.sk/stream/nvidia_markiza/playlist_cenc.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇱🇹
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=748d32a5e8e64c7780df70a86a3fb1dc:e3deb83f5738e9ce4cdeb6cab7f473f5
https://cdnlb.tvplayhome.lt/live/eds/TV3_LT_HD_HVC/GO3_LIVE_DASH_AVC/TV3_LT_HD_HVC.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇱🇹
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=58cf48fdf76849ae9eda44bf8b1506b2:bdc640533aac8955a6293158210e0a7d
https://cdnlb.tvplayhome.lt/live/eds/TV6_LT_HD_HVC/GO3_LIVE_DASH_AVC/TV6_LT_HD_HVC.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇪🇪
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:90.0) Gecko/20100101 Firefox/90.0
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=8cef674613af4db5a0e6c64f38149878:65231111f4044f8a067ad0de10b59d49
https://cdnlb.tvplayhome.lt/live/eds/ETV_HD_HVC/GO3_LIVE_DASH_AVC/ETV_HD_HVC.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇷🇴
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=889750ca612844cfabc4073989befa3e:c188729c59e29bedafc1cbedaa107abb
https://m7rovideolive.solocoo.tv/blueskylivedash/blueprotv/Manifest.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇷🇴
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=fa59a3d9aef54b58b0301c4f739b8c65:84f5b4481e244e7dbee7cafd9d1a618a
https://m7rovideolive.solocoo.tv/blueskylivedash/blueprox/Manifest.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇭🇺
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=317aef79ab54447caaeecfec10c9b196:4d9fee9624bf32274cb407afd3d5d248
https://m7rovideolive.solocoo.tv/blueskylive2dash/bluem4sport/Manifest.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇬🇧
#EXTGRP: EURO2024
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=6401e1fead9d4f43910aaad360f46dd0:598f5e4f10d4e040d25579478cadc4ee
https://wp1-obc1112-live-ch-prod.prod.cdn.dmdsdp.com/dash/SV09091/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇬🇧
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5d9937d586414096948337ac314d79c1:22ca2e250b729982c97209e0ff3f7e9b
https://wp2-obc1112-live-ch-prod.prod.cdn.dmdsdp.com/dash/SV09212/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇬🇧
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5d9937d586414096948337ac314d79c1:22ca2e250b729982c97209e0ff3f7e9b
https://cors-proxy.elfsight.com/https://wp2-obc1112-live-ch-prod.prod.cdn.dmdsdp.com/dash/SV09212/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇳🇴
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=bfb0134de69d76d25b5b4b202df11431:025915bd3062c4bde44a13916c5bfefe
https://aws-appeartv-cdn.rikstv.no/rikstv/1/11/dash/TV2_HD/manifest.mpd?version=1&adap=no_dolby&RikstvAssetId=rikstv_5711

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇳🇴
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=bfb0134de69d76d25b5b4b202df11431:025915bd3062c4bde44a13916c5bfefe
https://aws-appeartv-cdn.rikstv.no/rikstv/1/11/dash/TV2_HD/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇰🇿
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
https://bkm.beetv.kz/btv/live/hls/000003038.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇷🇺
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5e1c798b16d24dc8cbfc7819abf77b4d:4ba5d9aeba2239b425d1cf7b45474333
https://video.beeline.tv/live/d/channel317.isml/manifest-stb.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇷🇺
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=2bb7b314771ed5eeddd8f44a9aa42740:01f2a8f11bd891655a752c1749f478ec
https://video.beeline.tv/live/d/channel318.isml/manifest-stb.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇷🇺
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=9145a6e0f778e61866f573d4944dd533:d02173d40515fea5c83944f21d0f3114
https://video.beeline.tv/live/d/channel319.isml/manifest-stb.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇷🇺
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5269ab07e6a6db7585324ae20542f191:dba0dccffba1b26f658ec85a616102e8
https://strm.yandex.ru/kal/match_football1_hd/manifest.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇹🇷
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=15aa559c3c7f942bb639450a4e68c14a:14f46ff5d48aab35e0dbf249241179f1
https://switch-api.tvplus.com.tr/pl/176.235.2.69:80/izmottrrs.tvplus.com.tr/PLTV/88888888/224/3221229536/3221229536.mpd?rrsip=izmottrrs.tvplus.com.tr:443&zoneoffset=0&devkbps=190-2750&servicetype=1&limitflux=-1&limitdur=-1&tenantId=9001&accountinfo=DzACYdLt0OWNXOrDGRpl3J3B5PyrmX4YQOdSNDW0jWRm93dgZuk6pmqqNsOk7xYR5jXlGTb4rB6ajwzNkgh9yWoOE1sF9WOHCctkfqlgUu680aE%2FkXF8BRSDJBMctj2qq1A0RdufXz4My9U2M%2BYWF3xjr72rUuM6oKq81L4VeRuE%2BHpHwwb9AzQr7%2FtpY3bC%3A20230213212703%3AUTC%2C%2C%2C20230213212703%2Curn%3AHuawei%3AliveTV%3A001300000008526522%2C%2C-1%2C0%2C1%2C%2C%2C2%2C497%2C%2C%2C2%2C%2C0%2C%2C%2C%2C%2C2%2C1%2C100068310%2CEND&GuardEncType=2&from=31&validdev=5271,5272&hms_devid=5271&pbf=2_2_1_1702852732&vqe=3&it=H4sIAAAAAAAAAzXMwQoCIRRA0b9xKU5Pp2bhqgjaSDDVNp76FMFG0mmgv4-J2t9z54qOTgetLA4QrBJyB1JKYbcBCWFA6zxS2LBGT1M0MIc5pyma4ld2G_f3TnDoeK84ALusu2PGqMW3NK-Hpar7PxupLsmR9i3wBRvHGCtFnFOZ-Dnj-1rzL_kAL0FoaZkAAAA&uid=qV-t6_pRG0m6p7fJFdlMUQ&srv=cGwtYW5rLXMwNi50dnBsdXMuY29tLnRy&sw_h1=lj4_Egdznf6j_0dfxdH4Nw&srv2=cGwtYW5rLXMwNC50dnBsdXMuY29tLnRy&sw_h2=sdfKcc5DvC-2dMQHdtRV1Q&proxy=true

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇹🇷
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=68d756e8c6cc76d178859547b8f8016d:84f65dbdae77e35cfede6df28b68ab31
https://switch-api.tvplus.com.tr/pl/176.235.2.71:80/izmottrrs.tvplus.com.tr/PLTV/88888888/224/3221229477/3221229477.mpd?rrsip=izmottrrs.tvplus.com.tr:443&zoneoffset=0&devkbps=190-2750&servicetype=1&limitflux=-1&limitdur=-1&tenantId=9001&accountinfo=NqBFibyCqiK9VZTj227v5L0yqmZ%2BgbmgPNtQmahQ3BVm93dgZuk6pmqqNsOk7xYR5jXlGTb4rB6ajwzNkgh9yWoOE1sF9WOHCctkfqlgUu680aE%2FkXF8BRSDJBMctj2quSR0uZb0KZ4GFAntvKi%2FyKxP5Y7OnDca7%2F8ZEPnhT02E%2BHpHwwb9AzQr7%2FtpY3bC%3A20230213214717%3AUTC%2C%2C%2C20230213214717%2Curn%3AHuawei%3AliveTV%3A001300000008479123%2C%2C-1%2C0%2C1%2C%2C%2C2%2C497%2C%2C%2C2%2C%2C0%2C%2C%2C%2C%2C2%2C1%2C100001988%2CEND&GuardEncType=2&from=31&validdev=5271,5273&hms_devid=5271&pbf=2_2_1_2226527801&vqe=3&it=H4sIAAAAAAAAAzXMsQrCMBCA4bfpeDRJPdshk1JwCULVVa6XawjEFtNa8O2lovv__UsmltPRotkPpCtsuNEVM_dItfe9UpqlRo3FLE83WVMwpRTH4Ca_sVt3uKsSjALcgTHFZdu1iYItv6V7PXrJFv-sk7xGFuvnAVaagULIEmiJ0wjnRO9rTr_kA6k2vr2ZAAAA&uid=u629xzy8LUaQOScZcrFCPg&srv=cGwtYW5rLXMwOS50dnBsdXMuY29tLnRy&sw_h1=_tFGF3I3g0BMplkaKdIcUw&srv2=cGwtYW5rLXMwNS50dnBsdXMuY29tLnRy&sw_h2=EByiBth6v4ad4ivGRBF_4Q&proxy=true

#EXTINF:-1 tvg-id="Sportstars 3 - [Channel 99].id" tvg-name="Sportstars 3" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇮🇩
#EXTGRP: EURO2024
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://cempedak-live-cdn.mncnow.id/live/eds/MNCSports3-HD/sa_dash_vmx/MNCSports3-HD.mpd

#EXTINF:-1 tvg-id="Sportstars 3 - [Channel 99].id" tvg-name="Sportstars 3 HD" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇮🇩
#EXTGRP: EURO2024
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi
https://cempedak-live-cdn.mncnow.id/live/eds/MNCSports3-HD/sa_dash_vmx/MNCSports3-HD.mpd

#EXTINF:-1 tvg-id="Sportstars 4 HD - [Channel 424].id" tvg-name="Sportstars 4 HD" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇮🇩
#EXTGRP: EURO2024
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi
https://cempedak-live-cdn.mncnow.id/live/eds/VplusLiveRplus/sa_dash/VplusLiveRplus.mpd

#EXTINF:-1 tvg-id="Sportstars 4 HD - [Channel 424].id" tvg-name="Sportstars 4 HD" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇮🇩
#EXTGRP: EURO2024
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi
https://cempedak-live-cdn.mncnow.id/live/eds/Sportstar4/sa_dash_vmx/Sportstar4.mpd

#EXTINF:-1 tvg-id="PPTV" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇹🇭
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=0aeffa7753674e77b99443fac7757b8a:b8c8a462008a40aa91823e0b02e8dd31
https://ubn-streamer1.cdn.3bbtv.com:8443/3bb/live/36/36.mpd

#EXTINF:-1 tvg-id="THAIRATH" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇹🇭
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4b2bff3e598043cfaf949305e3d153fa:545df84ff4c54af6b5385516e0f65956
https://ubn-streamer1.cdn.3bbtv.com:8443/3bb/live/32/32.mpd

#EXTINF:-1 tvg-id="MCOT" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇹🇭
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36
https://live-org-01-cdn.mcot.net/mcothd1080p_edge/smil:mcothd1080p.smil/playlist.m3u8

#EXTINF:-1 tvg-id="MCOT" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇹🇭
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36
https://edge6a.v2h-cdn.com/mcothd/mcothd.stream/playlist.m3u8

#EXTINF:-1 tvg-id="THAIRATH" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇹🇭
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36
https://cdn6.goprimetime.info/feed/eI5rczhSQpWBcgOtqRLNWw/chthairath3/index.m3u8

#EXTINF:-1 tvg-id="MCOT" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇹🇭
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36
https://cdn6.goprimetime.info/feed/eI5rczhSQpWBcgOtqRLNWw/chmcothd3/index.m3u8

#EXTINF:-1 tvg-id="beIN SPORTS 1.fr" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇫🇷
#EXTGRP: EURO2024 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key={"3cf686dc4246f19bc4419c54da0f90bc":"b40f599266c8a262ccf4a384dadce08a","9d8b1b819cfdcff845625b86cc4968f3":"480b03fe4476bc187c6a9d43ba85b9db","6ca2f2c822444ff76d9570741dec7b2b":"9fc3d71ab30e8d33f09ee29e5e453608"}
https://api-proxad.dc2.oqee.net/playlist/v1/live/966/1/live.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇪🇸
#EXTGRP: EURO2024 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=a3abc44525eef3b0a7af9138a9dbe34a:7740f8ae4223ce5ba293028f7f78f1c1
https://ott.zapitv.com/live/eds_c2/la1_4k/dash_live_enc/la1_4k.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇪🇸
#EXTGRP: EURO2024 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=a3abc44525eef3b0a7af9138a9dbe34a:7740f8ae4223ce5ba293028f7f78f1c1
https://cache3.zapitv.com/live/eds_c2/la1_4k/dash_live_enc/la1_4k.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇪🇸
#EXTGRP: EURO2024 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ecd7ee75e0e88f267ace6bd7d9d70d83:eb196d2b2dc28418f465532c5d1182c0
https://ott.zapitv.com/live/eds_c2/la_2/dash_live_enc/la_2.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇪🇸
#EXTGRP: EURO2024 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ecd7ee75e0e88f267ace6bd7d9d70d83:eb196d2b2dc28418f465532c5d1182c0
https://cache3.zapitv.com/live/eds_c2/la_2/dash_live_enc/la_2.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇳🇱
#EXTGRP: EURO2024
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=7545f9301bf94e7a9132dccf32920e51:94fc134c1b1cb1ea9075781417eca48b
https://nlziet-live.akamaized.net/L6/76fd047c/c427bd9d.isml/.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO 🇧🇷
#EXTGRP: EURO2024
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=db1f45f2c7eb3229a72fccd82b60a6f7:4e2070595da16f87e6e6459a26be34d6
https://poc-sky0120.glbcdn.net/Content/Channel/live_0120/DASH/manifest.mpd?da=1&country=BR&accountType=DTH&deviceType=web

#EXTINF:-1 tvg-id="STADIA" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 DMOST/2.0.0 (; LGE; webOSTV; WEBOS6.3.2 03.34.95; W6_lm21a;)
https://telecorporacion-es.cdn.vustreams.com/live/65b52a0a-415d-4686-8ef5-7a0b07b83992/live.isml/index.m3u8

#EXTINF:-1 tvg-id="STADIA" tvg-logo="https://i.ibb.co.com/nQ9q54q/euro2024.png",EURO
#EXTGRP: EURO2024
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://node3.olelive.com:6443/live/CCTV5HD/hls.m3u8

==========================================================NASIONAL===================================================================================


#EXTINF:-1 tvg-id="ANTV - [Channel 115].id" tvg-url="tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/Wj6qu6M.png" group-title="INDONESIA", ANTV 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/ANTV/manifest.mpd|referrer=https://www.indihometv.com/

#EXTINF:-1 tvg-id="ANTV - [Channel 115].id" tvg-url="tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/Wj6qu6M.png" group-title="INDONESIA", ANTV 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/14

#EXTINF:-1 tvg-id="GTV" tvg-name="GTV" tvg-logo="https://i.imgur.com/OPaUgqx.png" group-title="INDONESIA", GTV 1
https://melon-live-cdn.mncnow.id/live/eds/GTV-2/sa_hls/GTV-2.m3u8

#EXTINF:-1 tvg-id="GTV" tvg-name="GTV" tvg-logo="https://i.imgur.com/OPaUgqx.png" group-title="INDONESIA", GTV 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://s.id/gtv_play_shareext-xs

#EXTINF:-1 tvg-id="" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/S5k3QDO.png" group-title="INDONESIA",Indosiar 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/indosiar/manifest.mpd|referrer=https://www.indihometv.com/ 

#EXTINF:-1 tvg-id="Indosiar - [Channel 78].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/S5k3QDO.png" group-title="INDONESIA", Indosiar 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://s.id/indosiar_play_shareext-xs

#EXTINF:-1 tvg-id="Indosiar - [Channel 78].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/S5k3QDO.png" group-title="INDONESIA", Indosiar 3
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/8
#https://raw.githubusercontent.com/Arrasyid22/Playlist-IPTV/main/ligabri1.m3u8

#EXTINF:0 tvg-id="MNCTV.id" tvg-logo="https://i.imgur.com/jOE2D69.png" group-title="INDONESIA", MNCTV 1
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-referrer=https://visionplus.id
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
https://melon-live-cdn.mncnow.id/live/eds/MNCTV-HD/sa_dash_vmx/MNCTV-HD.mpd

#EXTINF:0 tvg-id="MNCTV.id" tvg-logo="https://i.imgur.com/jOE2D69.png" group-title="INDONESIA", MNCTV 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://s.id/mnctv_play_shareext-xs

#EXTINF:-1 tvg-id="NET TV - [Channel 116].id" tvg-name="Net." tvg-logo="https://i.imgur.com/nb9Ik4Z.png" group-title="INDONESIA", NET. 1
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
https://cors-proxy.cooks.fyi/https://cdn08jtedge.indihometv.com/dassdvr/133/net/manifest.mpd 

#EXTINF:-1 tvg-id="NET TV - [Channel 116].id" tvg-name="Net." tvg-logo="https://i.imgur.com/nb9Ik4Z.png" group-title="INDONESIA", NET. 2
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/15

#EXTINF:-1 tvg-id="RCTI" tvg-name="RCTI" tvg-logo="https://i.imgur.com/un8daQS.png" group-title="INDONESIA", RCTI 1
#EXTVLCOPT:http-referrer=https://m.rctiplus.com/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (X11; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0/v2206
https://pl.kokokputik.my.id/iptv/Rctiplus/index.m3u8?id=rcti

#EXTINF:-1 tvg-id="RCTI" tvg-name="RCTI" tvg-logo="https://i.imgur.com/un8daQS.png" group-title="INDONESIA", RCTI 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://s.id/rcti_play_shareext-ts

#EXTINF:-1 tvg-logo="https://i.imgur.com/4fsGqhZ.png" group-title="INDONESIA" tvg-id="SCTV" tvg-name="SCTV",SCTV 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/sctv/manifest.mpd|referrer=https://www.indihometv.com/

#EXTINF:-1 tvg-logo="https://i.imgur.com/4fsGqhZ.png" group-title="INDONESIA" tvg-id="SCTV" tvg-name="SCTV",SCTV 2
https://s.id/sctvHD_shareext-xs

#EXTINF:-1 tvg-logo="https://i.imgur.com/4fsGqhZ.png" group-title="INDONESIA" tvg-id="SCTV" tvg-name="SCTV",SCTV 3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3
http://stb.mbahnunungonline.net/live/m3u8/id/2b8fc230e8f847b.m3u8

#EXTINF:-1 tvg-id="" tvg-name="" tvg-logo="https://i.imgur.com/XHn6JG6.png" group-title="INDONESIA", Trans 7 1
https://streaming.indihometv.com/atm/DASH/trans7/manifest.mpd|referrer=https://www.indihometv.com/

#EXTINF:-1 tvg-id="" tvg-name="" tvg-logo="https://i.imgur.com/XHn6JG6.png" group-title="INDONESIA", Trans 7 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://s.id/trans7HD_shareext-xs

#EXTINF:-1 tvg-id="TransTV" tvg-url="https://www.bevy.be/bevyfiles/indonesiapremium3.xml" tvg-logo="https://i.imgur.com/ggsrreJ.png" group-title="INDONESIA",TransTV HD 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/transtv/manifest.mpd|referrer=https://www.indihometv.com/ 

#EXTINF:-1 tvg-id="TransTV" tvg-url="https://www.bevy.be/bevyfiles/indonesiapremium3.xml" tvg-logo="https://i.imgur.com/ggsrreJ.png" group-title="INDONESIA",TransTV HD 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://s.id/transtvHD_shareext-xs

#EXTINF:-1 tvg-id="tvOne - [Channel 97].id" group-title="INDONESIA" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/tq4taTY.png",TVOne 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (trenztvott NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
https://streaming.indihometv.com/atm/DASH/tvone/manifest.mpd|user-agent=mozilla/89 ExoPlayerLib

#EXTINF:-1 tvg-id="tvOne - [Channel 97].id" group-title="INDONESIA" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/tq4taTY.png",TVOne 2
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/13

#EXTINF:0 group-title="INDONESIA" tvg-logo="https://i.imgur.com/6mKllwF.png", RTV 1
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://cubmu.trenztv.workers.dev
https://cdnjkt4.transvision.co.id:1000/live/master/5/4028c68572841ba301729ce4a1343c17/manifest.mpd

#EXTINF:0 group-title="INDONESIA" tvg-logo="https://i.imgur.com/6mKllwF.png", RTV 2
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/18

#EXTINF:-1 tvg-id="Kompas TV - [Channel 106].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/GelhQN9.png" group-title="INDONESIA", Kompas TV 1
#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
https://melon-live-cdn.mncnow.id/live/eds/KompasTV/sa_dash_vmx/KompasTV.mpd 

#EXTINF:-1 tvg-id="Kompas TV - [Channel 106].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/GelhQN9.png" group-title="INDONESIA", Kompas TV 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://s.id/kompastvHD_shareext-xs

#EXTINF:-1 tvg-id="Metro TV - [Channel 107].id" group-title="INDONESIA" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/d9SDpUU.png",Metro TV 1
#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
https://melon-live-cdn.mncnow.id/live/eds/Metro-TV2/sa_dash_vmx/Metro-TV2.mpd 

#EXTINF:-1 tvg-id="Metro TV - [Channel 107].id" group-title="INDONESIA" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/d9SDpUU.png",Metro TV 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.elfsight.com/https://s.id/metrotvHD_shareext-xs

#EXTINF:-1 group-title="INDONESIA" tvg-id="iNews HD - [Channel 433].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/PAy1NQ4.png",iNews 1
#EXTVLCOPT:http-referrer=https://m.rctiplus.com/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (X11; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0/v2206
https://pl.kokokputik.my.id/iptv/Rctiplus/index.m3u8?id=inews

#EXTINF:-1 group-title="INDONESIA" tvg-id="iNews HD - [Channel 433].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/PAy1NQ4.png",iNews 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://s.id/inews_play_shareext-xs

#EXTINF:-1 tvg-id="TVRI - [Channel 118].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/Lk0f0G4.png" group-title="INDONESIA",TVRI Nasional 
#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
https://melon-live-cdn.mncnow.id/live/eds/PemersatuBangsa/sa_dash_vmx/PemersatuBangsa.mpd 

#EXTINF:-1 tvg-id="Berita Satu - [Channel 103].id" tvg-name="BTV" tvg-logo="https://i.imgur.com/T070Wbh.png" group-title="INDONESIA", BTV 
https://b1news.beritasatumedia.com/Beritasatu/B1News_manifest.m3u8 

#EXTINF:-1 tvg-id="CNBC - [Channel 337].id" tvg-name="CNBC Indonesia" tvg-logo="https://i.imgur.com/kwfGZ2N.png" group-title="INDONESIA", CNBC INDONESIA 
https://live.cnbcindonesia.com/livecnbc/smil:cnbctv.smil/playlist.m3u8 

#EXTINF:-1 tvg-id="Nusantara TV" tvg-name="Nusantara TV" tvg-logo="https://i.imgur.com/NGo9WgJ.png" group-title="INDONESIA", NUSANTARA TV 
https://nusantaratv.siar.us/nusantaratv/live/playlist.m3u8 

#EXTINF:-1 group-title="INDONESIA" tvg-id="Sindo News TV HD - [Channel 434].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/Zn3VM1g.png",SindoNews 
#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
https://melon-live-cdn.mncnow.id/live/eds/MNCnews-HDD/sa_dash_vmx/MNCnews-HDD.mpd 

#EXTINF:-1 tvg-id="" tvg-name="" tvg-logo="https://i.imgur.com/AXSZwuJ.png" group-title="INDONESIA", UGTV 
https://cdn.gunadarma.ac.id/streams/ugtv/ingestugtv.m3u8 

#EXTINF:-1 tvg-id="" tvg-name="CNN Indonesia" tvg-logo="https://cdn.cnnindonesia.com/cnnid/images/Logo-CNN-Indonesia-Peta-Indonesia.jpg?v=8.3.1" group-title="INDONESIA", CNN INDONESIA 
https://live.cnnindonesia.com/livecnn/smil:cnntv.smil/master.m3u8 

#EXTINF:-1 tvg-logo="https://i.imgur.com/Myvu2J6.png" group-title="INDONESIA", MOJI 1
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=64756e6961616e616b30303030303030:40d96782fdd3ff05e7c0bf9aa7af8ce5
https://cors-proxy.cooks.fyi/https://cdn08jtedge.indihometv.com/dassdvr/134/ochannel/manifest.mpd

#EXTINF:-1 tvg-logo="https://i.imgur.com/Myvu2J6.png" group-title="INDONESIA", MOJI 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://s.id/mojiHD_shareext-xs

#EXTINF:-1 tvg-logo="https://i.imgur.com/Myvu2J6.png" group-title="INDONESIA", MOJI 3
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/117


=====================================religi===================================================================

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/religi2/muslim_tv.png" group-title="RELIGI",MUSLIM TV Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/MNCMuslim/sa_dash_vmx/MNCMuslim.mpd
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/religi2/alquran.png" group-title="RELIGI",AL QURAN AL KAREEM Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/AlQuranAlKareem/sa_dash_vmx/AlQuranAlKareem.mpd
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/religi2/tv9.png" group-title="RELIGI",TV9 Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/TV9/sa_dash_vmx/TV9.mpd
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/religi2/tawaf.png" group-title="RELIGI",TAWAF TV Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/TawafTV/sa_dash_vmx/TawafTV.mpd
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/religi2/muhammadiyah.png" group-title="RELIGI",MUHAMMADIYAH TV Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/TVMuhammadiyah/sa_dash_vmx/TVMuhammadiyah.mpd
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/religi2/rodja.png" group-title="RELIGI",RODJA TV Auto Reso
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36
http://op-group1-swiftservehd-1.dens.tv/h/h233/02.m3u8
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/religi2/reformed.png" group-title="RELIGI",REFORMED 21 Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/Reformed21/sa_dash_vmx/Reformed21.mpd
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/religi2/life.png" group-title="RELIGI",LIFE Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/Life/sa_dash_vmx/Life.mpd
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/religi2/ewtn.png" group-title="RELIGI",EWTN Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/EWTN/sa_dash_vmx/EWTN.mpd

-========================================================== KIDS =====================================================================================

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/kids2/larva.png" group-title="KIDS",LARVA
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/66
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/kids2/upin_ipin.png" group-title="KIDS",UPIN IPIN
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/67
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/kids2/masha_bear.png" group-title="KIDS",MASHA & BEAR
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/70
#EXTINF:-1 tvg-logo="https://hometv.biz.id/kids2/doraemon.png" group-title="KIDS",DORAEMON
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
#https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/68
#EXTINF:-1 tvg-logo="https://hometv.biz.id/kids2/dreamworks.png" group-title="KIDS",DREAMWORSK
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
#https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/95
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/kids2/cartoon_network.png" group-title="KIDS",CARTOON NETWORK HD
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/74
#EXTINF:-1 group-title="KIDS" tvg-id="horee.id" tvg-logo="https://hometv.biz.id/logo/kids2/horee.png",Horee!
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/72

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-id="Kids TV - [Channel 46].id" tvg-url="" tvg-logo="https://www.visionplus.id/images/repository/994/49994-SNAPSHOT-m.png"group-title="KIDS",Kids TV 
https://melon-live-cdn.mncnow.id/live/eds/Kids-HD/sa_dash_vmx/Kids-HD.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-id="CBeebies - [Channel 41].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/YKdKehG.png" group-title="KIDS",Cbeebies 
https://melon-live-cdn.mncnow.id/live/eds/Cbeebies/sa_dash_vmx/Cbeebies.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTINF:-1 tvg-logo="https://i.imgur.com/GG3uCxh.png" group-title="KIDS" tvg-id="Nick Junior" tvg-name="Nick Junior", Nick Jr 
https://melon-live-cdn.mncnow.id/live/eds/NickJr-HDD/sa_dash_vmx/NickJr-HDD.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTINF:-1 tvg-logo="https://i.imgur.com/6nqfbM7.png" group-title="KIDS" tvg-id="Nickelodeon" tvg-name="Nickelodeon", Nickelodeon 
https://melon-live-cdn.mncnow.id/live/eds/Nickelodeon/sa_dash_vmx/Nickelodeon.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-id="Dreamworks - [Channel 47].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/SZ1KvZi.png" group-title="KIDS",Dreamworks HD 
https://melon-live-cdn.mncnow.id/live/eds/Dreamwork-HD/sa_dash_vmx/Dreamwork-HD.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-id="My Kidz - [Channel 50].id" tvg-url="" tvg-logo="https://www.visionplus.id/images/repository/010/50010-SNAPSHOT-m.png" group-title="KIDS",MyKids 
https://melon-live-cdn.mncnow.id/live/eds/My-Kids/sa_dash_vmx/My-Kids.mpd 

#EXTINF:-1 tvg-logo="https://hometv.pw/logo/kids2/animax.png" group-title="KIDS",ANIMAX
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/Animax/sa_dash_vmx/Animax.mpd

#EXTINF:-1 tvg-logo="https://hometv.pw/logo/kids2/aniplus.png" group-title="KIDS",ANIPLUS
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/75

#EXTINF:-1 tvg-logo="https://hometv.pw/logo/kids2/babytv.png" group-title="KIDS",BABY TV
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/BabyTV-NewHD/sa_dash_vmx/BabyTV-NewHD.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/kids2/babyshark.png" group-title="KIDS",BABY SHARK
https://fc2f8d2d3cec45bb9187e8de15532838.mediatailor.us-east-1.amazonaws.com/v1/master/44f73ba4d03e9607dcd9bebdcb8494d86964f1d8/Roku_BabySharkTV/playlist.m3u8

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/kids2/kidsflix.png" group-title="KIDS",KIDS FLIX 
https://stream-us-east-1.getpublica.com/playlist.m3u8?network_id=50


==================================================================================KNOWLEDGE ===============================================================




#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/knowledge2/natgeo.png" group-title="KNOWLEDGE",NATIONAL GEOGRAPHIC
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/131

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/knowledge2/natgeo_wild.png" group-title="KNOWLEDGE",NAT GEO WILD
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/132

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/knowledge2/animal_planet.png" group-title="KNOWLEDGE",ANIMAL PLANET
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/65

#EXTINF:0 tvg-logo="https://i.imgur.com/HjZ4X9X.png" group-title="KNOWLEDGE",Animal Planet 
https://kusnadipepenk.github.io/ntn/animal.m3u8 

#EXTINF:-1 tvg-id="DigiOne.id" tvg-name="DigiOne" tvg-logo="https://i.imgur.com/bNXJWsf.png" group-title="KNOWLEDGE",Digione 
https://cdn-telkomsel-01.akamaized.net/Content/HLS/Live/channel(d2f582be-366c-4cce-9476-1b524dc854e9)/index.m3u8 

#EXTINF:-1 tvg-id="" tvg-logo="https://i.imgur.com/1rB2wDv.png" group-title="KNOWLEDGE",Russia Today Documentary English 
https://rt-rtd.rttv.com/live/rtdoc/playlist_1600Kb.m3u8 

#EXTINF:-1 tvg-id="" tvg-name="Wired 2 Fish" tvg-logo="https://i.imgur.com/DTV3Ykb.png" group-title="KNOWLEDGE",Love Nature 4K 
https://d18dyiwu97wm6q.cloudfront.net/playlist.m3u8 

#EXTINF:-1 tvg-id="insight.au" tvg-name="Insight" tvg-logo="https://i.imgur.com/9ETu8DD.png" group-title="KNOWLEDGE", INSIGHT 
https://insighttv-samsung-us.amagi.tv/playlist.m3u8 

#EXTINF:-1 tvg-id="inwonder.au" tvg-name="Inwonder" tvg-logo="https://i.imgur.com/JfRjGcP.png" group-title="KNOWLEDGE",Wild Earth 
https://wildearth-roku.amagi.tv/masterR720P.m3u8 

#EXTINF:-1 tvg-id="hgtvasia.us" tvg-name="HGTV asia" tvg-logo="https://i.imgur.com/U139AVK.png" group-title="KNOWLEDGE",HGTV 
https://kusnadipepenk.github.io/ntn/hgtv.m3u8 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTVLCOPT:http-referrer=https://visionplus.id 
#EXTINF:-1 group-title="KNOWLEDGE" tvg-logo="https://i.imgur.com/ayvQ7MU.png",BBC Earth Asia 
https://melon-live-cdn.mncnow.id/live/eds/BBCEarth-HD/sa_dash_vmx/BBCEarth-HD.mpd 

#EXTINF:-1 group-title="KNOWLEDGE" tvg-logo="https://i.imgur.com/pg53cPq.png",Discovery Asia (HD) 
https://raw.githubusercontent.com/mimipipi22/lalajo/main/discoveryasia.m3u8 

#EXTINF:-1 group-title="KNOWLEDGE" tvg-logo="https://i.imgur.com/WC3JYhx.png",Discovery Channel 
https://raw.githubusercontent.com/mimipipi22/lalajo/main/discoverychannel.m3u8 

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz 
#EXTVLCOPT:http-referrer=https://visionplus.id 
#EXTINF:-1 group-title="KNOWLEDGE" tvg-logo="https://i.imgur.com/TcgWVfb.png",History Asia 
https://melon-live-cdn.mncnow.id/live/eds/History/sa_dash_vmx/History.mpd 

#EXTINF:-1 tvg-logo="https://dl.dropboxusercontent.com/s/obf1lb00afsqzuu/people.png" group-title="KNOWLEDGE", PEOPLE ARE AWESOME
https://dai2.xumo.com/xumocdn/p=redbox&deviceid=&is_lat=&subp=RedboxdesktopWebWindows/amagi_hls_data_xumo1212A-redboxpeopleareawesome/CDN/1280x720_5000000/chunklist.m3u8

#EXTINF:-1 group-title="KNOWLEDGE" tvg-logo="https://dl.dropboxusercontent.com/s/dhokqih7oixf7z1/denslearning.png", LEARNING & Pengetahuan
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:101.0) Gecko/20100101 Firefox/101.0
http://op-group1-swiftservehd-1.dens.tv/h/h236/index.m3u8

===================================================================================MOVIES========================================================


#EXTINF:-1 group-title="MOVIE" tvg-logo="https://i.imgur.com/bNd43gT.png", Bioskop Indonesia
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive 
#KODIPROP:inputstream.adaptive.manifest_type=dash 
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey 
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a 
https://cors-proxy.cooks.fyi/https://cdn08jtedge.indihometv.com/dassdvr/130/bioskopindonesia/manifest.mpd 

#EXTINF:-1 group-title="MOVIE" tvg-logo="https://i.imgur.com/FXm0jc5.png", Flik 
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cors-proxy.cooks.fyi/https://cdn08jtedge.indihometv.com/dassdvr/133/flik_dash/manifest.mpd

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/43aPpA4.png" group-title="MOVIE",Hits 
https://melon-live-cdn.mncnow.id/live/eds/HITS/sa_dash_vmx/HITS.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/fbRf7l9.png" group-title="MOVIE",HitsMovies 
https://melon-live-cdn.mncnow.id/live/eds/HitsMovies/sa_dash_vmx/HitsMovies.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/wrVFgOT.png" group-title="MOVIE",Galaxy Premium 
https://melon-live-cdn.mncnow.id/live/eds/GalaxyPremium-HD/sa_dash_vmx/GalaxyPremium-HD.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/kh6nxIx.png" group-title="MOVIE",Galaxy 
https://melon-live-cdn.mncnow.id/live/eds/Galaxy-HD/sa_dash_vmx/Galaxy-HD.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/1wmF10E.png" group-title="MOVIE",Paramount Network 
https://melon-live-cdn.mncnow.id/live/eds/Paramount-HD/sa_dash_vmx/Paramount-HD.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/sqiUQj4.png" group-title="MOVIE",KIX 
https://melon-live-cdn.mncnow.id/live/eds/KIX/sa_dash_vmx/KIX.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/pqhWX4m.png" group-title="MOVIE", Thriil
https://melon-live-cdn.mncnow.id/live/eds/Thrill/sa_dash_vmx/Thrill.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/zTusXFb.png" group-title="MOVIE",Celestial Movies 
https://melon-live-cdn.mncnow.id/live/eds/CelestialMovie/sa_dash_vmx/CelestialMovie.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/T6KqpEe.png" group-title="MOVIE",Celestial Classic 
https://melon-live-cdn.mncnow.id/live/eds/CelestialClassic/sa_dash_vmx/CelestialClassic.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/Uqbat4W.png" group-title="MOVIE",Cinema World HD 
https://melon-live-cdn.mncnow.id/live/eds/CinemaWorld/sa_dash_vmx/CinemaWorld.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://www.visionplus.id/images/repository/990/49990-SNAPSHOT-m.png" group-title="MOVIE",MyCinema 
https://melon-live-cdn.mncnow.id/live/eds/MyCinema/sa_dash_vmx/MyCinema.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/Hiz21fB.png" group-title="MOVIE",MyCinema Asia 
https://melon-live-cdn.mncnow.id/live/eds/MyCinema-Asia/sa_dash_vmx/MyCinema-Asia.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://www.visionplus.id/images/repository/987/49987-SNAPSHOT-m.png" group-title="MOVIE",My Family 
https://melon-live-cdn.mncnow.id/live/eds/MyFamily/sa_dash_vmx/MyFamily.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://www.visionplus.id/images/repository/965/49965-SNAPSHOT-m.png" group-title="MOVIE",Cinemachi HD 
https://melon-live-cdn.mncnow.id/live/eds/Cinemachi-HD/sa_dash_vmx/Cinemachi-HD.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://www.visionplus.id/images/repository/968/49968-SNAPSHOT-m.png" group-title="MOVIE",Cinemachi Kids HD 
https://melon-live-cdn.mncnow.id/live/eds/Cinemachi-Kids-HD/sa_dash_vmx/Cinemachi-Kids-HD.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://www.visionplus.id/images/repository/980/49980-SNAPSHOT-m.png" group-title="MOVIE",Cinemachi Action HD
https://melon-live-cdn.mncnow.id/live/eds/Cinemachi-Action/sa_dash_vmx/Cinemachi-Action.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://www.visionplus.id/images/repository/977/49977-SNAPSHOT-m.png" group-title="MOVIE",Cinemachi Max HD 
https://melon-live-cdn.mncnow.id/live/eds/Cinemachi-Max-HD/sa_dash_vmx/Cinemachi-Max-HD.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://www.visionplus.id/images/repository/969/49969-SNAPSHOT-m.png" group-title="MOVIE",Cinemachi Xtra HD 
https://melon-live-cdn.mncnow.id/live/eds/Cinemachi-Xtra-HD/sa_dash_vmx/Cinemachi-Xtra-HD.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/PiScL3E.png" group-title="MOVIE",Indonesia Movie Channel 
https://melon-live-cdn.mncnow.id/live/eds/IndonesiaMovieChannels-HD/sa_dash_vmx/IndonesiaMovieChannels-HD.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/g9zQDYu.png" group-title="MOVIE",FMN (Telenovela) 
https://melon-live-cdn.mncnow.id/live/eds/FMN/sa_dash_vmx/FMN.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-logo="https://i.imgur.com/aonSLmE.png" group-title="MOVIE",Zee Bioskop 
https://melon-live-cdn.mncnow.id/live/eds/ZeeBIOSKOP/sa_dash_vmx/ZeeBIOSKOP.mpd 

#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
#EXTINF:-1 tvg-id="blueant" tvg-logo="https://i.imgur.com/tsrPO30.png",ROCK Action 
#EXTGRP: MOVIE 
https://melon-live-cdn.mncnow.id/live/eds/Rockaction/sa_dash_vmx/Rockaction.mpd 

#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=a407479f074d43d798478c1212d95876:3afb53a2643939cd7128fa7ceded533a 
#EXTINF:-1 tvg-id="HBO HD" tvg-url="" tvg-logo="https://i.imgur.com/bmu95rl.png" group-title="MOVIE",HBO (Sg) 
#https://tglmp01.akamaized.net/out/v1/29687feb8f96427ca7348cd59c2338d9/manifest.mpd 

#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=473fabdc05ac4d9b94fd34f33f73394f:1072b1e61206c3859607984f872e549c 
#EXTINF:-1 tvg-id="HBO Hits HD" tvg-url="" tvg-logo="https://i.imgur.com/QNb95ny.png" group-title="MOVIE",HBO Hits (Sg) 
#https://tglmp02.akamaized.net/out/v1/0fdcb3b643af40ceb3a5b7efa39f7b72/manifest.mpd 

#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=363b551913124d6b80074ca295b25129:a6c6efcab0076d572e5732fb6451d19c 
#EXTINF:-1 tvg-id="HBO Family HD" tvg-url="" tvg-logo="https://i.imgur.com/blc5m9H.png" group-title="MOVIE",HBO Family (Sg) 
#https://tglmp03.akamaized.net/out/v1/d15476c2807d4380b0cc375a7d861752/manifest.mpd 

#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=90480f571f5d410891d7add7103c1e84:b64f887d2480bcaea992c2f0826449a9 
#EXTINF:-1 tvg-id="HBO Signature HD" tvg-url=""tvg-logo="https://i.imgur.com/m3gWvxl.png" group-title="MOVIE",HBO Signature (Sg) 
#https://tglmp02.akamaized.net/out/v1/b37a81eb3585471cb9c639c78edcdefa/manifest.mpd 

#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=32bc2ee6869144b88bee3babf202f88e:50d3b9ec49e1570621d45822923607f7 
#EXTINF:-1 tvg-id="Cinemax HD" tvg-url="" tvg-logo="https://i.imgur.com/DPbh0e7.png" group-title="MOVIE",Cinemax (Sg) 
#https://tglmp04.akamaized.net/out/v1/0f439c1d8a1a47fca9ae1fa92144306e/manifest.mpd 

#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive 
#EXTHTTP:{"dt-custom-data":"eyJ1c2VySWQiOiJyZWFjdC1qdy1wbGF5ZXIiLCJzZXNzaW9uSWQiOiIxMjM0NTY3ODkiLCJtZXJjaGFudCI6ImdpaXRkX3RyYW5zdmlzaW9uIn0="} 
#KODIPROP:inputstream.adaptive.manifest_type=dash #KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 
#EXTINF:-1 tvg-id="HBO HD.sg" tvg-url="https://www.bevy.be/bevyfiles/singaporepremium.xml.gz" tvg-logo="https://i.imgur.com/bmu95rl.png" group-title="MOVIE",HBO (trans) 
https://cdnjkt4.transvision.co.id:1000/live/master/4/4028c6856b6088c3016b87d64b970b53/manifest.mpd 

#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive 
#EXTHTTP:{"dt-custom-data":"eyJ1c2VySWQiOiJyZWFjdC1qdy1wbGF5ZXIiLCJzZXNzaW9uSWQiOiIxMjM0NTY3ODkiLCJtZXJjaGFudCI6ImdpaXRkX3RyYW5zdmlzaW9uIn0="} 
#KODIPROP:inputstream.adaptive.manifest_type=dash #KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 
#EXTINF:-1 tvg-id="HBO Hits (HD).sg" tvg-url="https://www.bevy.be/bevyfiles/singaporepremium.xml.gz" tvg-logo="https://i.imgur.com/QNb95ny.png" group-title="MOVIE",HBO Hits (trans) 
https://cdnjkt4.transvision.co.id:1000/live/master/3/4028c6856c3db2cc016d054fbf67379f/manifest.mpd 

#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive 
#EXTHTTP:{"dt-custom-data":"eyJ1c2VySWQiOiJyZWFjdC1qdy1wbGF5ZXIiLCJzZXNzaW9uSWQiOiIxMjM0NTY3ODkiLCJtZXJjaGFudCI6ImdpaXRkX3RyYW5zdmlzaW9uIn0="} 
#KODIPROP:inputstream.adaptive.manifest_type=dash #KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 
#EXTINF:-1 tvg-id="HBO Family (HD).sg" tvg-url="https://www.bevy.be/bevyfiles/singaporepremium.xml.gz" tvg-logo="https://i.imgur.com/blc5m9H.png" group-title="MOVIE",HBO Family (trans) 
https://cdnjkt4.transvision.co.id:1000/live/master/3/4028c6856c3db2cc016d055927fe37a4/manifest.mpd 

#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive 
#EXTHTTP:{"dt-custom-data":"eyJ1c2VySWQiOiJyZWFjdC1qdy1wbGF5ZXIiLCJzZXNzaW9uSWQiOiIxMjM0NTY3ODkiLCJtZXJjaGFudCI6ImdpaXRkX3RyYW5zdmlzaW9uIn0="} 
#KODIPROP:inputstream.adaptive.manifest_type=dash #KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 
#EXTINF:-1 tvg-id="HBO Signature (HD).sg" tvg-url="https://www.bevy.be/bevyfiles/singaporepremium.xml.gz" tvg-logo="https://i.imgur.com/m3gWvxl.png" group-title="MOVIE",HBO Signature (trans) 
https://cdnjkt4.transvision.co.id:1000/live/master/3/4028c6856c3db2cc016d0552e0ca37a2/manifest.mpd 

#EXTVLCOPT:http-referrer=https://www.cubmu.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive 
#EXTHTTP:{"dt-custom-data":"eyJ1c2VySWQiOiJyZWFjdC1qdy1wbGF5ZXIiLCJzZXNzaW9uSWQiOiIxMjM0NTY3ODkiLCJtZXJjaGFudCI6ImdpaXRkX3RyYW5zdmlzaW9uIn0="} 
#KODIPROP:inputstream.adaptive.manifest_type=dash #KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 
#EXTINF:-1 tvg-id="CINEMAX (HD).sg" tvg-url="https://www.bevy.be/bevyfiles/singaporepremium.xml.gz" tvg-logo="https://i.imgur.com/DPbh0e7.png" group-title="MOVIE",Cinemax (trans) 
https://cdnjkt4.transvision.co.id:1000/live/master/3/4028c6856c3db2cc016cdbfc4a1934bf/manifest.mpd

#EXTINF:-1 tvg-id="WarnerTVAsia.us" tvg-url="https://www.bevy.be/bevyfiles/malaysia.xml" tvg-logo="https://hometv.pw/logo/movies/warner.png" group-title="MOVIE",Warner TV
#KODIPROP:inputstream.adaptive.stream_headers=user-agent=Xstream XGO/1.22 (Linux;Android 9) ExoPlayerLib/2.10.5
#EXTVLCOPT:https://www.transvision.co.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://lic-cubmux.konslet.workers.dev/4rr0w/play.wv 
https://cdnjkt4.transvision.co.id:1003/live/master/4/4028c6856c3db2cc016cf0b533fe73e3/manifest.mpd


---------------------------------------------------------ENTERTAIMEN------------------------------------------------------------------------------

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/dunialain.png" group-title="ENTERTAINMENT",DUNIA LAIN
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/158

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/kplus.png" group-title="ENTERTAINMENT",K+
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/156

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/chinese_drama.png" group-title="ENTERTAINMENT",Chinese Drama
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/157

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/one.png" group-title="ENTERTAINMENT",SONY ONE Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/SetOne/sa_dash_vmx/SetOne.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/gem.png" group-title="ENTERTAINMENT",SONY GEM
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/130

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/rock_enter.png" group-title="ENTERTAINMENT",ROCK ENTERTAINMENT
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/136

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/tvn.png" group-title="ENTERTAINMENT",TVN Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/tvN/sa_dash_vmx/tvN.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/vision_prime.png" group-title="ENTERTAINMENT",VISION PRIME Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/VisionPrime/sa_dash_vmx/VisionPrime.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/oktv.png" group-title="ENTERTAINMENT",OK TV Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/OKTV/sa_dash_vmx/OKTV.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/fmn.png" group-title="ENTERTAINMENT",FMN Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/FMN/sa_dash_vmx/FMN.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/ent.png" group-title="ENTERTAINMENT",MNC ENTERTAINMENT Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/MNCEntertainment/sa_dash_vmx/MNCEntertainment.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/celebrities.png" group-title="ENTERTAINMENT",CELEBRITIES TV Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/MNCInfotainment2/sa_dash_vmx/MNCInfotainment.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/tv5_asia.png" group-title="ENTERTAINMENT",TV5 MONDE Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/TV5/sa_dash_vmx/TV5.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/abc_australia.png" group-title="ENTERTAINMENT",ABC AUSTRALIA Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/AustraliaPlus/sa_dash_vmx/AustraliaPlus.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/nhk_world.png" group-title="ENTERTAINMENT",NHK WORLD Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/NHKWorldTV/sa_dash_vmx/NHKWorldTV.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/nhk_premium.png" group-title="ENTERTAINMENT",NHK WORLD PREMIUM Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/NHKWorldPremium/sa_dash_vmx/NHKWorldPremium.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/kbs_world.png" group-title="ENTERTAINMENT",KBS WORLD Auto Reso
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
http://103.127.209.247:8080/247@v2old/M0js5Y5vVA/35.m3u8

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/arirang.png" group-title="ENTERTAINMENT",ARIRANG Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/Arirang/sa_dash_vmx/Arirang.mpd

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/sbs_english.png" group-title="ENTERTAINMENT",SBS ENGLISH
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://newidco-sbs-1-eu.xiaomi.wurl.tv/playlist.m3u8

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/entertainment2/citra_bioskop.png" group-title="ENTERTAINMENT",Citra Bioskop
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://flash2.xdevel.com/rtptv/rtptv/playlist.m3u8?checkedby:iptvcat.com

=======================================================lifeitil===================================================

#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/lifestyle2/hgtv.png" group-title="LIFESTYLE",HGTV
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/76
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/lifestyle2/tlc.png" group-title="LIFESTYLE",TLC
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/77
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/lifestyle2/afn.png" group-title="LIFESTYLE",AFN
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/78
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/lifestyle2/lifetime.png" group-title="LIFESTYLE",LIFETIME Auto Reso
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/Lifetime/sa_dash_vmx/Lifetime.mpd
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/lifestyle2/fashiontv.png" group-title="LIFESTYLE",FASHION TV
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/79
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/lifestyle2/ftv_midnight.png" group-title="LIFESTYLE",Fashion TV Midnight
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/80
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/lifestyle2/okezone.png" group-title="LIFESTYLE",Okezone TV
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Linux; U; Android 4.2.2; he-il; NEO-X5-116A Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
https://melon-live-cdn.mncnow.id/live/eds/LifeStyleFashion/sa_dash_vmx/LifeStyleFashion.mpd
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/lifestyle/lifestyle_fashion.png" group-title="LIFESTYLE", Kaloopy TV
https://d35j504z0x2vu2.cloudfront.net/v1/master/0bc8e8376bd8417a1b6761138aa41c26c7309312/kaloopy/master.m3u8
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/lifestyle/lifestyle_fashion.png" group-title="LIFESTYLE", Jenny Live
https://5ee7c2b857b7f.streamlock.net/jennylive/smil:WEB3131/playlist.m3u8
#EXTINF:-1 tvg-logo="https://hometv.biz.id/logo/lifestyle/lifestyle_fashion.png" group-title="LIFESTYLE", MIAMI TV
https://59ec5453559f0.streamlock.net/miamitv/smil:WEB/playlist.m3u8

=============================================================================SPORTS ======================================================================

#EXTINF:-1 tvg-id="AstroSupersport" tvg-name="Astro SuperSport" tvg-logo="https://i.imgur.com/YqQIrY0.png" group-title="SPORTS",Astro SuperSport 1
http://kmkus.wanicelife.com:8880/3ca04303n08/asfefd4wr34/1722
#EXTINF:-1 tvg-id="AstroSupersport2" tvg-name="Astro SuperSport 2" tvg-logo="https://i.imgur.com/4wXmnDY.png" group-title="SPORTS",Astro SuperSport 2
http://kmkus.wanicelife.com:8880/3ca04303n08/asfefd4wr34/1721
#EXTINF:-1 tvg-id="AstroSupersport3" tvg-name="Astro SuperSport 3" tvg-logo="https://i.imgur.com/3SFILZl.png" group-title="SPORTS",Astro SuperSport 3
http://kmkus.wanicelife.com:8880/3ca04303n08/asfefd4wr34/1720
#EXTINF:-1 tvg-id="AstroSupersport4" tvg-name="Astro SuperSport 4" tvg-logo="https://i.imgur.com/v6cGRFh.png" group-title="SPORTS",Astro SuperSport 4
http://kmkus.wanicelife.com:8880/3ca04303n08/asfefd4wr34/1719
#EXTINF:-1 tvg-id="AstroSupersport5" tvg-name="Astro SuperSport 5" tvg-logo="https://i.imgur.com/jb1igcv.png" group-title="SPORTS",Astro SuperSport 5
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#https://webudit.webhd.ru/lb/premium43/index.m3u8|Origin=https://weblivehdplay.ru/

#EXTINF:-1 tvg-id="" tvg-name="ASSP 1" tvg-logo="https://play.gachor99.my.id:443/images/LIQTBDP4bSCZ4H0Gg5Eoa06gykMTlHjpyE83GX1iHHzwLVVMnEcuX_RWouFW_Ier.png" group-title="SPORTS",ASSP 1
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/118

#EXTINF:-1 tvg-id="" tvg-name="ASSP 2" tvg-logo="https://play.gachor99.my.id:443/images/LIQTBDP4bSCZ4H0Gg5Eoa06gykMTlHjpyE83GX1iHHy3O2LN8dDE9Jx24z8Ew69C.png" group-title="SPORTS",ASSP 2
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/119

#EXTINF:-1 tvg-id="" tvg-name="ASSP 3" tvg-logo="https://play.gachor99.my.id:443/images/LIQTBDP4bSCZ4H0Gg5Eoa06gykMTlHjpyE83GX1iHHyzgT70OFIIt3Sce2X7vmpH.png" group-title="SPORTS",ASSP 3
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/120

#EXTINF:-1 tvg-id="" tvg-name="ASSP 4" tvg-logo="https://play.gachor99.my.id:443/images/LIQTBDP4bSCZ4H0Gg5Eoa06gykMTlHjpyE83GX1iHHwVtUIS560IarIfHfmlE-r7.png" group-title="SPORTS",ASSP 4
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/121

#EXTINF:-1 tvg-id="" tvg-name="ASTRO ARENA 1" tvg-logo="https://play.gachor99.my.id:443/images/tXvDTN7YzfS8wgTso2geV4E7Y9ebadmR4ObVKzKg1sqNvMnOAU4YBxDcuvUj6EFwc_qzimmXulzw7R9vZpDjBg.png" group-title="SPORTS",ASTRO ARENA 1
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/11629

#EXTINF:-1 tvg-id="" tvg-name="ASTRO ARENA 2" tvg-logo="https://play.gachor99.my.id:443/images/tXvDTN7YzfS8wgTso2geV4E7Y9ebadmR4ObVKzKg1sqNvMnOAU4YBxDcuvUj6EFwc_qzimmXulzw7R9vZpDjBg.png" group-title="SPORTS",ASTRO ARENA 2
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/11815

#EXTINF:-1 tvg-logo="https://play.gachor99.my.id:443/images/tXvDTN7YzfS8wgTso2geV4E7Y9ebadmR4ObVKzKg1soQjAf-_H6yjnmydMX27Y9m.png" group-title="SPORTS",beIN SPORTS MY1
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/11937

#EXTINF:-1 tvg-logo="https://play.gachor99.my.id:443/images/tXvDTN7YzfS8wgTso2geV4E7Y9ebadmR4ObVKzKg1soQjAf-_H6yjnmydMX27Y9m.png" group-title="SPORTS",beIN SPORTS MY2
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/11938

#EXTINF:-1 tvg-logo="https://play.gachor99.my.id:443/images/tXvDTN7YzfS8wgTso2geV4E7Y9ebadmR4ObVKzKg1soQjAf-_H6yjnmydMX27Y9m.png" group-title="SPORTS",beIN SPORTS MY3
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/11939

#EXTINF:-1 tvg-logo="https://play.gachor99.my.id:443/images/LIQTBDP4bSCZ4H0Gg5Eoa06gykMTlHjpyE83GX1iHHwMp8C7IU8iv5HrBS6t0zda.png" group-title="SPORTS",ASTRO CRICKET
#EXTVLCOPT:http-user-agent=OTT Navigator/hometv.finale (Linux;Android 12) ExoPlayerLib/2.13.2
https://play.gachor99.my.id:443/hometv_lite/h6NwHhGE43/122

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/bein1id.png" group-title="SPORTS",Indihome beiN Sport 1 
#EXTVLCOPT:http-referrer=https://www.indihometv.com/
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cors-proxy.cooks.fyi/https://cdn08jtedge.indihometv.com/dassdvr/133/beib1/manifest.mpd

#EXTINF:-1 tvg-logo="http://guki.my.id/logo/sports/bein3id.png" group-title="SPORTS",Indihome beiN Sport 3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=69646b755f3130303030303030303030:e4a2359b05563399f1d9adfce641724a
https://cors-proxy.cooks.fyi/https://cdn08jtedge.indihometv.com/dassdvr/133/beib2/manifest.mpd

#EXTINF:-1 tvg-id="ELEVEN SPORTS 1.pt" tvg-logo="https://i.imgur.com/dAGWqnN.png" group-title="SPORTS" , DAZN ELEVEN 1 🇵🇹 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-054/stream.mpd

#EXTINF:-1 tvg-id="ELEVEN SPORTS 2.pt" tvg-logo="https://i.imgur.com/gDXw62Y.png" group-title="SPORTS" , DAZN ELEVEN 2 🇵🇹 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-055/stream.mpd 

#EXTINF:-1 tvg-id="ELEVEN SPORTS 3.pt" tvg-logo="https://i.imgur.com/syiHqYy.png" group-title="SPORTS" , DAZN ELEVEN 3 🇵🇹 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-056/stream.mpd
 
#EXTINF:-1 tvg-id="ELEVEN SPORTS 4.pt" tvg-logo="https://i.imgur.com/QvB9hdM.png" group-title="SPORTS" , DAZN ELEVEN 4 🇵🇹 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-057/stream.mpd

#EXTINF:-1 tvg-id="ELEVEN SPORTS 5.pt" tvg-logo="https://i.imgur.com/SZBhKt3.png" group-title="SPORTS" , DAZN ELEVEN 5 🇵🇹 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-058/stream.mpd

#EXTINF:-1 tvg-id="ELEVEN SPORTS 6.pt" tvg-logo="https://i.imgur.com/E0vqufB.png" group-title="SPORTS" , DAZN ELEVEN 6 🇵🇹 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-059/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://i.imgur.com/zF7Qyes.png", DAZN F1 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-016/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/3kJG4tH/dazn.png" group-title="Dazn Sports",DAZN 1 UK
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-045/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/3kJG4tH/dazn.png" group-title="Dazn Sports",DAZN 1 DE 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-017/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/zVyXvjM/dazn2.png" group-title="Dazn Sports",DAZN 2 DE 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-018/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/3kJG4tH/dazn.png" group-title="Dazn Sports",DAZN 1 ES 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-037/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/zVyXvjM/dazn2.png" group-title="Dazn Sports",DAZN 2 ES 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-038/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/bF51zms/1200px-DAZN-F1-logo-svg.png" group-title="Dazn Sports",DAZN F1 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-016/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/bF51zms/1200px-DAZN-F1-logo-svg.png" group-title="Dazn Sports",DAZN F1 
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=1061be12d303247426ec25e8369b2647&key=bd622b0e610295de3b0bccb850ccaaaa
#https://live.ll.ww.aiv-cdn.net/OTTB/dub-nitro/live/clients/dash/enc/cqbcvgkb83/out/v1/4dbe05ecfb1540448d82d68eeebfbb1c/cenc.mpd 

#EXTINF:-1 tvg-logo="https://i.ibb.co/TY7vtjy/dazn-laliga.png" group-title="Dazn Sports",LA LIGA 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-043/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/TY7vtjy/dazn-laliga.png" group-title="SPORTS",LALIGA
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=43d1c3b25207ff38b22ccfe17d302367&key=7b1f85f6e81059473b114c16a25c829a 
#https://live.ll.ww.aiv-cdn.net/OTTB/dub-nitro/live/clients/dash/enc/wjgklbtvhh/out/v1/659736a1e24c40e4865a80ffd75e7de7/cenc.mpd 

#EXTINF:-1 tvg-logo="https://i.ibb.co/hmjw88r/La-Liga-Hypermotion.png" group-title="Dazn Sports",LA LIGA HYPERMOTION 
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=6d08b265a6639e32da7c880d5491e3d2&key=0c92556ca14b95f367993710e7cfbc94 
#https://ottb.live.cf.ww.aiv-cdn.net/fra-nitro/live/clients/dash/enc/sjnpvfucqg/out/v1/3934680f71e04ed28dbf64fc52c3a6e7/cenc.mpd 

#EXTINF:-1 tvg-logo="https://i.ibb.co/hmjw88r/La-Liga-Hypermotion.png" group-title="Dazn Sports",LALIGA HYPERMOTION 
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=6d08b265a6639e32da7c880d5491e3d2&key=0c92556ca14b95f367993710e7cfbc94 
#https://ottb.live.cf.ww.aiv-cdn.net/dub-nitro/live/clients/dash/enc/tu06vubgf9/out/v1/7668f47d28e345979c072e361f3d3ce3/cenc.mpd 

#EXTINF:-1 tvg-logo="https://i.ibb.co/6Hc4hjQ/elevensports1.png" group-title="Dazn Sports",ELEVEN 1 PT 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-054/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/SwSDTXx/elevensports2.png" group-title="Dazn Sports",ELEVEN 2 PT
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-055/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/MnMWmLD/elevensports3.png" group-title="Dazn Sports",ELEVEN 3 PT 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-056/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/tCvGcVk/elevensports4.png" group-title="Dazn Sports",ELEVEN 4 PT 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-057/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/thZVscZ/elevensports5.png" group-title="Dazn Sports",ELEVEN 5 PT 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-058/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/wCJZH5q/elevensports6.png" group-title="Dazn Sports",ELEVEN 6 PT 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-059/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/6Hc4hjQ/elevensports1.png" group-title="Dazn Sports",DAZN ELEVEN 1 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-047/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ

#EXTINF:-1 tvg-logo="https://i.ibb.co/cDqY46x/dazn-eleven-pro-1.png" group-title="Dazn Sports",DAZN ELEVEN PRO 1 NL 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-049/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/cDqY46x/dazn-eleven-pro-1.png" group-title="SPORTS",DAZN ELEVEN PRO 1 FR 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-050/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/3kJG4tH/dazn.png" group-title="Dazn Sports",DAZN FAST+ 
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=cfb5e2b73bef4f3c878f25ab86a7451f&key=0d6712bf2a84edcc93d001a9613f6fec 
#http://dcj-ac-live.cdn.indazn.com/dash/dazn-linear-504/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/gy0k2NC/ZonaDAZN.png" group-title="Dazn Sports",ZONA DAZN 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-024/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/vJR6gHj/unbeaten.png" group-title="Dazn Sports",UNBEATEN 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-ac-live.cdn.indazn.com:443/dash/dazn-linear-044/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ 

#EXTINF:-1 tvg-logo="https://i.ibb.co/vBWdVB3/combat.png" group-title="SPORTS",DAZN COMBAT 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=cfb5e2b73bef4f3c878f25ab86a7451f&key=0d6712bf2a84edcc93d001a9613f6fec
#http://dcj-ac-live.cdn.indazn.com/dash/dazn-linear-502/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ

#EXTINF:-1 tvg-logo="https://i.ibb.co/3kJG4tH/dazn.png" group-title="Dazn Sports",DAZN 1 UK
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=82f8e2a17dac44c0a18f660479349c59&key=1b144f73e6fefe91cd05f850e2b589d0 
#https://dcf-ak-livedazn.akamaized.net/dashdrm/dazn-linear-045/stream.mpd 

#EXTINF:-1 tvg-logo="https://i.ibb.co/3kJG4tH/dazn.png" group-title="Dazn Sports",DAZN 1 DE 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=82f8e2a17dac44c0a18f660479349c59&key=1b144f73e6fefe91cd05f850e2b589d0
#https://dcf-ak-livedazn.akamaized.net/dashdrm/dazn-linear-017/stream.mpd 

#EXTINF:-1 tvg-logo="https://i.ibb.co/zVyXvjM/dazn2.png" group-title="Dazn Sports",DAZN 2 DE 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=82f8e2a17dac44c0a18f660479349c59&key=1b144f73e6fefe91cd05f850e2b589d0 
#https://dcf-ak-livedazn.akamaized.net/dashdrm/dazn-linear-018/stream.mpd 

#EXTINF:-1 tvg-logo="https://i.ibb.co/3kJG4tH/dazn.png" group-title="Dazn Sports",DAZN 1 ES
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=82f8e2a17dac44c0a18f660479349c59&key=1b144f73e6fefe91cd05f850e2b589d0 
#https://dcf-ak-livedazn.akamaized.net/dashdrm/dazn-linear-037/stream.mpd 

#EXTINF:-1 tvg-logo="https://i.ibb.co/zVyXvjM/dazn2.png" group-title="Dazn Sports",DAZN 2 ES 
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=82f8e2a17dac44c0a18f660479349c59&key=1b144f73e6fefe91cd05f850e2b589d0 
#https://dcf-ak-livedazn.akamaized.net/dashdrm/dazn-linear-038/stream.mpd

#EXTINF:-1 tvg-logo="https://i.ibb.co/bF51zms/1200px-DAZN-F1-logo-svg.png" group-title="Dazn Sports",DAZN F1
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=82f8e2a17dac44c0a18f660479349c59&key=1b144f73e6fefe91cd05f850e2b589d0 
#https://dcf-ak-livedazn.akamaized.net/dashdrm/dazn-linear-016/stream.mpd 

#EXTINF:-1 tvg-logo="https://i.ibb.co/TY7vtjy/dazn-laliga.png" group-title="Dazn Sports",LA LIGA 
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=https://vercel-php-clearkey-hex-base64-json.vercel.app/api/results.php?keyid=82f8e2a17dac44c0a18f660479349c59&key=1b144f73e6fefe91cd05f850e2b589d0 
#https://dcf-ak-livedazn.akamaized.net/dashdrm/dazn-linear-043/stream.mpd 

#EXTINF:-1 tvg-logo="https://www.sportsmarketing.fr/wp-content/uploads/2021/02/canal-ligue-1.jpg" group-title="SPORTS", DAZN CANAL+ LIGUE 1
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#https://dce-fs-live-dazn-cdn.dazn.com/dash/dazn-linear-046/stream.mpd

#EXTINF:-1 tvg-logo="https://image.discovery.indazn.com/ca/v2/ca/image?id=1e8qv74kj9ru71k69jmgy26gow_image-header_pRow_1690455045000" group-title="SPORTS", DAZN COMBAT
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=cfb5e2b73bef4f3c878f25ab86a7451f:0d6712bf2a84edcc93d001a9613f6fec
https://dcj-ac-live.cdn.indazn.com/dash/dazn-linear-502/stream.mpd

#EXTINF:-1 tvg-logo="https://image.discovery.indazn.com/ca/v2/ca/image?id=jyy9jw5qg2fo1t2oucwjqzi6r_image-header_pDach_1690558178000" group-title="SPORTS", DAZN FAST+
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=cfb5e2b73bef4f3c878f25ab86a7451f:0d6712bf2a84edcc93d001a9613f6fec
https://dcj-ac-live.cdn.indazn.com/dash/dazn-linear-504/stream.mpd

#EXTINF:-1 tvg-logo="https://image.discovery.indazn.com/ca/v2/ca/image?id=dxaycmnfa2rc14y5ww482fi2l_image-header_pDach_1687955212000&quality=70" group-title="SPORTS", DAZN RISE
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=cfb5e2b73bef4f3c878f25ab86a7451f:0d6712bf2a84edcc93d001a9613f6fec
https://dcj-ac-live.cdn.indazn.com/dash/dazn-linear-501/stream.mpd

#EXTINF:-1 tvg-logo="https://image.discovery.indazn.com/ca/v2/ca/image?id=19ptz9oy5cnz1145uk6phxtywh_image-header_pRow_1691575512000&quality=70" group-title="SPORTS", DAZN WOMEN'S FOOTBALL
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=cfb5e2b73bef4f3c878f25ab86a7451f:0d6712bf2a84edcc93d001a9613f6fec
https://dcj-ac-live.cdn.indazn.com/dash/dazn-linear-503/stream.mpd

#EXTINF:-1 tvg-logo="https://image.discovery.indazn.com/ca/v2/ca/image?id=1weziux6zy5mb16pev002ax1yu_image-header_pEs_1688456206000" group-title="SPORTS", DAZN LaLiga
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.manifest_type=mpd
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
https://dce-fs-live-dazn-cdn.dazn.com/dash/dazn-linear-043/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFV7fMwWm-r3a_xJ-RpbcLy0SGmnk3_BjUpg&usqp=CAU", DAZN Deutschland 1
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
https://dce-fs-live-dazn-cdn.dazn.com/dashdrm/dazn-linear-017/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGacPa9mEwqND458CjV-tNx_hdcKyesF9QkGI56cZ4AqGpgmgBIkshgV8a&s=10", DAZN Deutschland 2
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
https://dce-fs-live-dazn-cdn.dazn.com/dashdrm/dazn-linear-018/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFV7fMwWm-r3a_xJ-RpbcLy0SGmnk3_BjUpg&usqp=CAU", DAZN Espana1
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
https://dce-fs-live-dazn-cdn.dazn.com/dashdrm/dazn-linear-037/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGacPa9mEwqND458CjV-tNx_hdcKyesF9QkGI56cZ4AqGpgmgBIkshgV8a&s=10", DAZN Espana2
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
https://dce-fs-live-dazn-cdn.dazn.com/dashdrm/dazn-linear-038/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTByCUqHFxle-55IF_ZmwsodirZG3xlIt1ZhCxyh_Ot_hZeaR21stG9diYU&s=10",d Zona DAZN
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
https://dce-fs-live-dazn-cdn.dazn.com/dashdrm/dazn-linear-024/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPsMP06Ysgnn9YbWXdD-6ZWqBWHNgi_U98fg&usqp=CAU", DAZN F1
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#https://dce-fs-live-dazn-cdn.dazn.com/dashdrm/dazn-linear-016/stream.mpd

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRE3bAbfF4cH3-4s_UVPG2LpQgWu737H0MXwZE3-yP75SpuBAmDDogqVfQE&s=10", L'EQUIPE Du soir
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
https://dce-fs-live-dazn-cdn.dazn.com/dashdrm/dazn-linear-041/stream.mpd

#EXTINF:-1 tvg-id="Soccer Channel HD - [Channel 420].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/68y2OmC.png" group-title="SPORTS",Soccer Channel 
#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
https://melon-live-cdn.mncnow.id/live/eds/soccerchannel-test/sa_dash_vmx/soccerchannel-test.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="Sportstars - [Channel 102].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/OkQzNhc.png",Sportstars 1 HD 
#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi  
https://melon-live-cdn.mncnow.id/live/eds/MNCSports-HD/sa_dash_vmx/MNCSports-HD.mpd 

#EXTINF:-1 group-title="SPORTS" tvg-id="Sportstars 2 HD - [Channel 422].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/A1hlnLA.png",Sportstars 2 HD 
#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi  
https://melon-live-cdn.mncnow.id/live/eds/MNCSports2-HD/sa_dash_vmx/MNCSports2-HD.mpd 

#EXTINF:-1 group-title="SPORTS" tvg-id="Sportstars 3 - [Channel 99].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/dIcTZj3.png",Sportstars 3 HD 
#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
https://melon-live-cdn.mncnow.id/live/eds/MNCSports3-HD/sa_dash_vmx/MNCSports3-HD.mpd 

#EXTINF:-1 group-title="SPORTS" tvg-id="Sportstars 4 HD - [Channel 424].id"" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/qUYLcS8.png",Sportstars 4 HD 
#EXTVLCOPT:http-referrer=https://www.visionplus.id/ 
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha 
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NzEwNGYwNjEtNzBjNC0zNmJjLTkwZGMtMGQ1Yjg3ZWJhZTBi 
https://melon-live-cdn.mncnow.id/live/eds/Sportstar4/sa_dash_vmx/Sportstar4.mpd 

#EXTINF:-1 tvg-id= "SPOTV HD - [Channel 427].id" tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/BYw9xVW.png" group-title="SPORTS",SPOTV 
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://melon-live-cdn.mncnow.id/live/eds/SPOTV-HD/sa_dash_vmx/SPOTV-HD.mpd 

#EXTINF:-1 tvg-id="SPOTV 2 HD - [Channel 428].id"tvg-url="https://www.bevy.be/bevyfiles/indonesia.xml" tvg-logo="https://i.imgur.com/xXCBKAM.png" group-title="SPORTS",SPOTV 2 
#EXTVLCOPT:http-referrer=https://www.visionplus.id/
#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=https://mrpw.ptmnc01.verspective.net/?deviceId=NDIzMDJhZmUtYWRjMi0zNGJkLTkyN2EtYmE1ZDFlZWIwODEz
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://melon-live-cdn.mncnow.id/live/eds/SPOTV2-HD/sa_dash_vmx/SPOTV2-HD.mpd 

#EXTINF:-1 channel-id="samsung-GBBD1100008YW" tvg-id="GBBD1100008YW" tvg-chno="4008" tvg-logo="https://i.imgur.com/MQPysUU.png" group-title="SPORTS" , FIFA+ 
https://38ca3c9c.wurl.com/master/f36d25e7e52f1ba8d7e56eb859c636563214f541/U2Ftc3VuZy1nYl9GSUZBUGx1c19ITFM/playlist.m3u8 

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC 1" tvg-logo="https://i.imgur.com/4oY1vsV.png", SSC 1 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=d84c325f36814f39bbe59080272b10c3:550727de4c96ef1ecff874905493580f
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
http://ssc1-ak.akamaized.net/out/v1/c696e4819b55414388a1a487e8a45ca1/index.mpd 

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC 2" tvg-logo="https://i.imgur.com/PhLefpz.png", SSC 2 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=8bcfc55359e24bd7ad1c5560a96ddd3c:b5dcf721ab522af92a9d3bf0bd55b596
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc2-ak.akamaized.net/out/v1/a16db2ec338a445a82d9c541cc9293f9/index.mpd 

#EXTINF:-1group-title="SPORTS" tvg-id="SSC 3" tvg-logo="https://i.imgur.com/139SXBh.png", SSC 3 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=7de5dd08ad8041d586c2f16ccc9490a1:5e1503f3398b34f5099933fedab847ef
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc3-ak.akamaized.net/out/v1/42e86125555242aaa2a12056832e7814/index.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC 4" tvg-logo="https://i.imgur.com/hLVd527.png", SSC 4 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=5c672f6b85a94638872d0214f7806ed4:bf8756fbb866ee2d5c701c2289dd8de3
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc4-ak.akamaized.net/out/v1/5267ea5772874b0db24559d643eaad93/index.mpd 

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC 5" tvg-logo="https://i.imgur.com/zcvZijh.png", SSC 5 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=c88b512b17ab4f6cb09eb0ff4a1056ed:adc08ee1c20a734972a55c9aebbd1888
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc5-ak.akamaized.net/out/v1/99289eac5a7b4319905da595afbd792b/index.mpd 

#EXTINF:-1 group-title="SPORTS" tvg-logo="https://i.imgur.com/imgt0Ci.png", SSC EXTRA 1 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ecbc9e6fe6b145efb6658fb5cf7427f8:03c17e28911f71221acbc0b11f900401
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc-extra1-ak.akamaized.net/out/v1/647c58693f1d46af92bd7e69f17912cb/index.mpd

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC EXTRA 2" tvg-logo="https://i.imgur.com/qn9BKZs.png", SSC EXTRA 2 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4d89249bd4ca4ebc9e70443265f9507d:cf074ffd2646c9c2f8513b47fa57bc30
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc-extra2-ak.akamaized.net/out/v1/8b70de2b70d447ba8a7450ba90926a2d/index.mpd 

#EXTINF:-1 group-title="SPORTS" tvg-id="SSC EXTRA 3" tvg-logo="https://i.imgur.com/WHY3rt7.png", SSC EXTRA 3 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=98cfd6fd4812497fb24dc75f7545f2ee:d3006ee69e77b25939728ebf30d3180a
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
https://ssc-extra3-ak.akamaized.net/out/v1/8f1c6c3f05ef4284a64b342891bd85ae/index.mpd 

#EXTINF:-1 tvg-id="LaLiga+" tvg-name="LaLiga+" tvg-logo="https://i.imgur.com/XGVDFIZ.png" group-title="SPORTS", LaLiga+ 
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Web0S; Linux/SmartTV) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36 WebAppManager
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=82f8e2a17dac44c0a18f660479349c59:1b144f73e6fefe91cd05f850e2b589d0
http://dcf-ac-live.cdn.indazn.com/dashdrm/dazn-linear-043/stream.mpd

#KODIPROP:inputstream=inputstream.ffmpegdirect 
#KODIPROP:mimetype=video/mp2t 
#KODIPROP:inputstream.ffmpegdirect.is_realtime_stream=true 
#KODIPROP:inputstream.ffmpegdirect.stream_mode=timeshift 
#KODIPROP:inputstream.ffmpegdirect.manifest_type=ts 
#EXTINF:-1 tvg-id="" tvg-url="" tvg-logo="https://i.imgur.com/MbTpnwO.png" group-title="SPORTS",SONY SPORTS TEN 1 
http://starshare.live:8080/live/rvdgdf7647564/bvchgfd235454/154.ts 

#KODIPROP:inputstream=inputstream.ffmpegdirect 
#KODIPROP:mimetype=video/mp2t 
#KODIPROP:inputstream.ffmpegdirect.is_realtime_stream=true 
#KODIPROP:inputstream.ffmpegdirect.stream_mode=timeshift 
#KODIPROP:inputstream.ffmpegdirect.manifest_type=ts 
#EXTINF:-1 tvg-logo="https://i.imgur.com/LJGok7x.png" group-title="SPORTS",SONY SPORTS TEN 2 
http://starshare.live:8080/live/rvdgdf7647564/bvchgfd235454/31314.ts 

#KODIPROP:inputstream=inputstream.ffmpegdirect 
#KODIPROP:mimetype=video/mp2t #KODIPROP:inputstream.ffmpegdirect.is_realtime_stream=true 
#KODIPROP:inputstream.ffmpegdirect.stream_mode=timeshift 
#KODIPROP:inputstream.ffmpegdirect.manifest_type=ts 
#EXTINF:-1 tvg-logo="https://i.imgur.com/TWNbDTu.png" group-title="SPORTS",SONY SPORTS TEN 3 
http://starshare.live:8080/live/rvdgdf7647564/bvchgfd235454/146.ts 

#KODIPROP:inputstream=inputstream.ffmpegdirect 
#KODIPROP:mimetype=video/mp2t 
#KODIPROP:inputstream.ffmpegdirect.is_realtime_stream=true 
#KODIPROP:inputstream.ffmpegdirect.stream_mode=timeshift 
#KODIPROP:inputstream.ffmpegdirect.manifest_type=ts 
#EXTINF:-1 tvg-logo="https://i.imgur.com/TqTashc.png" group-title="SPORTS",SONY SPORTS TEN 4 
http://starshare.live:8080/live/rvdgdf7647564/bvchgfd235454/29469.ts 

#KODIPROP:inputstream=inputstream.ffmpegdirect 
#KODIPROP:mimetype=video/mp2t
#KODIPROP:inputstream.ffmpegdirect.is_realtime_stream=true 
#KODIPROP:inputstream.ffmpegdirect.stream_mode=timeshift 
#KODIPROP:inputstream.ffmpegdirect.manifest_type=ts 
#EXTINF:-1 tvg-logo="https://i.imgur.com/YEH5jdY.png" group-title="SPORTS",SONY SPORTS TEN 5 
http://starshare.live:8080/live/rvdgdf7647564/bvchgfd235454/176.ts 

#EXTINF:-1 tvg-logo="https://i.imgur.com/RUuK4yQ.png" group-title="SPORTS",True Premier 1 
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186563&extension=ts&play_shareext@premier1TH.ts

#EXTINF:-1 tvg-logo="https://i.imgur.com/EGgbpmt.png" group-title="SPORTS",True Premier 2 
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186576&extension=ts&play_shareext@premier2TH.ts

#EXTINF:-1 tvg-logo="https://i.imgur.com/3O0QDOm.png" group-title="SPORTS",True Premier 3 
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186569&extension=ts&play_shareext@premier3TH.ts

#EXTINF:-1 tvg-logo="https://i.imgur.com/cxTx5am.png" group-title="SPORTS",True Premier 4 
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186571&extension=ts&play_shareext@premier4TH.ts

#EXTINF:-1 tvg-logo="https://i.imgur.com/b55BU4O.png" group-title="SPORTS",True Premier 5 
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186573&extension=ts&play_shareext@premier5HD.ts

#EXTINF:-1 group-title="SPORTS" tvg-id="truesports1.th" tvg-logo="https://i.imgur.com/UPuBbOx.png",True Sports 1 
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186600&extension=ts&play_shareext@truesport1TH.ts

#EXTINF:-1 group-title="SPORTS" tvg-id="trueSports Arena.th" tvg-logo="https://i.imgur.com/UPuBbOx.png",True Sports 2 
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186593&extension=ts&play_shareext@truesport2TH.ts

#EXTINF:-1 group-title="SPORTS" tvg-id="truesports3.th" tvg-logo="https://i.imgur.com/UPuBbOx.png",True Sports 3 
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186602&extension=ts&play_shareext@truesport3.ts

#EXTINF:-1 group-title="SPORTS" tvg-id="truesports4.th" tvg-logo="https://i.imgur.com/UPuBbOx.png",True Sports 4 
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://sport.livedoomovies.com:4432/02_2sporthd4_720p/chunklist.m3u8 

#EXTINF:-1 group-title="SPORTS" tvg-id="truesports5.th" tvg-logo="https://i.imgur.com/UPuBbOx.png",True Sports 5 
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186596&extension=ts&play_shareext@truesport5TH.ts

#EXTINF:-0 tvg-id="TrueSport7.th" tvg-name="TrueSport7" tvg-logo="https://i.imgur.com/UPuBbOx.png"group-title="SPORTS",True Sports 7 
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186597&extension=ts&play_shareext@truesport7TH.ts

#EXTINF:-1 tvg-logo="https://i.imgur.com/X8I591M.png", tvg-id="ksport1hd" group-title="SPORTS", TNT Sports 1 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=ae26845bd33038a9c0774a0981007294:63ac662dde310cfb4cc6f9b43b34196d
http://live.ll.ww.aiv-cdn.net/OTTB/lhr-nitro/live/clients/dash/enc/wf8usag51e/out/v1/bd3b0c314fff4bb1ab4693358f3cd2d3/cenc.mpd

#EXTINF:-1 tvg-logo="https://i.imgur.com/SzOGiMM.png", tvg-id="ksport1hd" group-title="SPORTS", TNT Sports 2
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=6d1708b185c6c4d7b37600520c7cc93c:1aace05f58d8edef9697fd52cb09f441
http://live.ll.ww.aiv-cdn.net/OTTB/lhr-nitro/live/clients/dash/enc/f0qvkrra8j/out/v1/f8fa17f087564f51aa4d5c700be43ec4/cenc.mpd 

#EXTINF:-1 tvg-logo="https://i.imgur.com/sgGRQQu.png", tvg-id="ksport1hd" group-title="SPORTS", TNT Sports 3 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=4e993aa8c1f295f8b94e8e9e6f6d0bfe:86a1ed6e96caab8eb1009fe530d2cf4f
http://live.ll.ww.aiv-cdn.net/OTTB/lhr-nitro/live/clients/dash/enc/lsdasbvglv/out/v1/bb548a3626cd4708afbb94a58d71dce9/cenc.mpd

#EXTINF:-1 tvg-logo="https://i.imgur.com/C7BnCSV.png", tvg-id="ksport1hd" group-title="SPORTS", TNT Sports 4 
#KODIPROP:inputstream.adaptive.license_type=clearkey
#KODIPROP:inputstream.adaptive.license_key=e31a5a81caff5d07ea2411a571fc2e59:96c5ef69479732ae734f962748c19729
http://live.ll.ww.aiv-cdn.net/OTTB/lhr-nitro/live/clients/dash/enc/i2pcjr4pe5/out/v1/912e9db56d75403b8a9ac0a719110f36/cenc.mpd 

#EXTINF:-1 tvg-logo="https://i.imgur.com/9WSJVdE.png", tvg-id="ksport1hd" group-title="SPORTS", TNT SPORTS 5 
#KODIPROP:inputstream.adaptive.license_type=clearkey 
#KODIPROP:inputstream.adaptive.license_key=60c0d9b41475e01db4ffb91ed557fbcc:36ee40e58948ca15e3caba8d47b8f34b 
#http://live.ll.ww.aiv-cdn.net/OTTB/lhr-nitro/live/clients/dash/enc/gesdwrdncn/out/v1/79e752f1eccd4e18b6a8904a0bc01f2d/cenc.mpd

#EXTINF:-1 tvg-id="unifi Sports 1" tvg-logo="https://upload.wikimedia.org/wikipedia/commons/5/5a/UnifiSports2023.png" group-title="SPORTS", UNIFI SPORTS HD
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
#https://unifi-live01.secureswiftcontent.com/UnifiHD/live11.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/HPnShLT/premier.png" group-title="SPORTS",PREMIER|LEAGUE_peacok
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=002046c9a49b9ab1cdb6616bec5d26c3:d2f92f6b7edc9a1a05d393ba0c20ef9e
https://fsly.stream.peacocktv.com/Content/CMAF_CTR-4s/Live/channel(vc1021n07j)/master.mpd

#EXTINF:-1 tvg-id="" tvg-logo="https://i.imgur.com/MQPysUU.png" group-title="SPORTS",FIFA TV
https://38ca3c9c.wurl.com/master/f36d25e7e52f1ba8d7e56eb859c636563214f541/U2Ftc3VuZy1nYl9GSUZBUGx1c19ITFM/playlist.m3u8

#EXTINF:-1 tvg-id="" tvg-logo="https://i.ibb.co.com/HPnShLT/premier.png" group-title="SPORTS",PREMIER~LEAGUE_pluto
http://stitcher-ipv4.pluto.tv/v1/stitch/embed/hls/channel/62d816fcf24d280008762ee9livestitch/master.m3u8?deviceType=samsung-tvplus&deviceMake=samsung&deviceModel=samsung&deviceVersion=unknown&appVersion=unknown&deviceLat=0&deviceLon=0&deviceDNT=%7BTAROPT%7D&deviceId=%7BPSID%7D&advertisingId=%7BPSID%7D&us_privacy=1YNY&samsung_app_domain=%7BAPP_DOMAIN%7D&samsung_app_name=%7BAPP_NAME%7D&profileLimit=&profileFloor=&embedPartner=samsung-tvplus&profilesFromStream=true

#EXTINF:-1  tvg-logo="https://i.ibb.co/cbd3f9M/shareext-ufc-wwe-logo.jpg" group-title="SPORTS", UFC
https://stream.ads.ottera.tv/cl/29fmbD4wgol0FelXaMeAw/854x480_550000_3_f.m3u8

#EXTINF:-1 tvg-id="BellatorMMA.us" tvg-logo="https://i.imgur.com/VBKoLHk.png" group-title="SPORTS",PlutoTV•Bellator•MMA
#https://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ebc8688f3697d00072f7cf8/master.m3u8?

#KODIPROP:inputstream.adaptive.license_type=com.widevine.alpha
#KODIPROP:inputstream.adaptive.license_key=http://stitcher-ipv4.pluto.tv/v1/stitch/embed/hls/channel/60492fdd9989d30007ccd30a/master.m3u8?deviceType=samsung-tvplus&deviceMake=samsung&deviceModel=samsung&deviceVersion=unknown&appVersion=unknown&deviceLat=0&deviceLon=0&deviceDNT=%7BTARGETOPT%7D&deviceId=%7BPSID%7D&advertisingId=%7BPSID%7D&us_privacy=1YNY&samsung_app_domain=%7BAPP_DOMAIN%7D&samsung_app_name=%7BAPP_NAME%7D&profileLimit=&profileFloor=&embedPartner=samsung-tvplus
#EXTINF:-1 tvg-id="" tvg-name="Bein Sport ES" tvg-logo="https://blogger.googleusercontent.com/img/a/AVvXsEjPohdwyA4_9LHYj5IEgm9JeY-_Mo6D8IaG6MCm7SjUv6NbXlMB-tR3A119fED5WdTzupcAOAdAExLF53nV8OyDr9_IomqtjFnDcZHokaNM1CzOyVgxvr7g0nGUbnYGLB1PxhN1AdGKbrNVWU-UR8Nf3Z7x6jiOZScsUq_alKkAtmwr3SepJPwR4bhf=s720" group-title="SPORTS",Bein Extra
http://stitcher-ipv4.pluto.tv/v1/stitch/embed/hls/channel/60492fdd9989d30007ccd30a/master.m3u8?deviceType=samsung-tvplus&deviceMake=samsung&deviceModel=samsung&deviceVersion=unknown&appVersion=unknown&deviceLat=0&deviceLon=0&deviceDNT=%7BTARGETOPT%7D&deviceId=%7BPSID%7D&advertisingId=%7BPSID%7D&us_privacy=1YNY&samsung_app_domain=%7BAPP_DOMAIN%7D&samsung_app_name=%7BAPP_NAME%7D&profileLimit=&profileFloor=&embedPartner=samsung-tvplus

#EXTINF:-1 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/2/2f/Astro_ASSP1.png" group-title="SPORTS",ASSP 1
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium123/index.m3u8
#https://cors-proxy.elfsight.com/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186387&extension=ts&play_shareext@assp1.ts

#EXTINF:-1 tvg-logo="https://static.wikia.nocookie.net/logopedia/images/6/6b/Astro_SuperSport_2.png" group-title="SPORTS",ASSP 2
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium124/index.m3u8
#https://cors-proxy.elfsight.com/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186388&extension=ts&play_shareext@assp2.ts

#EXTINF:-1 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/3/37/Astro_ASSP3.png" group-title="SPORTS",ASSP 3
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium125/index.m3u8
htt#ps://cors-proxy.elfsight.com/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186389&extension=ts&play_shareext@assp3.ts

#EXTINF:-1 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/c/c0/Astro_ASSP4.png" group-title="SPORTS",ASSP 4
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium126/index.m3u8
#https://cors-proxy.elfsight.com/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186390&extension=ts&play_shareext@assp4.ts

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

#EXTINF:0 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/1/1a/Canal%2B_Sport_2015.png" group-title="SPORTS",Canal+ Sport 1
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium486/index.m3u8

#EXTINF:0 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/1/1a/Canal%2B_Sport_2015.png" group-title="SPORTS",Canal+ Sport 2
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium487/index.m3u8

#EXTINF:0 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/1/1a/Canal%2B_Sport_2015.png" group-title="SPORTS",Canal+ Sport 3
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium488/index.m3u8

#EXTINF:0 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/1/1a/Canal%2B_Sport_2015.png" group-title="SPORTS",Canal+ Sport 4
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium489/index.m3u8

#EXTINF:0 tvg-logo="https://upload.wikimedia.org/wikipedia/commons/1/1a/Canal%2B_Sport_2015.png" group-title="SPORTS",Canal+ Sport 5
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium490/index.m3u8

#EXTINF:-1 tvg-id="SuperSportMotorsport.za" tvg-logo="https://i.ibb.co/jDMKd9S/ssm.png" group-title="SPORTS",SuperSports Motorsport
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium424/index.m3u8

#EXTINF:-1 tvg-id="SuperSportPremierLeague.za" tvg-logo="https://i.ibb.co/87BG427/sspl.png" group-title="SPORTS",SuperSports Premier League
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium414/index.m3u8
##http://starshare.live:8080/live/rvdgdf7647564/bvchgfd235454/518.ts

#EXTINF:-1 tvg-id="SkySportsPremierLeague.uk" tvg-logo="https://i.ibb.co/nshXz2j/sky.jpg" group-title="SPORTS",Sky Sports Premier League
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium130/index.m3u8
#https://bq32.short.gy/offline_vaathala?channelId=286&uid=4944&deviceMac=00:1A:79:94:98:FE

#EXTINF:-1 tvg-id="SkySportsFootball.uk" tvg-logo="https://i.ibb.co/nshXz2j/sky.jpg" group-title="SPORTS",Sky Sports Football
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium35/index.m3u8
#https://bq32.short.gy/offline_vaathala?channelId=281&uid=4944&deviceMac=00:1A:79:94:98:FE

#EXTINF:-1 tvg-id="SkySportsRacing.uk" tvg-logo="https://i.ibb.co/nshXz2j/sky.jpg" group-title="SPORTS",Sky Sports Racing
#EXTVLCOPT:http-referrer=https://weblivehdplay.ru/
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1
https://webhdrus.onlinehdhls.ru/lb/premium554/index.m3u8

#EXTINF:-1  tvg-logo="https://raw.githubusercontent.com/inaldie/LOGO-CHANEL/main/HUB%20Premier.png" group-title="SPORTS", H premier 1
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@89.45.13.153:25461/play/live.php?mac=00:1A:79:B8:49:6A&stream=1350557&extension=ts&play_shareext@Hpremier1.ts

#EXTINF:-1  tvg-logo="https://dl.dropbox.com/scl/fi/p10h2rwi6tcjev8j1ra9a/Hpremier-2.jpg?rlkey=wq2tssaa0b3sf96en6mlhpyym&dl=0" group-title="SPORTS", H premier 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@89.45.13.153:25461/play/live.php?mac=00:1A:79:B8:49:6A&stream=1350558&extension=ts&play_shareext@Hpremier2.ts
 
#EXTINF:-1  tvg-logo="https://github.com/endrisusilo/endro/blob/main/HUB%20Premier%203.jpg?raw=true" group-title="SPORTS", H premier 3
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@89.45.13.153:25461/play/live.php?mac=00:1A:79:B8:49:6A&stream=1350559&extension=ts&play_shareext@Hpremier3.ts
 
#EXTINF:-1  tvg-logo="https://dl.dropbox.com/scl/fi/zd8dm9zsld3cb4akfw8cp/Hpremier-4.jpg?rlkey=jkwht84yszoh44sxooh3h21jl&dl=0" group-title="SPORTS", H premier 4
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
#https://cors-proxy.elfsight.com/http://shareext@ledir.thund.re/play/live.php?mac=00:1a:79:25:50:a8&stream=554965&extension=ts&play_shareext@Hpremier4.ts
 
#EXTINF:-1  tvg-logo="https://github.com/endrisusilo/endro/blob/main/HUB%20Premier%205.jpg?raw=true" group-title="SPORTS", H premier 5
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
#https://cors-proxy.elfsight.com/http://tuyullxt@mag.x-iptv.live/play/live.php?mac=00:1A:79:23:25:61&stream=1032525&extension=ts&play_token=tuyullxt@.ts
 
#EXTINF:-1  tvg-logo="https://github.com/endrisusilo/endro/blob/main/HUB%20Premier%206.jpg?raw=true" group-title="SPORTS", H premier 6
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
#https://cors-proxy.elfsight.com/http://tuyullxt@mag.x-iptv.live/play/live.php?mac=00:1A:79:23:25:61&stream=1032524&extension=ts&play_token=tuyullxt@.ts
 
#EXTINF:-1  tvg-logo="https://github.com/endrisusilo/endro/blob/main/HUB%20Premier%207.jpg?raw=true" group-title="SPORTS", H premier 7
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
#https://cors-proxy.elfsight.com/http://tuyullxt@mag.x-iptv.live/play/live.php?mac=00:1A:79:23:25:61&stream=1032523&extension=ts&play_token=tuyullxt@.ts
 
#EXTINF:-1  tvg-logo="https://dl.dropbox.com/s/ki6m4r7btvbha3z/Now%20Sports.jpeg" group-title="SPORTS", NOWSPORTS 1
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@ledir.thund.re/play/live.php?mac=00:1a:79:25:50:a8&stream=554624&extension=ts&play_shareext@Nowsport1.ts

#EXTINF:-1  tvg-logo="https://dl.dropbox.com/s/ki6m4r7btvbha3z/Now%20Sports.jpeg" group-title="SPORTS", NOWSPORTS 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@ledir.thund.re/play/live.php?mac=00:1a:79:25:50:a8&stream=554623&extension=ts&play_shareext@nowsport2.ts
 
#EXTINF:-1  tvg-logo="https://dl.dropbox.com/s/ki6m4r7btvbha3z/Now%20Sports.jpeg" group-title="SPORTS", NOWSPORTS 3
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@ledir.thund.re/play/live.php?mac=00:1a:79:25:50:a8&stream=554622&extension=ts&play_shareext@nowsport3.ts
 
#EXTINF:-1  tvg-logo="https://dl.dropbox.com/s/ki6m4r7btvbha3z/Now%20Sports.jpeg" group-title="SPORTS", NOWSPORTS 4
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http:///shareext@ledir.thund.re/play/live.php?mac=00:1a:79:25:50:a8&stream=554621&extension=ts&play_shareext@nowsport4.ts
 
#EXTINF:-1  tvg-logo="https://dl.dropbox.com/s/ki6m4r7btvbha3z/Now%20Sports.jpeg" group-title="SPORTS", NOWSPORTS 5
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@ledir.thund.re/play/live.php?mac=00:1a:79:25:50:a8&stream=554620&extension=ts&play_shareext@nowsport5.ts
 
#EXTINF:-1  tvg-logo="https://dl.dropbox.com/s/ki6m4r7btvbha3z/Now%20Sports.jpeg" group-title="SPORTS", NOWSPORTS 6
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
#https://cors-proxy.elfsight.com/http://tuyullxt@mag.x-iptv.live/play/live.php?mac=00:1A:79:23:25:61&stream=1032474&extension=ts&play_token=tuyullxt@.ts
 
#EXTINF:-1  tvg-logo="https://dl.dropbox.com/s/ki6m4r7btvbha3z/Now%20Sports.jpeg" group-title="SPORTS", NOWSPORTS 7
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
#https://cors-proxy.elfsight.com/http://tuyullxt@mag.x-iptv.live/play/live.php?mac=00:1A:79:23:25:61&stream=1032473&extension=ts&play_token=tuyullxt@.ts

#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropbox.com/s/zd8pjjkgbaidwpx/images%20%288%29.jpeg" group-title="SPORTS",beIN Sports Premium 1
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
#https://cors-proxy.elfsight.com/http://shareext@theking365tv.ws/play/live.php?mac=00:1A:79:5c:f4:67&stream=45706&extension=ts&play_token=shareext@.ts
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropbox.com/s/zd8pjjkgbaidwpx/images%20%288%29.jpeg" group-title="SPORTS",beIN Sports Premium 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
#https://cors-proxy.elfsight.com/http://shareext@theking365tv.ws/play/live.php?mac=00:1A:79:5c:f4:67&stream=45708&extension=ts&play_token=shareext@.ts
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropbox.com/s/zd8pjjkgbaidwpx/images%20%288%29.jpeg" group-title="SPORTS",beIN Sports Premium 3
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
#https://cors-proxy.elfsight.com/http://shareext@theking365tv.ws/play/live.php?mac=00:1A:79:5c:f4:67&stream=45710&extension=ts&play_token=shareext@.ts
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropbox.com/s/yoozpupco3ul21t/images%20%285%29.jpeg" group-title="SPORTS",beIN Sports 1 th
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186614&extension=ts&play_shareext@beinsport1TH.ts
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropbox.com/s/yoozpupco3ul21t/images%20%285%29.jpeg" group-title="SPORTS",beIN Sports 2 th
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@livein1.com/play/live.php?mac=00:1a:79:b1:85:5e&stream=186615&extension=ts&play_shareext@beinsport2TH.ts
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropbox.com/s/yoozpupco3ul21t/images%20%285%29.jpeg" group-title="SPORTS",beIN Sports 3 English
#https://sc2022.stream-link.org/tv2306.php?id=s17

#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/0c6jvddo9q5kow4/supersports.png" group-title="SPORTS",SuperSport Premier League 
#http://starshare.live:8080/live/rvdgdf7647564/bvchgfd235454/518.ts
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/0c6jvddo9q5kow4/supersports.png" group-title="SPORTS",SuperSport Football
#http://starshare.live:8080/live/rvdgdf7647564/bvchgfd235454/523.ts
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/0c6jvddo9q5kow4/supersports.png" group-title="SPORTS",SuperSport LaLiga
#http://starshare.live:8080/live/rvdgdf7647564/bvchgfd235454/515.ts

#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/0c6jvddo9q5kow4/supersports.png" group-title="SPORTS",SuperSport Motorsports
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/v43y2sxoikzhq6z/arenasport.png" group-title="SPORTS",Arena Sport 1
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/arena1.mpd
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/v43y2sxoikzhq6z/arenasport.png" group-title="SPORTS",Arena Sport 2
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.62
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
https://webtvstream.bhtelecom.ba/hls6/arena2.mpd
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/v43y2sxoikzhq6z/arenasport.png" group-title="SPORTS",Arena Sport 3
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/arena3.mpd
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/v43y2sxoikzhq6z/arenasport.png" group-title="SPORTS",Arena Sport 4
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/arena4.mpd
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/v43y2sxoikzhq6z/arenasport.png" group-title="SPORTS",Arena Sport 5
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/arena5.mpd
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/x502xa7pvjj6wt9/arena1premium.png" group-title="SPORTS",Arena Premium 1
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/as_premium1.mpd
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/yd5zpcflrc6s214/arena2premium.png" group-title="SPORTS",Arena Premium 2
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/as_premium2.mpd
 
#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://dl.dropboxusercontent.com/s/4zinxnfky1ad141/arena3premium.png" group-title="SPORTS",Arena Premium 3
#KODIPROP:inputstreamaddon=inputstream.adaptive
#KODIPROP:inputstream.adaptive.manifest_type=dash
#KODIPROP:inputstream.adaptive.license_type=org.w3.clearkey
#KODIPROP:inputstream.adaptive.license_key=c18b6aa739be4c0b774605fcfb5d6b68:e41c3a6f7532b2e3a828d9580124c89d
#EXTVLCOPT:http-user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36
https://webtvstream.bhtelecom.ba/hls6/as_premium3.mpd

#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://i.ibb.co.com/2Sk50CJ/optus1.jpg" group-title="SPORTS",optus 1
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@ledir.thund.re/play/live.php?mac=00:1a:79:25:50:a8&stream=333576&extension=ts&play_shareext@0ptus1.ts

#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://i.ibb.co.com/2Sk50CJ/optus1.jpg" group-title="SPORTS",optus 2
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@ledir.thund.re/play/live.php?mac=00:1a:79:25:50:a8&stream=333575&extension=ts&play_shareext@0ptus2.ts

#EXTINF:0 tvg-id="" tvg-name="" tvg-logo="https://i.ibb.co.com/2Sk50CJ/optus1.jpg" group-title="SPORTS",optus 3
#EXTVLCOPT:http-user-agent=VLC/3.2.21 LibVLC/3.2.21
https://cors-proxy.cooks.fyi/http://shareext@ledir.thund.re/play/live.php?mac=00:1a:79:25:50:a8&stream=333574&extension=ts&play_shareext@0ptus3.ts



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

<=========================================== Malaysia ==========================================>

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
