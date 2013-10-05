## ScareMail

[ScareMail](http://bengrosser.com/projects/scaremail/) is a web browser extension that makes email “scary” in order to disrupt NSA surveillance. Extending Google’s Gmail, the work adds to every new email’s signature an algorithmically generated narrative containing a collection of probable NSA search terms. This “story” acts as a trap for NSA programs like PRISM and XKeyscore, forcing them to look at nonsense. Each email’s story is unique in an attempt to avoid automated filtering by NSA search systems.

For full information about the project, including a demonstration video, please see the [ScareMail](http://bengrosser.com/projects/scaremail/) homepage.

ScareMail runs on Chrome (as an extension distributed via the [Chrome Web Store](https://chrome.google.com/webstore/detail/scaremail/eepplgobicobmfkbgbfdfjeabhlffkjn)), Safari (as a self-distributed extension), and Firefox (as a self-distributed userscript for use with Scriptish).

This project premiered at [PRISM Breakup](http://prismbreakup.org), a series of art and technology events dedicated to exploring and providing forms of protection from surveillance. The art exhibition of PRISM Breakup runs from Oct 4-12, 2013.


### Installation

If you're just looking to install ScareMail, please visit the [installation page](http://bengrosser.com/projects/scaremail/install/).


### Files

* scaremail.user.js : the primary userscript code
* ScareMailTextSwapper.py : the source text preprocessor that creates input for scaremail.user.js
* extensions/chrome/* : source for the chrome extension
* extensions/safari/* : source for the safari extension
* extensions/firefox/* : source for the firefox userscript


### Dependencies

* works as an extension with Chrome, Safari
* works with Firefox as a userscript, but requires Scriptish
* uses a pasted-in copy of jQuery 1.7.2
* uses the jQuery SimpleModal 1.4.2 plugin
* uses [pattern.en](http://www.clips.ua.ac.be/pages/pattern-en)
* uses [NLTK](http://nltk.org)


### Contributions

If you have ideas for improving ScareMail, send me an email to chat about it or submit a pull request.

 
### Project Homepage
* [ScareMail](http://bengrosser.com/projects/scaremail/)

