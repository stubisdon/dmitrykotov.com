import smtplib

list = ['stubisdon@gmail.com', 'stubisdon@yandex.ru'];

try:
    sender = 'kodycube.74@gmail.com'
    receivers = list

    message = """Subject: I'm done\nDear Alice, thanks for all the fish. Sincerely,
Bob """ + "\n"
    smtpObj = smtplib.SMTP(host='smtp.gmail.com', port=587)
    smtpObj.ehlo()
    smtpObj.starttls()
    smtpObj.ehlo()
    smtpObj.login('kodycube.74@gmail.com','enlighten!')
    smtpObj.sendmail(sender, receivers, message)
    smtpObj.quit()
    print "Successfully sent email"

except smtplib.SMTPException,error:
    print str(error)
    print "Error: unable to send email"
