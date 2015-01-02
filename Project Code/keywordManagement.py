#Python GUI Form to dynamically insert the keywords into database

#IMPORT LIBRARIES
from Tkinter import *
import sqlite3

#DEFINING CLASS
class TwitterKeywords:
    #constructor with 2 arguments
    def __init__(self,master):
        self.master=master
        frame = Frame(master)
        frame.pack()

        userText = StringVar
        #cb = BooleanVar ()

        # CREATING DATABASE (FIRST TIME YOU RUN THIS PROGRAM, A DB IS CREATED | THE NEXT TIME YOU RUN IT, THE JUST CREATED DB OPENS)
        self.con=sqlite3.connect('projectDB')
        self.cur=self.con.cursor()
        
        # CREATING TABLE INTO DATABASE (Uncomment the statement below, ONLY WHEN you run the program for very FIRST TIME)
        self.cur.execute('CREATE TABLE `mykeywords` (`id` INTEGER PRIMARY KEY AUTOINCREMENT,`keyword`	CHAR(20))')

        # DESIGNING LABEL
        self.label = Label(frame, text = "Enter  a keyword:")
        self.label.pack(side=TOP)

        # DESIGNING ENTRYBOX
        self.userText = Entry(frame)
        self.userText.pack(side=TOP)

        # DESIGNING CHECK BOX
        # self.check1 = Checkbutton(frame, text="ACTIVE", variable = cb, command = self.boxresult)
        # self.check1.pack()

        #  DESIGNING BUTTON FOR INSERTING IN THE KEYWORDS
        self.button1 = Button(frame, text='Insert Keyword', command = self.insertRec)
        self.button1.pack(side=TOP)

        #  DESIGNING BUTTON FOR LISTING ALL THE KEYWORDS
        self.button2 = Button(frame, text='List all Keywords', command = self.listRec)
        self.button2.pack(side=TOP)

        #  DESIGNING BUTTON FOR CLOSING THE DATABASE
        self.button3 = Button(frame, text='Close Database', command = self.closeMyDB)
        self.button3.pack(side=BOTTOM)
        
    def insertRec(self):
        self.cur.execute ('INSERT INTO mykeywords (keyword) VALUES (?)', (self.userText.get(),))
        self.con.commit()

    def listRec(self):
        self.cur.execute('SELECT *  FROM mykeywords')
        print(self.cur.fetchall())
        
    def closeMyDB(self):
         self.con.close

    #def boxresult(self):
        #yes =""

        #if self.cb.get():
            #yes += "yes"
        
root = Tk()
root.title("UI Form for TweetSearchKeywords")
root.geometry ("500x300")
twkey = TwitterKeywords(root)
root.mainloop()
 
