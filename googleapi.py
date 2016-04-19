import urllib2
import json
import pprint

#link that does not change
default_string = "https://www.googleapis.com/customsearch/v1?key="

# key and engine ID's
keyID = "AIzaSyDcV8xHWNgE3U0HjOy4IBfqPfW9dl-tSKM"
engineID = "000474850362420949879:o5cf66syyny"

#query values
first_name = "Alvio"
last_name = "Dominguez"
query =  first_name + "+" + last_name

#total link value
total = default_string + keyID + "&cx=" + engineID + "&q=" + query

# print total
# data = urllib2.urlopen('https://www.googleapis.com/customsearch/v1?key=AIzaSyDcV8xHWNgE3U0HjOy4IBfqPfW9dl-tSKM&cx=000474850362420949879:o5cf66syyny&q=Alvio+Dominguez')
data = urllib2.urlopen(total)
data = json.load(data)

#Print the raw content of the first result
# pprint.PrettyPrinter(indent=4).pprint(data['items'][0]) #

# Writing JSON data
with open('data.json', 'w') as f:
    json.dump(data, f, sort_keys = True, indent = 4)


# Reading JSON data back
with open('data.json', 'r') as f:
     processed = json.load(f)

print processed['items'][1]['snippet']
