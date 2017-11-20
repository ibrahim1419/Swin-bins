#!/usr/bin/python

# Importing the libraries
import cgi
import cgitb
cgitb.enable()
import numpy as np
import matplotlib.pyplot as plt
import pandas as pd




# HEADERS
print "Content-Type:text/html; charset=UTF-8"
print  # blank line required at end of headers

# CONTENT
print "<html><body>"
print "Content"
print "</body></html>"

# Importing the dataset
dataset = pd.read_csv('Position_Salaries.csv')
X = dataset.iloc[:, :-1].values
y = dataset.iloc[:, 3].values

datast = pd.read_csv('fill.csv')
dates = datast.iloc[:, :-1].values
fill= datast.iloc[:, 3].values

from sklearn.preprocessing import LabelEncoder, OneHotEncoder
labelencoder = LabelEncoder()
dates[:, 1] = labelencoder.fit_transform(dates[:, 1])
onehotencoder = OneHotEncoder(categorical_features = [1])
dates = onehotencoder.fit_transform(dates).toarray()


from sklearn.preprocessing import LabelEncoder, OneHotEncoder
labelencoder = LabelEncoder()
X[:, 1] = labelencoder.fit_transform(X[:, 1])
onehotencoder = OneHotEncoder(categorical_features = [1])
X = onehotencoder.fit_transform(X).toarray()


from sklearn.cross_validation import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2, random_state = 0)


# Fitting Multiple Linear Regression to the Training set
from sklearn.linear_model import LinearRegression
regressor = LinearRegression()
regressor.fit(X, y)

# Predicting the Test set results
y_pred = regressor.predict(dates)
        

df = pd.read_csv('fill.csv')
df = df[['ID','day','date','fill']]

df['fill'] = y_pred
df.to_csv('fill.csv')

