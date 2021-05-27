import speech_recognition as sr

def SpeechToText():
    r= sr.Recognizer()
    with sr.Microphone() as source:
        Text= 'Nothing'
        print('say something')
        audio = r.listen(source)
        print('Time over, Thanks')
        try:
            Text = r.recognize_google(audio, language="en-IN")
            print('Text: '+r.recognize_google(audio, language="en-IN"))
        except:
                pass
            
    return Text

def Speech():
    r= sr.Recognizer()
    with sr.Microphone() as source:
        Text= 'Nothing'
        print('say something')
        audio = r.listen(source)
        print('Time over, Thanks')
        try:
            Text = r.recognize_google(audio, language="hi-IN")
            print('Text: '+r.recognize_google(audio, language="hi-IN"))
        except:
                pass
            
    return Text
