from flask import Flask, request, jsonify, render_template, session

from sklearn.externals import joblib
import traceback
import pandas as pd
import datetime

import mysql.connector



app = Flask(__name__,template_folder='C:/xampp/htdocs/Final year')

@app.route("/datafinal", methods=["GET", "POST"])
def get_data():
    if lr and lv:
        try:



                 #print("date is ", Date_of_admission)
                 #doa=datetime.datetime.strptime(Date_of_admission, "%d/%m/%Y").strftime("%Y-%m-%d")

                 #print("date is ", doa)
                # doa = date("Y-m-d", strtotime($Date_of_admission));
                 wardno = request.form['wardno']

                 #Patient_id = session.get('Patient_id')
                 #print("session date of birth is ", session.get('dob'))

                 doa = request.form['dateofa']

                 Patient_id = request.form['patient_id']

                 age = request.form["age"]
                 # mal = request.form["mal"]
                 gender = request.form["gender"]
                 bmi = request.form["bmi"]
                 ig = request.form["interincisor_gap"]
                 Hnm = request.form["hnm"]
                 p = request.form["pregnant"]
                 dc = request.form["dental_condition"]
                 nt = request.form["neck_thick"]
                 afo = request.form["absence_of_mouth"]
                 sh = request.form["strider_history"]
                 fa = request.form["facial_assemetry"]
                 sm = request.form["small_mandible"]
                 td = request.form["thyromental_distance"]
                 ulbt = request.form["ulbt"]
                 nc = int(request.form["nc"])
                 nr = int(request.form["neck_radiation"])
                 mal = int(request.form["mal"])
                 teeth = request.form["teeth"]

                 beard = request.form["beard"]
                 hos = request.form["hos"]

                 macroglossia = request.form["macroglossia"]

                 stiff_lungs = request.form["stiff_lungs"]


                 print("age ", age, "bmi ", bmi, "beard ", beard, "mal ", mal, "nr ", nr, "ulbt ", ulbt, "teeth ",
                       teeth, "nc ", nc, "macroglossia ", macroglossia, "hos ", hos, "stiff lungs ", stiff_lungs)

                 print("age ", age, "gender ", gender, "bmi", bmi, "mal ", mal, "interincisor_gap ", ig, "head_neck ", Hnm,"pregnant", p, "dental_condition ", dc, "neck_thick", nt, "absence of mouth opening", afo, "strider history ", sh, "Facial_assemtry", fa, "small_mandible", sm, "thyromental_distance", td)

                 #inserting into the database

                 mydb = mysql.connector.connect(
                     host="localhost",
                     user="root",
                     passwd="",
                     database="difficulties_in_airway"
                 )

                 mycursor = mydb.cursor()



                 mycursor.execute("INSERT INTO `patient_parameters` (`Patient_id`, `Date_of_admission`, `ward_no`, `Age`, `Gender`, `Beard`, `Mallampati`, `ULBT`, `BMI`, `Neck_circumference`, `Neck_radiation`, `Stiff_lungs`, `History_of_snoring`, `Teeth`, `Macroglossia`, `Interincisor_gap`,`Head_and_neck_movement`, `Pregnant`, `Neck_thick`, `Face_asymmetry`,`Small_mandible`, `Thyromental_distance`, `strider_history`, `buck_teeth`,`absence_of_mouth_op`) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",(Patient_id, doa, wardno ,age, gender, beard, mal, ulbt,bmi, nc, nr, stiff_lungs,hos,teeth,macroglossia,ig, Hnm,p,nt,fa,sm,td,sh,dc,afo))
                 #                 "17,0,0,0,0,0,0,0,17,0,0,0,0,0,0,0,17,0,0,0,0,0,0,0,0)")
                 #(17,0,0,0,0,0,0,0,17,0,0,0,0,0,0,0,17,0,0,0,0,0,0,0,0))
                 #   Patient_id, doa, wardno ,age, gender, beard, mal, ulbt,bmi, nc, nr, stiff_lungs,hos,teeth,macroglossia,ig, Hnm,p,nt,fa,sm,td,sh,dc,afo))


                 mydb.commit()

                 print(mycursor.rowcount, "record inserted")

                 queryIB= pd.DataFrame([[age, gender, bmi, mal, ig, Hnm, p, dc, nt, afo, sh, fa, sm, td, ulbt]])
                 print(queryIB)

                 queryMV= pd.DataFrame([[age, bmi, beard, mal, nr, ulbt, teeth, nc, macroglossia, hos, stiff_lungs]])
                 print(queryMV)


                 predictionIB = lr.predict(queryIB)

                 print(predictionIB)

                 predictionMV = lv.predict(queryMV)
                 print(predictionMV)

                 if predictionIB == 0:
                      res="Intubation is easy"
                 elif predictionIB == 1:
                      res="Intubation is difficult"
                 elif predictionIB == 2:

                    res="Intubation is impossible"
                 else:
                    res="error"

                 if predictionMV== 0:
                      res1="Mask Ventilation is easy"
                 elif predictionMV == 1:
                      res1="Mask Ventilation is difficult"
                 elif predictionMV == 2:

                     res1="Mask Ventilation is impossible"
                 else:
                     res1= "error"

                 return render_template('prediction result.html',placeholder="pre",a=str(res),b=str(res1))
        except:

            return jsonify({'trace': traceback.format_exc()})
    else:
                print ('Train the model first')
                return ('No model here to use')

if __name__ == '__main__':

    port = 12345 # If you don't provide any port the port will be set to 12345


    lr = joblib.load("intubation.pkl") # Load "model.pkl"
    lv = joblib.load("mask_ventil.pkl")

#    print ('Model loaded')
#    model_columns = joblib.load("model_columns.pkl") # Load "model_columns.pkl"
#    print ('Model columns loaded')

    app.run(port=port, debug=True)