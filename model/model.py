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
app.secret_key = 'your_secret_key'
@app.route("/")
def home():
    return render_template("index.html")
    
@app.route("/register")
def register():
	#Loading the quiz data
	#reading data
	
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


	#In[3]:


	dl = pd.merge(df0,df1, left_on='id ', right_index=True)


	# In[4]:


	dd  = pd.merge(dl,df2, left_on='id ', right_index=True)


	# In[5]:


	de  = pd.merge(dd,df3, left_on='id ', right_index=True)


	# In[6]:


	d  = pd.merge(de,df4, left_on='id ', right_index=True)


	# In[7]:


	dz = pd.merge(d,df5, left_on='id ', right_index=True)


	# In[8]:


	dx =  pd.merge(dz,df6, left_on='id ', right_index=True)


	# In[9]:


	dc = pd.merge(dx,df7, left_on='id ', right_index=True)


	# In[10]:


	dv = pd.merge(dx,df8, left_on='id ', right_index=True)


	# In[11]:


	db = pd.merge(dv,df9, left_on='id ', right_index=True)


	# In[12]:


	dn = pd.merge(db,df10, left_on='id ', right_index=True)


	# In[13]:


	dm = pd.merge(dn,df11, left_on='id ', right_index=True)


	# In[14]:


	da = pd.merge(dm,df12, left_on='id ', right_index=True)


	# In[15]:


	df = pd.merge(da,df13, left_on='id ', right_index=True)


	# In[16]:




	# In[17]:


	#display of all columns in the d dataframe which we are going to use.
	list(df.columns)


	# In[18]:


	#visulaization for missing values, no white space = no missing values
	msno.matrix(df) 


	# In[19]:


	df.isnull().sum()


	# In[20]:


	#renaming two columns in dataframe
	df.columns.values[[6, 11,16,21,27,33,38,42,47,51,55,59,63]] = ['learning_rate_1', 'learning_rate_2','learning_rate_3','learning_rate_4','learning_rate_5','learning_rate_6','learning_rate_7','learning_rate_8','learning_rate_9','learning_rate_10','learning_rate_11','learning_rate_12','learning_rate_13']



	# In[22]:


	#creating a new dataframe dfr which will have learning rate
	dfr = df[['learning_rate_1', 'learning_rate_2','learning_rate_3','learning_rate_4','learning_rate_5','learning_rate_6','learning_rate_7','learning_rate_8','learning_rate_9','learning_rate_10','learning_rate_11','learning_rate_12','learning_rate_13']].groupby(level=0, axis=1).sum()




	# In[24]:


	#we get dummies as we cannot pass learning_rate textual format
	X=pd.get_dummies(dfr[['learning_rate_1', 'learning_rate_2','learning_rate_3','learning_rate_4','learning_rate_5','learning_rate_6','learning_rate_7','learning_rate_8','learning_rate_9','learning_rate_10','learning_rate_11','learning_rate_12','learning_rate_13' ]])




	# In[26]:


	#y here is the learning rate from the parent's feedback
	y = df14.avg_learning_rate


	# In[37]:


	#here the data is split into training and testing
	


	from sklearn.linear_model import LogisticRegression
	logisticModel = LogisticRegression()
	logisticModel.fit(x_train,y_train)
	ypred3 = logisticModel.predict(x_test)
	


	#saving model to disk

	pickle.dump(logisticModel, open('model.pkl', 'wb'))


	#loading model to compare the results
	model = pickle.load(open('model.pkl', 'rb' ))

  
	
	return render_template("demo.html" , ypred3=logisticModel)

    
if __name__ == "__main__":
    app.run(debug=True)
  