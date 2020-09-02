from flask import Flask, render_template,request,redirect,flash,url_for
from flask import *    
from flaskext.mysql import MySQL
from flask import request
from flask import Flask, render_template,request,redirect,flash,url_for
from flask import *    
from flaskext.mysql import MySQL
from flask import request
import pandas as pd
from sklearn.model_selection import train_test_split
import missingno as msno
import warnings
warnings.filterwarnings('ignore')
import pickle
mysql = MySQL()
app = Flask(__name__)
model = pickle.load(open('model.pkl', 'rb' ))
app.config['MYSQL_DATABASE_USER'] ="root"
app.config['MYSQL_DATABASE_PASSWORD'] = " "
app.config['MYSQL_DATABASE_DB'] ="project"
app.config['MYSQL_DATABASE_HOST'] = "localhost"
mysql.init_app(app)
con=mysql.connect()
cursor=con.cursor()
app.secret_key = 'your_secret_key'
@app.route("/")
def home():
    return render_template("index.html")
    
@app.route("/register")
def register():
    return render_template("register.php")
    
@app.route("/registerform" , methods=['POST'])
def registerform():
	username=request.form['username']
	email=request.form['email']
	std=request.form['std']
	password_1=request.form['password_1']
	password_2=request.form['password_2']
	query_string = "SELECT * FROM users WHERE email=%s "
	cursor.execute(query_string, (email))
	data = cursor.fetchall()
	if data:
		flash("Email Id Already Existed")
		return render_template("register.php")
	else :
		if(password_1!=password_2):
			flash("password Not Confirmed")
			return render_template("register.php")
		else:
			return insertdata()
			
	con.commit()
	#return "successfully registered"
	# return render_template("index.html")
def insertdata():
	username=request.form['username']
	email=request.form['email']
	std=request.form['std']
	password_1=request.form['password_1']
	password_2=request.form['password_2']
	cursor.execute("insert into users (username,email,std,password) values (%s,%s,%s,%s)",(username,email,std,password_1))
	con.commit()
	session['username']=request.form['username']
	session['std']=request.form['std']
	if 'username' in session:
		userdispaly=session['username']
	if 'std' in session:
		userstd=session['std']
	return render_template("reading.php")

@app.route("/readingform" , methods=['POST'])
def readingform():
	data=request.form['data']
	username=session['username']	
	cursor.execute("insert into readingsurvey(username,ans) values(%s,%s)",(username,data))
	con.commit()
	return render_template("spelling.php")
	
@app.route("/spellingform" , methods=['POST'])
def spellingform():
	data=request.form['data']
	username=session['username']
	cursor.execute("insert into spellingsurvey(username,ans) values(%s,%s)",(username,data))
	con.commit()
	return render_template("memory.php")

@app.route("/memoryform" , methods=['POST'])
def memoryform():
	data=request.form['data']
	username=session['username']
	cursor.execute("insert into memorysurvey(username,ans) values(%s,%s)",(username,data))
	con.commit()
	return stdcheck()

def stdcheck():
	username=session['std']
	if username=='1':
		return render_template("quiz1.php")
	elif username=='2':
		return render_template("age2q1.php")
	elif username=='3':
		return render_template("age3q1.php")
	elif username=='4':
		return render_template("age4q1.php")
	return username
	
