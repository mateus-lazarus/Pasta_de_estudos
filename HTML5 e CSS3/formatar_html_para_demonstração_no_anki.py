from typing import Text
from icecream import ic
import pyperclip


focus_on = "0"

def replaces_all(Tf, highlight_element = "0"):
    global Texto
    # Text_file
    # Cuidado com a ordem, porque se os \n forem trocados por <br> antes pode dar ruim!
    Before = [  "<" ,   ">" ,  "\n"  , '    ']
    After =  ["&lt;", "&gt;", "<br>" , "\u2003"]
    
    if len(Before) == len(After):
        for x in range(0, len(Before)):
            Tf = Tf.replace(Before[x], After[x])   
    else:
        ic("Algo deu errado na confirmação de lista para replace!")
        
    if highlight_element != "0":
        H_E = highlight_element
        Tf = Tf.replace(H_E, f'<b><i><font color="#e72525">{H_E}</font></i></b>')
        
    Texto = Tf
    
    pyperclip.copy(Texto)
    

with open("C:/Users/Pichau/Desktop/Para-Demonstracoes.html", "rb") as f:
    Texto = f.read().decode("UTF-8")
    
    replaces_all(Texto, focus_on)
    print('It\'s finish')
    #print(Texto)

















