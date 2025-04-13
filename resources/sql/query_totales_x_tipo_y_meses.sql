SELECT 
    DATE_FORMAT(Fecha, '%Y-%m') AS Mes,
    TipoDcto,
    COUNT(*) AS TotalDTEs,
    SUM(Monto) AS SumaMontos
FROM dtes
GROUP BY Mes, TipoDcto
ORDER BY Mes DESC, TipoDcto;