@app.route("/mathage1" , methods=['POST'])
def mathage1():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	cursor.execute("insert into mathage1(username,ans1,ans2,ans3,ans4) values(%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4))
	con.commit()
	return render_template("quiz2.php")

@app.route("/sosage1",methods=['POST'])
def sosage1():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	cursor.execute("insert into sosage1(username,ans1,ans2,ans3) values(%s,%s,%s,%s)",(username,ans1,ans2,ans3))
	con.commit()
	return render_template("quiz3.php")

@app.route("/pvage1",methods=['POST'])
def pvage1():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	cursor.execute("insert into picvocabage1(username,ans1,ans2,ans3,ans4) values(%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4))
	con.commit()
	return render_template("quiz4.php")

@app.route("/pcage1",methods=['POST'])
def pcage1():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	cursor.execute("insert into passageage1(username,ans1,ans2,ans3,ans4) values(%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4))
	con.commit()
	return render_template("quiz5.php")

@app.route("/lwage1",methods=['POST'])
def lwage1():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	cursor.execute("insert into wordidentifyage1(username,ans1,ans2,ans3) values(%s,%s,%s,%s)",(username,ans1,ans2,ans3))
	con.commit()
	return render_template("quiz6.php")
	

@app.route("/srage1",methods=['POST'])
def srage1():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	cursor.execute("insert into sentencereadage1(username,ans1,ans2) values(%s,%s,%s)",(username,ans1,ans2))
	con.commit()
	return logoutage1()

def logoutage1():
	if 'username' in session:  
		session.pop('username',None)  
		return render_template('index.html');  
	else:  
		return '<p>user already logged out</p>'




# age2

@app.route("/mathage2" , methods=['POST'])
def mathage2():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	cursor.execute("insert into mathage2(username,ans1,ans2,ans3) values(%s,%s,%s,%s)",(username,ans1,ans2,ans3))
	con.commit()
	return render_template("age2q2.php")

@app.route("/sosage2",methods=['POST'])
def sosage2():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	cursor.execute("insert into sosage2(username,ans1,ans2,ans3) values(%s,%s,%s,%s)",(username,ans1,ans2,ans3))
	con.commit()
	return render_template("age2q3.php")

@app.route("/pvage2",methods=['POST'])
def pvage2():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	cursor.execute("insert into picvocabage2(username,ans1,ans2,ans3,ans4) values(%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4))
	con.commit()
	return render_template("age2q4.php")

@app.route("/pcage2",methods=['POST'])
def pcage2():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	cursor.execute("insert into passageage2(username,ans1,ans2,ans3,ans4) values(%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4))
	con.commit()
	return render_template("age2q5.php")

@app.route("/lwage2",methods=['POST'])
def lwage2():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	cursor.execute("insert into wordidentifyage2(username,ans1,ans2,ans3,ans4) values(%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4))
	con.commit()
	return render_template("age2q6.php")
	

@app.route("/srage2",methods=['POST'])
def srage2():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	cursor.execute("insert into sentencereadage2(username,ans1,ans2) values(%s,%s,%s)",(username,ans1,ans2))
	con.commit()
	return logoutage2()

def logoutage2():
	if 'username' in session:  
		session.pop('username',None)  
		return render_template('index.html');  
	else:  
		return '<p>user already logged out</p>'



#age3

@app.route("/mathage3" , methods=['POST'])
def mathage3():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	ans5=request.form['result5']
	ans6=request.form['result6']
	ans7=request.form['result7']
	ans8=request.form['result8']
	cursor.execute("insert into mathage3(username,ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8) values(%s,%s,%s,%s,%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8))
	con.commit()
	return render_template("age3q2.php")

@app.route("/sosage3",methods=['POST'])
def sosage3():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	cursor.execute("insert into sosage3(username,ans1,ans2,ans3) values(%s,%s,%s,%s)",(username,ans1,ans2,ans3))
	con.commit()
	return render_template("age3q3.php")

@app.route("/pvage3",methods=['POST'])
def pvage3():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	cursor.execute("insert into picvocabage3(username,ans1,ans2,ans3,ans4) values(%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4))
	con.commit()
	return render_template("age3q4.php")

@app.route("/pcage3",methods=['POST'])
def pcage3():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	cursor.execute("insert into passageage3(username,ans1,ans2,ans3,ans4) values(%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4))
	con.commit()
	return render_template("age3q5.php")

@app.route("/lwage3",methods=['POST'])
def lwage3():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	cursor.execute("insert into wordidentifyage3(username,ans1,ans2,ans3) values(%s,%s,%s,%s)",(username,ans1,ans2,ans3))
	con.commit()
	return render_template("age3q6.php")
	

@app.route("/srage3",methods=['POST'])
def srage3():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	cursor.execute("insert into setencereadage3(username,ans1,ans2) values(%s,%s,%s)",(username,ans1,ans2))
	con.commit()
	return logoutage3()

def logoutage3():
	if 'username' in session:  
		session.pop('username',None)  
		return render_template('index.html');  
	else:  
		return '<p>user already logged out</p>'


#age4

@app.route("/mathage4" , methods=['POST'])
def mathage4():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	cursor.execute("insert into mathage4(username,ans1,ans2,ans3,ans4) values(%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4))
	con.commit()
	return render_template("age4q2.php")

@app.route("/sosage4",methods=['POST'])
def sosage4():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	cursor.execute("insert into sosage4(username,ans1,ans2,ans3) values(%s,%s,%s,%s)",(username,ans1,ans2,ans3))
	con.commit()
	return render_template("age4q3.php")

@app.route("/pvage4",methods=['POST'])
def pvage4():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	cursor.execute("insert into picvocabage4(username,ans1,ans2,ans3,ans4) values(%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4))
	con.commit()
	return render_template("age4q4.php")

@app.route("/pcage4",methods=['POST'])
def pcage4():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	ans4=request.form['result4']
	cursor.execute("insert into passageage4(username,ans1,ans2,ans3,ans4) values(%s,%s,%s,%s,%s)",(username,ans1,ans2,ans3,ans4))
	con.commit()
	return render_template("age4q5.php")

@app.route("/lwage4",methods=['POST'])
def lwage4():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	ans3=request.form['result3']
	cursor.execute("insert into wordidentifyage4(username,ans1,ans2,ans3) values(%s,%s,%s,%s)",(username,ans1,ans2,ans3))
	con.commit()
	return render_template("age4q6.php")
	

@app.route("/srage4",methods=['POST'])
def srage4():
	username=session['username']
	ans1=request.form['result1']
	ans2=request.form['result2']
	cursor.execute("insert into sentencereadage4(username,ans1,ans2) values(%s,%s,%s)",(username,ans1,ans2))
	con.commit()
	return logoutage4()

def logoutage4():
	if 'username' in session:  
		session.pop('username',None)  
		return render_template('index.html');  
	else:  
		return '<p>user already logged out</p>'




@app.route("/logout")
def logout():
	if 'username' in session:  
		session.pop('username',None)  
		return render_template('index.html');  
	else:  
		return '<p>user already logged out</p>' 


@app.route("/login")
def login():
    return render_template("login.php")

@app.route("/loginform" , methods=['POST'])
def loginform():
	loginusername=request.form['loginusername']
	loginpassword=request.form['loginpassword']
	session['loginusername']=request.form['loginusername']
	if 'loginusername' in session:
		userdispaly=session['loginusername']
	query_stringlogin = "SELECT * FROM users WHERE username=%s && password=%s"
	cursor.execute(query_stringlogin, (loginusername,loginpassword,))
	data = cursor.fetchone()
	# return render_template("option.html")

	if data :
		df0 = pd.read_csv('data/LWR1.csv')
		df1 = pd.read_csv('data/MOR1.csv')
		df2 = pd.read_csv('data/PCR1.csv')
		df3 = pd.read_csv('data/PVR1.csv')
		df4 = pd.read_csv('data/SRR1.csv')
		#spelling data
		df5 = pd.read_csv('data/LWS1.csv')
		df6 = pd.read_csv('data/PVS1.csv')
		df7 = pd.read_csv('data/SOSS1.csv')
		#memory data
		df8 = pd.read_csv('data/LWM1.csv')
		df9 = pd.read_csv('data/LSM1.csv')
		df10 = pd.read_csv('data/MOM1.csv')
		df11 = pd.read_csv('data/PCM1.csv')
		df12 = pd.read_csv('data/PVM1.csv')
		df13 = pd.read_csv('data/SOM1.csv')
		#parent's feedback
		df14 = pd.read_csv('data/PFR1.csv')


		dl = pd.merge(df0,df1, left_on='id ', right_index=True)
		dd  = pd.merge(dl,df2, left_on='id ', right_index=True)
		de  = pd.merge(dd,df3, left_on='id ', right_index=True)
		d  = pd.merge(de,df4, left_on='id ', right_index=True)
		dz = pd.merge(d,df5, left_on='id ', right_index=True)
		dx =  pd.merge(dz,df6, left_on='id ', right_index=True)
		dc = pd.merge(dx,df7, left_on='id ', right_index=True)
		dv = pd.merge(dx,df8, left_on='id ', right_index=True)
		db = pd.merge(dv,df9, left_on='id ', right_index=True)
		dn = pd.merge(db,df10, left_on='id ', right_index=True)
		dm = pd.merge(dn,df11, left_on='id ', right_index=True)
		da = pd.merge(dm,df12, left_on='id ', right_index=True)
		df = pd.merge(da,df13, left_on='id ', right_index=True)

		
		list(df.columns)

		msno.matrix(df) 

		df.isnull().sum()

		#renaming two columns in dataframe
		df.columns.values[[6, 11,16,21,27,33,38,42,47,51,55,59,63]] = ['learning_rate_1', 'learning_rate_2','learning_rate_3','learning_rate_4','learning_rate_5','learning_rate_6','learning_rate_7','learning_rate_8','learning_rate_9','learning_rate_10','learning_rate_11','learning_rate_12','learning_rate_13']


		#creating a new dataframe dfr which will have learning rate
		dfr = df[['learning_rate_1', 'learning_rate_2','learning_rate_3','learning_rate_4','learning_rate_5','learning_rate_6','learning_rate_7','learning_rate_8','learning_rate_9','learning_rate_10','learning_rate_11','learning_rate_12','learning_rate_13']].groupby(level=0, axis=1).sum()


		#we get dummies as we cannot pass learning_rate textual format
		X=pd.get_dummies(dfr[['learning_rate_1', 'learning_rate_2','learning_rate_3','learning_rate_4','learning_rate_5','learning_rate_6','learning_rate_7','learning_rate_8','learning_rate_9','learning_rate_10','learning_rate_11','learning_rate_12','learning_rate_13' ]])


		#y here is the learning rate from the parent's feedback
		y = df14.avg_learning_rate


		#here the data is split into training and testing
		x_train, x_test, y_train, y_test = train_test_split(X, y, train_size=0.8, random_state = 10)



		from sklearn.linear_model import LogisticRegression
		logisticModel = LogisticRegression()
		logisticModel.fit(x_train,y_train)
		ypred3 = logisticModel.predict(x_test)


		#saving model to disk

		pickle.dump(logisticModel, open('model.pkl', 'wb'))


		#loading model to compare the results
		model = pickle.load(open('model.pkl', 'rb' ))
		if (ypred3[0]=="good" and str(data[3])=="1"):
			return(render_template("std1_poem_good.html"))

		elif(ypred3[0]=="good" and str(data[3])=="2"):
			return(render_template("std2_poem_good.html"))

		elif(ypred3[0]=="good" and str(data[3])=="3"):
			return(render_template("std3_poem_good.html"))

		elif(ypred3[0]=="good" and str(data[3])=="4"):
			return(render_template("std4_poem_good.html"))

		else :
			return(render_template("demo.html",ypred3=ypred3))
		return ("successfully logged in")
	else :
		return("unsuccessful")
    


@app.route("/std1poemgood")
def std1poemgood():
	return render_template("std1_spelling_good.html")

@app.route("/std1spellgood")
def std1spellgood():
	return render_template("std1_memory_good.html")

@app.route("/std1memorygood")
def std1memorygood():
	return render_template("std1_week1_good.html")

@app.route("/std1weektest" , methods=['POST'])
def std1weektest():
	username=session['loginusername']
	spellans1=request.form['resultspell1']
	spellans2=request.form['resultspell2']
	spellans3=request.form['resultspell3']
	memans1=request.form['resultmem1']
	memans2=request.form['resultmem2']
	readans1=request.form['result1']
	readans2=request.form['result2']
	readans3=request.form['result3']
	cursor.execute("insert into std1week1good(username,spellans1,spellans2,spellans3,memans1,memans2,readans1,readans2,readans3) values(%s,%s,%s,%s,%s,%s,%s,%s,%s)",(username,spellans1,spellans2,spellans3,memans1,memans2,readans1,readans2,readans3))
	con.commit()
	return(logoutstd1weektest())
def logoutstd1weektest():
	if 'username' in session:  
		session.pop('username',None)  
		return render_template('index.html')  
	else:  
		return render_template('index.html')



@app.route("/std2poemgood")
def std2poemgood():
	return render_template("std2_spelling_good.html")

@app.route("/std2spellgood")
def std2spellgood():
	return render_template("std2_memory_good.html")

@app.route("/std2memorygood")
def std2memorygood():
	return render_template("std2_week1_good.html")

@app.route("/std2weektest" , methods=['POST'])
def std2weektest():
	username=session['loginusername']
	spellans1=request.form['resultspell1']
	spellans2=request.form['resultspell2']
	spellans3=request.form['resultspell3']
	memans1=request.form['resultmem1']
	memans2=request.form['resultmem2']
	readans1=request.form['result1']
	readans2=request.form['result2']
	readans3=request.form['result3']
	cursor.execute("insert into std2week1good(username,spellans1,spellans2,spellans3,memans1,memans2,readans1,readans2,readans3) values(%s,%s,%s,%s,%s,%s,%s,%s,%s)",(username,spellans1,spellans2,spellans3,memans1,memans2,readans1,readans2,readans3))
	con.commit()
	return(logoutstd2weektest())
def logoutstd2weektest():
	if 'username' in session:  
		session.pop('username',None)  
		return render_template('index.html')  
	else:  
		return render_template('index.html')

@app.route("/std3poemgood")
def std3poemgood():
	return render_template("std3_spelling_good.html")

@app.route("/std3spellgood")
def std3spellgood():
	return render_template("std3_memory_good.html")

@app.route("/std3memorygood")
def std3memorygood():
	return render_template("std3_week1_good.html")

@app.route("/std3weektest" , methods=['POST'])
def std3weektest():
	username=session['loginusername']
	spellans1=request.form['resultspell1']
	spellans2=request.form['resultspell2']
	spellans3=request.form['resultspell3']
	memans1=request.form['resultmem1']
	memans2=request.form['resultmem2']
	readans1=request.form['result1']
	readans2=request.form['result2']
	readans3=request.form['result3']
	cursor.execute("insert into std3week1good(username,spellans1,spellans2,spellans3,memans1,memans2,readans1,readans2,readans3) values(%s,%s,%s,%s,%s,%s,%s,%s,%s)",(username,spellans1,spellans2,spellans3,memans1,memans2,readans1,readans2,readans3))
	con.commit()
	return(logoutstd3weektest())
def logoutstd3weektest():
	if 'username' in session:  
		session.pop('username',None)  
		return render_template('index.html')  
	else:  
		return render_template('index.html')

@app.route("/std4poemgood")
def std4poemgood():
	return render_template("std4_spelling_good.html")

@app.route("/std4spellgood")
def std4spellgood():
	return render_template("std4_memory_good.html")

@app.route("/std4memorygood")
def std4memorygood():
	return render_template("std4_week1_good.html")

@app.route("/std4weektest" , methods=['POST'])
def std4weektest():
	username=session['loginusername']
	spellans1=request.form['resultspell1']
	spellans2=request.form['resultspell2']
	spellans3=request.form['resultspell3']
	memans1=request.form['resultmem1']
	memans2=request.form['resultmem2']
	readans1=request.form['result1']
	readans2=request.form['result2']
	readans3=request.form['result3']
	cursor.execute("insert into std4week1good(username,spellans1,spellans2,spellans3,memans1,memans2,readans1,readans2,readans3) values(%s,%s,%s,%s,%s,%s,%s,%s,%s)",(username,spellans1,spellans2,spellans3,memans1,memans2,readans1,readans2,readans3))
	con.commit()
	return(logoutstd3weektest())
def logoutstd3weektest():
	if 'username' in session:  
		session.pop('username',None)  
		return render_template('index.html')  
	else:  
		return render_template('index.html')


@app.route("/parentlogin")
def parentlogin():
	return render_template("parentlogin.php")
@app.route("/dashboard" , methods=['POST'])
def dashboard():
	loginusername=request.form['loginusername']
	loginpassword=request.form['loginpassword']
	session['loginusername']=request.form['loginusername']
	if 'loginusername' in session:
		userdispaly=session['loginusername']
	query_stringlogin = "SELECT * FROM users WHERE username=%s && password=%s"
	cursor.execute(query_stringlogin, (loginusername,loginpassword,))
	data = cursor.fetchone()
	if data :
		if (str(data[3])=="1"):
			data1=get_data()
			return render_template("dashboard.html" , data=data ,data1=data1 , len = len(data1))
		elif (str(data[3])=="2"):
			data1 = get_data1()
		
			return render_template("dashboard.html" , data=data ,data1=data1 , len = len(data1))
		elif (str(data[3])=="3"):
			data1 = get_data2()
		
			return render_template("dashboard.html" , data=data ,data1=data1 , len = len(data1))

		elif (str(data[3])=="4"):
			data1 = get_data3()
		
			return render_template("dashboard.html" , data=data ,data1=data1 , len = len(data1))

		return render_template("dashboard.html" , data=data )
def get_data():
	loginusername=session['loginusername']
	query_stringlogin = "SELECT * FROM std1week1good WHERE username=%s"
	cursor.execute(query_stringlogin, (loginusername,))
	data1 = cursor.fetchone()
	con.commit()
	return(data1)
def get_data1():
	loginusername=session['loginusername']
	query_stringlogin = "SELECT * FROM std2week1good WHERE username=%s"
	cursor.execute(query_stringlogin, (loginusername,))
	data1 = cursor.fetchone()
	con.commit()
	return(data1)
def get_data2():
	loginusername=session['loginusername']
	query_stringlogin = "SELECT * FROM std3week1good WHERE username=%s"
	cursor.execute(query_stringlogin, (loginusername,))
	data1 = cursor.fetchone()
	con.commit()
	return(data1)
def get_data3():
	loginusername=session['loginusername']
	query_stringlogin = "SELECT * FROM std4week1good WHERE username=%s"
	cursor.execute(query_stringlogin, (loginusername,))
	data1 = cursor.fetchone()
	con.commit()
	return(data1)

if __name__ == "__main__":
    app.run(debug=True)
  
