#! /usr/bin/env python
import sys
sys.path.append("/home/lbutler/public_html/Team14/requests-2.13.0")
import requests
languages = {1 : "PYTHON", 2: "C"}
#length of arguments is len(sys.argv)
#arg list is str(sys.argv)


RUN_URL = "https://api.hackerearth.com/code/run/"

CLIENT_SECRET = "4603eb0dc1e2616892bd7d60f8743602d2d22f9a"

inputFile = sys.argv[1] 

source = open(inputFile,"r")

data = {
    'client_secret' : CLIENT_SECRET,
    'async' : 0,
    'source' : source.read(),
    'lang' : str(sys.argv[2]),
    'time_limit': 10,
    'memory_limit':262144,
}

r = requests.post(RUN_URL, data=data)
source.close()
output = r.json()

if (output['compile_status'] == "OK"):
    print "Output:<br> "
    print output['run_status']['output']
else:
    print "Error(s) detected:<br>"
    print output['compile_status']
