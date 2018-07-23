-- tiki_innodb.sql is run after tiki.sql if InnoDB is being installed
-- Do not include fulltext index definitions. The installer will include these when the current db engine supports fulltext search
-- $Id: tiki_innodb.sql 64536 2017-11-12 18:13:06Z rjsmelo $

-- Force Tiki fulltext search off, when InnoDB is run
insert into tiki_preferences (name, value) values ('feature_search_fulltext', 'n') 
 ON DUPLICATE KEY UPDATE value = 'n';
