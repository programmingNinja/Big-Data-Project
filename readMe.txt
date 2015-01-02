This file contains the description of various files and what does it contain.
Description about the project can be found out in the Project Report.
------------------------------------------------------------------------------
File name: keywordManagement

Type: python file

Description: Collecting tweets was the first part of our project
these tweets were supposed to be collected based on certain keywords 
and hashtags. To dynamically maintain(insert new hashtags and delete 
old ones) the hashtags we thought of creating a UI based script that 
will do the job. So to accomplish this we wrote this script. 
Unfortunately we did not use it eventually and inserted the hashtags 
and keywords for searching tweets in a different way

==============================================================================
File name: readTweets

Type: python file

Description: This file contains code that collects tweets related to 
supplied keywords and hashtags. It stores the retrieved tweets (json)
as a csv file in a specified folder.
===============================================================================
File name: extractData

Type: php file

Description: This file contains code which reads the tweets retrieved 
by readTweets and gets the extracts the required data from the JSON and
stores it in the database. 
===============================================================================
File name: hive_raw

Type: SQL

Description: This file contains code which has the same functionality as
extractData viz. taking the raw data and putting into a database except 
the fact that the structure of the database is different
and it is executed in Apache HIVE and stored in Apache HCatalog.
===============================================================================
File name: dictionary

Type: tsv

Description: It contains dictionary words along with the sentiments for 
each word. It will be used for sentiment analysis.
===============================================================================
File name: hiveddlog

Type: SQL

Description: This is the file that contains code for sentiment analysis.
Sentiment analysis is done in HIVE so that we can use mapReduce and the 
task can be done faster. It calculates the sentiments of the tweets and 
assigns a score to them and store it in a database.
===============================================================================
File name: hashtagwiseAnalysis

Type: Mostly SQL, little bit of txt

Description: After assigning sentiment scores to the tweets, we used HIVE queries
to do some analysis based on hashtags. We wanted to compute the sentiments based 
on hashtags and hence this file contains queries to do that. 
================================================================================= 

Note: During the course of the project we also made a folder on Google Drive which
contains everything (data, code, results etc). If you want to view that, we can share
it with you as well.