from flask import Flask , render_template, request

app = Flask(__name__, template_folder = 'templates')

@app.route('/', methods=['GET'])
def home():
    if request.method=='GET':
        return render_template('register.html')
    
@app.route('/register', methods=['POST'])
def register():
    print(request.form['myData'])
    return {'status' : 200}

if __name__ == '__main__':
    app.run(port=8080, debug=True)