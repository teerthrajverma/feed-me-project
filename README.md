# feed-me-project

Title of project -  FEED ME

Description - the basic idea is that a device which is connected to wifi  will be installed in every area (generally one in five km)
people can register at any time throughout the day by placing their fingerprint 
the total count will be sent to server and then will be forwarded to social organisations of that local area who will serve food packets to them
at same spot at a fixed time once a day .
NOTE __people will sanitize their hand before placing on device *********

Hardware and Software Requirements -  
                                     Softwares used                      Hardware used
                                     ARDUINO IDE                         ESP8266 wifi module
                                     XAMPP APPLICATION                   16*2 lcd screen with I2C bus 
                                                                         fingerprint sensor
                                                                         
Process flow -     
                        all user enter their fingerprint  >  fingerprint data is checked >  if present already then no registration  takes place   
                        >  else registeration is done  >  total count is saved and sent on server  >  server sents a mssage of total count to NGO's 
                        >  NGO's on their behalf serve that much food packets to people at a given time at that place.
                                     
