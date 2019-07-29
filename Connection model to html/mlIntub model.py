import numpy as np # linear algebra
import pandas as pd # data processing, CSV file I/O (e.g. pd.read_csv)



#Import models from scikit learn module:
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression

from sklearn import metrics

from sklearn.externals import joblib
from sklearn.tree import DecisionTreeClassifier


def classification_model(model, data, traindf, testdf, predictors, outcome):
    # Fit the model:
    model.fit(traindf[predictors], traindf[outcome])

    # Make predictions on training set:
    predictions = model.predict(testdf[predictors])

    predictions_train = model.predict(traindf[predictors])
    #print(model.predict(traindf[predictor_var][0]))

    # Print accuracy
    accuracy = metrics.accuracy_score(predictions, testdf[outcome])

    accuracy1 = metrics.accuracy_score(predictions_train, traindf[outcome])


    print("test Accuracy : %s" % "{0:.3%}".format(accuracy))
    print("train Accuracy : %s" % "{0:.3%}".format(accuracy1))

df=pd.read_csv("G:/final year project/Mask ventillation/Mask ventilation data and code/Connection model to html/Intubealteredset.csv")

traindf, testdf = train_test_split(df, test_size = 0.3)




predictor_var = ['age','gender','BMI','mallampati_score','Interincisor_gap','Head_neck_movement','Pregnant','dental_condition','neck_thick','abscence_of_opening','strider_history','facial_asymetric','small_mandible','Thyromental_distance','ublt']

outcome_var='target'
model=DecisionTreeClassifier()
classification_model(model,df,traindf,testdf,predictor_var,outcome_var)

joblib.dump(model, 'intubation.pkl')

#lr = joblib.load('intubation.pkl')
# Saving the data columns from training
feature_cols={'age','gender','BMI','mallampati_score','Interincisor_gap','Head_neck_movement','Pregnant','dental_condition','neck_thick','abscence_of_opening','strider_history','facial_asymetric','small_mandible','Thyromental_distance','ublt'}
model_columns = list(feature_cols)
joblib.dump(model_columns, 'I_model_columns.pkl')
print("Models columns dumped!")
