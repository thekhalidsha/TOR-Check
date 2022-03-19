import requests
import os
import sys
import re

word = "Congratulations. This browser is configured to use Tor." #THE SENTENCE SHOULD BE PRECISE
check = requests.get('https://check.torproject.org')
if word in check.text:
  print ("Tor Configured Successfully!")
else:
       print ("Connection not appears to be Routed via Tor!")
       exit()
